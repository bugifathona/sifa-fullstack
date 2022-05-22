@extends('layouts.sysadmin')

@section('content2')
  @php
    //dd($users);
  @endphp

  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative">
        <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
          Edit User
        </h2>
        <form action="{{ url('sysadmin/credential/users') }}" method="post">
          @csrf
          <div class="p-6 flex-grow">
            <div class="mb-6">
              <label for="username" class="inline-block mb-2">Username</label>
              <input type="text" name="username" value="{{ $user->username }}" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="username" placeholder="username" required>
              @error('username')
                <div class="text-red-500 text-sm">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-6">
              <label for="password" class="inline-block mb-2">Password</label>
              <input type="password" name="password" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="password" placeholder="password" required>
              @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-6">
              <label for="role" class="inline-block mb-2">Role</label>
              <select id="role" name="role" class="inline-block w-full leading-5 relative py-3 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-3 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none" required>
                <option value="">Select role</option>
                <option value="sysadmin" {{ $user->roles[0]->name == 'sysadmin' ? 'selected' : '' }}>Sysadmin</option>
                <option value="teacher" {{ $user->roles[0]->name == 'teacher' ? 'selected' : '' }}>Teacher</option>
                <option value="admin" {{ $user->roles[0]->name == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="leader" {{ $user->roles[0]->name == 'leader' ? 'selected' : '' }}>School Leader</option>
                <option value="director" {{ $user->roles[0]->name == 'director' ? 'selected' : '' }}>Board of Director</option>
                <option value="parent" {{ $user->roles[0]->name == 'parent' ? 'selected' : '' }}>Parent</option>
                <option value="student" {{ $user->roles[0]->name == 'student' ? 'selected' : '' }}>Student</option>
              </select>
              @error('role')
                <div class="text-red-500 text-sm">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <!-- Modal Buttons -->
          <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
            <a href="{{ url('sysadmin/credential/users') }}" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">
              Back
            </a>
            <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0">Create User</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
