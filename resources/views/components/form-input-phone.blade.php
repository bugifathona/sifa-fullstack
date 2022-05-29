<div class="mb-6">
  <label for="{{ $var }}" class="inline-block mb-2">{{ $label }}</label>
  <input
    type="tel"
    name="{{ $var }}"
    id="{{ $var }}"
    placeholder="{{ $placeholder }}"
    @if ($value !== null && $value !== '')
      value="{{ $value }}"
    @else
      value="{{ old($var) }}"
    @endif
    class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-green-500 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-green-500"
    >
  @error($var)
    <div class="text-red-500 text-sm">{{ $message }}</div>
  @enderror
</div>
