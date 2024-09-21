<x-app-layout> 


    <section class="container mx-auto">             
        <div class="flex justify-around items-center">
            <h1 class="font-bold text-center mt-10 text-2xl ml-0">Create a Company record</h1>
            <a class="mt-10 ml-4 bg-green-600 text-white font-bold py-2 px-2 hover:underline" href="/">Go at the main page</a>
        </div>
           <div class="flex flex-column justify-center items-center mt-10">

        <form method="POST" action="{{ url('create') }}">

            @csrf

            <div  class="flex flex-col" >
                <label class="font-bold" for="name">Company Name</label>
                <input class="rounded-md mt-5" type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div  class="flex flex-col">
                <label class="font-bold mt-5" for="address">Company Address</label>
                <input class="rounded-md mt-5" type="text" name="address" id="address" value="{{ old('address') }}" required>
                @error('address')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div  class="flex flex-col">
                <label class="font-bold mt-5" for="email">Company Email</label>
                <input class="rounded-md mt-5" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div  class="flex flex-col">
                <label class="font-bold mt-5" for="website">Company Website</label>
                <input class="rounded-md mt-5" type="url" name="website" id="website" value="{{ old('website') }}">
                @error('website')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button  class="mt-10 ml-10 bg-blue-600 text-white font-bold py-2 px-2 hover:underline" type="submit">Submit</button>
        </form>
        </div>
    </section>

</x-app-layout>