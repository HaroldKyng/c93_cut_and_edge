<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Your System</title>
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
    <script src="{{asset('app-assets/tailwindcss.16')}}"></script>
</head>
<body class="h-screen flex">
<!-- Left Section -->
<div class="w-1/2 h-full relative flex items-center justify-center"style="background: #2c343b">
    <img src="#" alt="Background Image" class="absolute inset-0 w-full h-full object-cover opacity-60">
    <h1 class="text-white text-3xl font-bold relative text-center">Customer Portal</h1>
</div>

<!-- Right Section -->
<div class="w-1/2 h-full flex items-center justify-center bg-gray-200">
    <div class="bg-white bg-opacity-20 backdrop-blur-md p-8 rounded-lg shadow-md w-4/5">
        <div class="flex flex-col items-center">
            <img src="#" alt="Company Logo" class="mb-4" style="margin-top: 10px;max-height: 130px; width: auto">
{{--            <h2 class="text-xl font-semibold mb-6">Customer Portal</h2>--}}
            <h1 class="text-3xl font-bold relative text-center"style="color: #2c343b">Customer Portal</h1>
        </div>
        <form method="POST" action="{{ route('login.process') }}" >
        @csrf

        <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg" required>
            </div>



            <!-- Login Button -->
            <div class="mb-4">
                <button type="submit" class="w-full btn-dark text-white py-2 rounded-lg hover:bg-dark" style="background: #2c343b">Login</button>
            </div>

            <!-- Forgot Password Link -->
            <div class="text-center">
                <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
