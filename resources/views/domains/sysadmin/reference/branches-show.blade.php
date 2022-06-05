@extends('layouts.sysadmin')

@section('content2')
  @php
    //dd($users);
  @endphp

  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative p-4 overflow-x-auto">
        <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
          Branch Details
        </h2>
        <table class="table-auto w-full">
          <tr>
            <td class="p-2 w-3/12">Branch Name</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->name }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Number Code</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->number_code }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Street Address</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->address }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Sub-District / Village</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->subdistrict }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">District</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->district }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">City / Regency</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->city }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Province</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->province }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Phone Number</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->phone }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">E-mail</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->email }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Active</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->is_active == true ? 'Yes' : 'No'  }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Other Info</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $branch->other_info == '' ? '-' : $branch->other_info }}</td>
          </tr>
        </table>
        <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
          <a href="{{ route('sysadmin.reference.branches.index') }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mx-2">
            Back
          </a>
          <a href="{{ route('sysadmin.reference.branches.edit', $branch->id) }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-700 hover:ring-0 hover:border-green-700 focus:bg-green-600 focus:border-green-700 focus:outline-none focus:ring-0 mx-2">
            Edit
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
