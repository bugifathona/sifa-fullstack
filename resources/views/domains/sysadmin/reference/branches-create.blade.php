@extends('layouts.sysadmin')

@section('content2')
  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative">
        <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
          Create New Branch
        </h2>
        <form x-data="{ disabled: false }" x-on:submit="disabled = true" action="{{ route('sysadmin.reference.branches.store') }}" method="post">
          @csrf
          <div class="p-6 flex-grow">
            <x-form-input-text label="Branch Name" var="name"></x-form-input-text>
            <x-form-input-text label="Number Code" var="number_code"></x-form-input-text>
            <x-form-input-text label="Alpha Name" var="alpha_code"></x-form-input-text>
            <x-form-input-text label="Street Address" var="address"></x-form-input-text>
            <x-form-input-text label="Sub-district/Village" var="subdistrict"></x-form-input-text>
            <x-form-input-text label="District" var="district"></x-form-input-text>
            <x-form-input-text label="City/Regency" var="city"></x-form-input-text>
            <x-form-input-text label="Province" var="province"></x-form-input-text>
            <x-form-input-phone label="Phone/HP" var="phone"></x-form-input-phone>
            <x-form-input-email label="E-mail" var="email"></x-form-input-email>
            <input type="hidden" name="is_active" value="0">
            <x-form-checkbox label="Active" var="is_active" :options="$activeOptions"></x-form-checkbox>
            <x-form-input-text label="Other Info" var="other_info"></x-form-input-text>
          </div>
          <!-- Modal Buttons -->
          <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
            <a href="{{ route('sysadmin.reference.branches.index') }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">
              Back
            </a>
            <x-form-submit label="Create Branch"></x-form-submit>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
