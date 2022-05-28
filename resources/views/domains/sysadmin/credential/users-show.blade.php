@extends('layouts.sysadmin')

@section('content2')
  @php
    //dd($users);
  @endphp

  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative p-4 overflow-x-auto">
        <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
          User Details
        </h2>
        <table class="table-auto w-full">
          <tr>
            <td class="p-2 w-3/12">Username</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $user->username }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Role</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">
              @foreach ($user->roles as $role)
              @if ($loop->last)
                {{ $role->name }}
              @else
                {{ $role->name }},
              @endif
              @endforeach
            </td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Account Created</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $user->created_at->format('d M Y') }}</td>
          </tr>
          <tr>
            <td class="p-2 w-3/12">Last Updated</td>
            <td class="p-2 w-1/12">:</td>
            <td class="p-2 w-8/12">{{ $user->updated_at->format('d M Y') }}</td>
          </tr>
        </table>
        <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
          <a href="{{ route('sysadmin.credential.users.index') }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mx-2">
            Back
          </a>
          <a href="{{ route('sysadmin.credential.users.edit', $user->id) }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-700 hover:ring-0 hover:border-green-700 focus:bg-green-600 focus:border-green-700 focus:outline-none focus:ring-0 mx-2">
            Edit
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
