<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
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
        $page_title="Users";

        return view('users.list', compact('users','page_title'));
    }

    public function create()
    {

        $page_title="User Creation";
        return view('users.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        // Validate the request

        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'created_by' => 'nullable|string|max:255',
            'status_id' => 'nullable',
        ]);


        try {
            // Create the user record
            $user = new User($request->all());
            $user->created_by = Auth::user()->id;
            $user->save();

//            return response()->json([
//                'message' => 'user updated successfully',
//                'user' => $user
//            ], 201);
            $links = 'http://' . $request->getHost();
            $reset_link = 'http://' . $request->getHost() . '/reset-password-page/';
            $data = array(
                'name' => $request->first_name." ".$request->last_name,
                'image' => '',
                'title' => config('app.name').' Registration',
                'email' => $request->email,
                'body' =>"Your account has been successfully set up for access to the C93 Cut and Edge Portal. You will be accessing this portal as a representative of ",
                'link'=>$links,
                'reset_link'=>$reset_link
            );

            Mail::send('mails.mail_registration', $data, function ($message) use ($data) {
                $message->to($data['email'], $data['name'])->subject($data['title']);
                $message->from(env('EMAIL_SENDER'), config('app.name'). ' Support');
                $message->cc(env('SUPPORT_EMAIL'), config('app.name'). ' Support');
                $message->bcc(env('ADMIN_EMAIL'), 'Harold King Chomba');
            });
            return redirect()->route('users.list')->with('success', 'User created successfully.');

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'There was an error creating the user record.' . $e->getMessage(),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function edit($id)
    {
        $user_details = User::find($id);
//dd($user_details);
        $page_title="User Details";
        $customers = Customer::orderBy('customer_name','asc')->get();
        return view('users.edit', compact('page_title','user_details','customers'));
    }


    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'status_id' => 'integer|default:0',
        ]);


        $user->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'job_title' => $request->job_title,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'status_id' => $request->status_id,
        ]);

        return redirect()->route('users.list')->with('success', 'User updated successfully');
    }

    public function activateUser($id)
    {
        // Retrieve the user details by ID
        $user_details = User::find($id);
// Check if the user with the given ID exists
        if ($user_details) {
            $user_details->status = 1;


            // Save the updated user details
            $user_details->save();

            // Optionally, return a success message or perform any necessary actions
            // For example:
//            return back()->with('success', 'Successfully Submitted');
            return back()->with('success', 'User has been activated successfully');
        } else {
            // Handle case where the job with the given ID doesn't exist
            // For example:
            return back()->with('error', 'user not found!');
        }


//        return view('jobs_details', compact('job_details', 'categories', 'job_types'));
    }



    public function profile($id)
    {
        $user_details = User::find($id);
//dd($user_details);
        $page_title="User Profile";
//        $customers = Customer::orderBy('customer_name','asc')->get();
        return view('users.profile', compact('page_title','user_details'));
    }

    public function destroy(User $user)
    {
        // Remove the image file if it exists in the storage folder
        if ($user->image) {
            Storage::delete('public/' . $user->image);
        }

        // Delete the company from the database
        $user->delete();

        return back()->with('success', 'User deleted successfully.');
    }


}
