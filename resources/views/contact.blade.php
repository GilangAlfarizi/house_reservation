@extends('layouts.default')

@section('content')
<div class="bg-white flex justify-center items-center min-h-screen m-0">
    <div class="w-full max-w-md p-6 space-y-6 bg-white shadow-md rounded-md">
        <h1 class="text-3xl font-bold text-center">Contact us</h1>

        <div class="flex justify-center space-x-4">
            <a href="https://wa.me/6289513997126" target="_blank" class="flex items-center space-x-2 px-4 py-2 bg-black text-white rounded">
                <span>💬</span>
                <span>WhatsApp</span>
            </a>
            <a href="mailto:ferdy19ndy@gmail.com" class="flex items-center space-x-2 px-4 py-2 bg-black text-white rounded">
                <span>✉️</span>
                <span>Email</span>
            </a>
        </div>

        <div class="text-center text-gray-400">or</div>

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-semibold">Name</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-black" required>
            </div>
            <div>
                <label class="block font-semibold">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-black" required>
            </div>
            <div>
                <label class="block font-semibold">Phone</label>
                <input type="tel" name="phone" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-black" required>
            </div>
            <div>
                <label class="block font-semibold">Message</label>
                <textarea name="message" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-black" required></textarea>
            </div>
            <p class="text-xs text-gray-500">
                Please ensure you put the correct and active email address and phone number. Our team will reach you soon.
            </p>
            <button type="submit" class="w-full py-2 bg-black text-white rounded-md">Send message</button>
        </form>
    </div>
</div>
@endsection