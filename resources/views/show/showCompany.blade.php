<x-app-layout>
<div class="container mx-auto">
    <div class="flex justify-between items-center">
    <h1 class="font-bold mt-10 mx-6 text-2xl mx-auto">Company Record - Details</h1>
    <a class="mt-10 ml-4 bg-green-600 text-white font-bold py-2 px-2 hover:underline" href="/">Go at the main page</a>
    </div>
</div>
<div class="container mx-auto text-center p-5 mt-12 py-12 border w-3/3">
    <div class="p-4">
    <div class="flex flex-col lg:flex-row justify-around">
    <div class="mt-4">
      
        <h1 class="font-bold text-blue-400">Company Name:</h1>
        <p>{{$company->name}}</p>
    </div>
    <div class="mt-4">
        
        <h1 class="font-bold text-blue-400">Company Email:</h1>
        <p>{{$company->email}}</p>
    </div>
    
 
    <div class="mt-4">
      
        <h1 class="font-bold text-blue-400">Company Address</h1>
        <p>{{$company->address}}</p>
    </div>
    <div class="mt-4">
     
        <h1 class="font-bold text-blue-400">Company Website</h1>
        <p>{{$company->website}}</p>

    </div>
    </div>
</div>
</div>
</x-app-layout>
