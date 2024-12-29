@extends('layouts.app')
@section('content')
<main class="flex items-center justify-center min-h-screen bg-gray-50">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
      <h2 class="text-2xl font-bold text-gray-800 text-center">Create Your Account</h2>
      <p class="text-gray-600 text-center mt-2">Join MyP2P today and start your journey!</p>
      
      <form action="#" method="POST" class="mt-6 space-y-4">
        <!-- Full Name -->
        <div>
          <label for="full-name" class="block text-gray-600 font-medium">Full Name</label>
          <input type="text" id="full-name" name="full-name" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your full name" required>
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-gray-600 font-medium">Email Address</label>
          <input type="email" id="email" name="email" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-gray-600 font-medium">Password</label>
          <input type="password" id="password" name="password" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Create a password" required>
        </div>

        <!-- Confirm Password -->
        <div>
          <label for="confirm-password" class="block text-gray-600 font-medium">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm your password" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Sign Up
        </button>
      </form>

      <p class="text-gray-600 text-center mt-6">
        Already have an account? 
        <a href="login.html" class="text-blue-600 hover:underline">Log In</a>
      </p>
    </div>
  </main>
  @endsection