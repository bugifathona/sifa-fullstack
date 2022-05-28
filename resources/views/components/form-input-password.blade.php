<div class="mb-6">
  <label for="{{ $var }}" class="inline-block mb-2">{{ $label }}</label>
  <input type="password" name="{{ $var }}" id="{{ $var }}" placeholder="{{ $placeholder }}" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
  @error($var)
    <div class="text-red-500 text-sm">{{ $message }}</div>
  @enderror
</div>
