@extends('layouts.app')
@section('content')

  <!-- Hero Section -->
  <section class="bg-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col-reverse lg:flex-row items-center py-16 lg:py-24">
      <div class="text-center lg:text-left lg:mr-10">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to Credix</h1>
        <p class="mt-4 text-gray-600">
          The trusted platform for secure peer-to-peer lending and investment opportunities.
          Empowering individuals and businesses across Spain.
        </p>
        <div class="mt-6 space-x-4">
          <a href="#signup" class="bg-blue-600 text-white py-3 px-6 rounded hover:bg-blue-700">Join Now</a>
          <a href="#learn-more" class="text-blue-600 hover:underline">Learn More</a>
        </div>
      </div>
      <div>
        <img src="https://cdn.prod.website-files.com/605826c62e8de87de744596e/63f5e30a4d577354fdfce512_Duotone-Master-ssssFile-copy-p-800.jpg" alt="Hero Image" class="rounded-lg shadow-lg">
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-gray-800 text-center">Why Choose Credix?</h2>
      <p class="mt-4 text-gray-600 text-center">
        Discover the benefits of using our platform for lending, borrowing, and investing.
      </p>
      <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-blue-50 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-blue-600">Secure Transactions</h3>
          <p class="mt-2 text-gray-600">Your funds and personal data are fully protected with our advanced security protocols.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-blue-600">High Returns</h3>
          <p class="mt-2 text-gray-600">Enjoy competitive returns on your investments with minimal risks.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-blue-600">Easy to Use</h3>
          <p class="mt-2 text-gray-600">Our platform is designed for simplicity, ensuring a seamless user experience.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="signup" class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
      <h2 class="text-3xl font-bold">Start Your Journey Today</h2>
      <p class="mt-4 text-lg">Join thousands of investors and borrowers on Credix.</p>
      <a href="{{route('users')}}" class="mt-6 inline-block bg-white text-blue-600 py-3 px-6 rounded shadow hover:bg-gray-100">Sign Up Now</a>
    </div>
  </section>
@endsection
