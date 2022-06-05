@extends('layouts.sysadmin')

@section('content2')
  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative">
        <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
          Edit Education Level
        </h2>
        <form x-data="{ disabled: false }" x-on:submit="disabled = true" action="{{ route('sysadmin.reference.education-levels.update', $education_level->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="p-6 flex-grow">
            <x-form-input-text label="Education Level Name" var="name" :value="$education_level->name"></x-form-input-text>
            <x-form-input-text label="Number Code" var="number_code" :value="$education_level->number_code"></x-form-input-text>
            <x-form-input-text label="Other Info" var="other_info" :value="$education_level->other_info"></x-form-input-text>
          </div>
          <!-- Modal Buttons -->
          <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
            <a href="{{ route('sysadmin.reference.education-levels.index') }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mx-2">
              Back
            </a>
            <x-form-submit label="Update"></x-form-submit>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
