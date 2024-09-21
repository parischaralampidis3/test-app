@extends('layout') <!-- Extends the main layout -->

@section('content')
    <section class="flex justify-around mx-5 px-0 py-6"> 
        <form method="POST" action="{{ url('create') }}">

            @csrf

                <div class="flex justify-around items-center">
    <h1 class="font-bold mt-10 mx-6 text-2xl mx-auto">Create a Company record</h1>
    
    <a class="mt-10 ml-4 bg-green-600 text-white font-bold py-2 px-2 hover:underline" href="/">Go at the main page</a>
    </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="{{ old('address') }}" required>
                @error('address')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="website">Website</label>
                <input type="url" name="website" id="website" value="{{ old('website') }}">
                @error('website')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Submit</button>
        </form>
    </section>
@endsection