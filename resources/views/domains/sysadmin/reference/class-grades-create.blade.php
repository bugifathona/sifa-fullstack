@extends('layouts.sysadmin')

@section('content2')
  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative">
        <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
          Create New Class Grade
        </h2>
        <form x-data="{ disabled: false }" x-on:submit="disabled = true" action="{{ route('sysadmin.reference.class-grades.store') }}" method="post">
          @csrf
          <div class="p-6 flex-grow">
            <x-form-input-text label="Class Grade Name" var="name"></x-form-input-text>
            <x-form-input-text label="Class Alias" var="alias"></x-form-input-text>
            <x-form-select label="Education Level" var="ref_education_level_id" :options="$education_level_options"></x-form-select>
            <x-form-input-text label="Other Info" var="other_info"></x-form-input-text>
          </div>
          <!-- Modal Buttons -->
          <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
            <a href="{{ route('sysadmin.reference.class-grades.index') }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">
              Back
            </a>
            <x-form-submit label="Create"></x-form-submit>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
