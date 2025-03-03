<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search'); // Get the search query from the request

        // Start with a query builder instead of fetching all records
        $usersQuery = User::query();

        if ($search) {
            $usersQuery->where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            });
        }

        // Paginate the results
        $users = $usersQuery->latest()->paginate(10);
        $page_title="Login";
        return view('auth.login', compact('users','page_title'));
    }



    public function login_process(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $two_factor_email = $request->email;
        $two_factor_password = $request->password;

        $credentials = $request->only('email', 'password');
//        $this->validate($request, [
//            'CaptchaCode' => 'required|valid_captcha'
//        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Check the status of the user
            if ($user->status_id == 0) {
                // Flush session data
                Session::flush();
                Auth::logout();
                return back()->with('error', 'This account is not active. Please contact your administrator.');
            }
            // Check if 2fa is enabled
            if ($user->two_factor_status == 1) {
                $otp = self::generateOTP();
                User::where('email', $request->email)
                    ->update(['two_factor_code' => $otp,'two_factor_expiry' => date('Y-m-d h:m:s')]);

                Auth::logout();

                // Store data in the session persistently
                session([
                    'success' => 'A One Time Pin (OTP) has been sent to your email. Use it to complete the form below',
                    'two_factor_email' => $two_factor_email,
                    'two_factor_password' => $two_factor_password
                ]);
                return redirect()->route('login.otp')->with([
                    'success' => 'A One Time Pin (OTP) has been sent to your email. Use it to complete the form below',

                ]);
            }
            // Reset the code and expiry
            User::where('email', $request->email)
                ->update(['two_factor_code' => null, 'two_factor_code_expiry' => null]);
            // Get the client's IP address
            $ip = $request->ip();

            // If the request is coming through a proxy, get the actual client IP
            if ($request->server('HTTP_X_FORWARDED_FOR')) {
                $ip = $request->server('HTTP_X_FORWARDED_FOR');
            }

            Session::put('email', $user->email);
//            Session::put('user_id', $user->id);


            Auth::logoutOtherDevices($request->password);

            //invoke

            return redirect()->route('home')->with('success', 'Successfully Logged in');
        } else {
//            dd("email".$request->email."passkey".$request->password);
            return back()->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function generateOTP($length = 6)
    {
        // Define the characters allowed in the OTP
        $characters = '0123456789';
        $otp = '';

        // Generate the OTP of the desired length
        for ($i = 0; $i < $length; $i++) {
            $otp .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $otp;
    }

    public function forgot_password_process(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $my_details = User::where('email', $request->email)->first();
        $count = User::where('email', $request->email)->count();
//        dd($count);
        if ($count <= 0) {
            return back()->with('error', 'Oops! We cant find such an email address. Ensure you are registered on this platform otherwise submit your query on the Support Form');
        } else {

//            $my_details->email;
            $token = $my_details->id . $request->email . date('Ymdhms');
            User::where('email', $request->email)
                ->update(['remember_token' => $token]);
            $links = 'http://' . $request->getHost() . '/reset-password-page/' . $token;
            $data = array(
                'name' => $my_details->name,
                'image' => '',
                'title' => 'Password Reset',
                'email' => $my_details->email,
                'token' => $token,
                'link' => $links
            );

            Mail::send('mail_reset', $data, function ($message) use ($data) {
                $message->to($data['email'], $data['name'])->subject($data['title']);
                $message->from(env('EMAIL_SENDER'), 'Outage Scheduling System Support');
                $message->bcc(env('ADMIN_EMAIL'), 'Harold King Chomba');
            });

            return back()->with('success', 'Successfully Sent The Reset Link To ' . $request->email);
        }


    }

    function logout()
    {
        $userId = Auth::id();

        // Invalidate all user sessions
//        DB::table('sessions')->where('user_id', $userId)->delete();

        // Flush session data
        Session::flush();

        // Log the user out from the current session
        Auth::logout();

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'Signed out');
    }
}
