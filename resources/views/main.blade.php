@extends('layout') <!-- Extends the layout.blade.php -->

@section('content')
<section class="flex justify-around mx-5 px-0 py-6"> <!-- Added margin-x and padding-x -->
    <div class="mt-12 mx-auto overflow-x-auto">
      <div class="flex flex-row justify-between">
        <h1 class="text-xl font-bold">Company List</h1>
         <a class="update bg-blue-500 text-white font-bold py-2 px-2 rounded" href="{{route('company.create')}}">Create Company</a>
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
                    @foreach ($companies as $company)
                    <tr class="hover:bg-slate-50 border-b border-slate-200">
                        <td class="p-4 py-5">{!! $company->name !!}</td>
                        <td class="p-4 py-5">{!! $company->address !!}</td>
                        <td class="p-4 py-5">{!! $company->email !!}</td>
                        <td class="p-4 py-5">{!! $company->website !!}</td>
                        <td class="p-4 py-5 flex">
                            <a class="update bg-blue-500 text-white font-bold py-2 px-2 rounded" href="{{route('company.update', $company->id)}}">Update</a>
                            <a class='ml-4 bg-blue-500 text-white font-bold py-2 px-2 hover:underline' href="{{route('company.show', $company->id)}}">Show</a>
                            <a href="#" class="ml-4 bg-red-500 text-white font-bold py-2 px-2 hover:underline">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
