@extends('layouts.app')

@section('content1')

  @php
      $data = file_get_contents(resource_path('json/app-domains.json'));
      $domains = json_decode($data);
      //dd($domains);
  @endphp

  <div class="flex flex-wrap flex-row bg-gray-100 justify-center">
    <div class="flex-shrink max-w-full min-h-screen px-4 mb-6">
      {{-- HEADER --}}
      <div class="p-4 sm:p-12">
        <div class="relative">
          <header class="text-center mx-auto mb-12">
            <h1 class="text-3xl leading-normal font-bold text-gray-800">
              <span class="font-light"> Welcome to</span>
              SIFA
            </h1>
            <h2 class="text-xl leading-normal mb-2 text-gray-800">
              Sistem Informasi Fathona
            </h2>
          </header>
        </div>

        {{-- CONTENT --}}
        <div class="flex flex-wrap flex-row -mx-4 text-center">

          @foreach ($domains as $item)
            <a href="{{$item->url}}" class="flex-shrink max-w-full px-4 w-full sm:w-1/2 xl:w-1/3 drop-shadow-md">
              <!-- service block -->
              <div class="p-4 mb-12 bg-white rounded-md">
                <div class="relative w-20 h-20 mx-auto text-indigo-500 mb-4 p-4 rounded-lg border border-gray-100">
                  <!-- icon -->
                  <x-dynamic-component :component="$item->icon" />
                </div>
                <h3 class="text-lg font-semibold dark:text-gray-300 mb-1">{{$item->domain}}</h3>
                <p>{{$item->description}}</p>
              </div> <!-- end service block -->
            </a>
          @endforeach

        </div>
      </div>
    </div>
  </div>

@endsection
