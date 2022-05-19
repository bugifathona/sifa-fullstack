@extends('layouts.app')

@section('level1')

  <div class="flex h-screen w-screen bg-blue-100">
    <div class="w-[80%] h-[80%] bg-white m-auto flex">
      <div x-data="{ rotated: false }" class="m-auto">

        <div :class="{ 'rotate-90': rotated }" class="duration-1000">
          <h1>DJSAKDJAKLDSAJLDA</h1>
        </div>

        <button class="p-2 bg-green-500 rounded-md text-white font-bold" x-on:click="rotated = !rotated">
          CLICK ME
        </button>
      </div>
    </div>
  </div>

@endsection
