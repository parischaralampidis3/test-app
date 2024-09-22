<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             
              {{ __("You're logged in!") }}
        </h2>  
        <div class="p-6 text-gray-900 dark:text-gray-100">
              
                </div>
    </x-slot>
 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              
    <section class="flex justify-around mx-5 px-0 py-6"> <!-- Added margin-x and padding-x -->
    <div class="mt-12 mx-auto overflow-x-auto">
  
      <div class="flex flex-row justify-between">
     
      
        </div>
              <div class="flex justify-around items-center">
            <h1 class="font-bold text-center mt-10 text-2xl ml-0">Archived Company List</h1>
            <a class="mt-10 ml-4 bg-green-600 text-white font-bold py-2 px-2 hover:underline" href="dashboard">Go at the main page</a>
        </div>
        <br /><br />
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th class="p-2 border-b border-slate-200 bg-slate-50">Company Name</th>
                        <th class="p-2 border-b border-slate-200 bg-slate-50">Address</th>
                        <th class="p-2 border-b border-slate-200 bg-slate-50">Email</th>
                        <th class="p-2 border-b border-slate-200 bg-slate-50">Website</th>
                        <th class="p-2 border-b border-slate-200 bg-slate-50">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($company as $company)
                    <tr class="hover:bg-slate-50 border-b border-slate-200">
                        <td class="p-4 py-5">{!! $company->name !!}</td>
                        <td class="p-4 py-5">{!! $company->address !!}</td>
                        <td class="p-4 py-5">{!! $company->email !!}</td>
                        <td class="p-4 py-5">{!! $company->website !!}</td>
                        <td class="p-4 py-5 flex">
                           
                          <form action = "{{route('company.restore', $company->id)}}" method="POST">
                                @csrf
                                <button class="ml-4 bg-blue-500 text-white font-bold py-2 px-2 hover:underline" >Restore</button>
                            </form>
                            <form action = "{{route('company.destroy', $company->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="ml-4 bg-red-500 text-white font-bold py-2 px-2 hover:underline" >Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

            </div>
        </div>
    </div>


  
</x-app-layout>