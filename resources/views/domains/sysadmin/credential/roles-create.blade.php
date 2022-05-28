@extends('layouts.sysadmin')

@section('content2')
  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative">
        <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
          Create New Role
        </h2>
        <form action="{{ route('sysadmin.credential.roles.store') }}" method="post">
          @csrf
          <div class="p-6 flex-grow">
            <x-form-input-text label="Role Name" var="name" placeholder="Role Name"></x-form-input-text>
            <x-form-select label="Guard Name" var="guard_name" :options="$guardOptions"></x-ui-form-select>
          </div>
          <!-- Modal Buttons -->
          <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
            <a href="{{ route('sysadmin.credential.roles.index') }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">
              Back
            </a>
            <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0">
              Create Role
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
