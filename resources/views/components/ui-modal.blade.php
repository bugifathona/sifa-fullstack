<div x-show="modalOpen" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6" style="display: none;">
  <div x-on:click.away="modalOpen = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px; display: none;" x-show="modalOpen" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
    <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
      <button x-on:click="modalOpen = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
      <!-- modal title -->
      <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">{{ $modalTitle }}</div>

      <!-- modal content -->
      {{ $slot }}

    </div>
  </div>
  <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
</div>
