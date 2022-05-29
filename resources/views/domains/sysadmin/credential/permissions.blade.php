@extends('layouts.sysadmin')

@section('content2')
  @php
  //dd($permissions);
  @endphp

  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative p-4 overflow-x-auto">

        <x-sweet-action-notif model="Permission"></x-sweet-action-notif>

        <div class="mb-12">
          <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">
            User Permissions Data
          </h2>
          <div class="flex justify-start">
            <a href="javascript:;" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0 mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem" height="1.5rem" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Add User Permission
            </a>
          </div>
          <table class="table-auto w-full">
            <thead class="bg-gray-100 border-t border-l border-r dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700">
              <tr>
                <th class="p-2 min-w-[80px] w-20">Action</th>
                <th class="p-2 min-w-[150px]">Permission</th>
                <th class="p-2 min-w-[150px]">Created</th>
                <th class="p-2 min-w-[150px]">Updated</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($permissions as $permission)
                <tr>
                  <td class="border border-gray-200 p-2 dark:border-gray-700 text-center">
                    <a href="#" class="inline-block text-blue-500 hover:text-blue-700 border border-blue-500 hover:border-blue-700 rounded">
                      {{-- Heroicons -- Pencil --}}
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                      </svg>
                    </a>
                    <form action="#" id="form{{ $permission->id }}" method="POST" class="inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" x-on:click="confirm('form{{ $permission->id }}')" class="inline-block text-red-500 hover:text-red-700 border border-red-500 hover:border-red-700 rounded">
                        {{-- Heroicons -- Trash --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                      </button>
                    </form>
                  </td>
                  <td class="border border-gray-200 p-2 dark:border-gray-700">
                    <a href="{{ route('sysadmin.credential.permissions.show', $permission->id)}}" class="hover:font-semibold hover:text-black">
                      <u>{{ $permission->name }}</u>
                    </a>
                  </td>
                  <td class="border border-gray-200 p-2 dark:border-gray-700">{{ $permission->created_at->format('d M Y') }}</td>
                  <td class="border border-gray-200 p-2 dark:border-gray-700">{{ $permission->updated_at->format('d M Y') }}</td>
                </tr>
              @endforeach
              @if ($permissions->count() == 0)
                <tr>
                  <td colspan="5" class="font-bold text-center border border-gray-200 p-4 dark:border-gray-700">
                    Sorry, there is no data to be displayed!
                  </td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    function confirm(form) {
      event.preventDefault()
      Swal.fire({
        title: 'Sure to delete this?',
        text: 'You can not revert this action!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          //console.log(form)
          document.getElementById(form).submit()
        }
      })
    }
  </script>
@endsection
