@extends('layouts.sysadmin')

@section('content2')
  @php
    dd($users);
  @endphp

  <div class="flex-shrink max-w-full px-4 w-full mb-6">
    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full text-gray-700">
      <div class="relative">
        <div class="mb-6">
          <p class="leading-relaxed font-light text-lg mx-auto pb-2">
            Documentation and examples for opt-in styling of tables.
          </p>
        </div>

        <div class="mb-12">
          <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Users Data</h2>
          <table class="table-auto w-full">
            <thead class="bg-gray-100 border-t border-l border-r dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700">
              <tr>
                <th class="px-4 py-3">Username</th>
                <th class="px-4 py-3">Roles</th>
                <th class="px-4 py-3">Created</th>
                <th class="px-4 py-3">Updated</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $item)

              @endforeach
              <tr>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">Intro to CSS</td>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">Adam</td>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">858</td>
              </tr>
              <tr>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">Adam</td>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">112</td>
              </tr>
              <tr>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">Intro to JavaScript</td>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">Chris</td>
                <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">1,280</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
