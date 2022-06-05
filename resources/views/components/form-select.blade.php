<div class="mb-6">
  <label for="{{ $var }}" class="inline-block mb-2">{{ $label }}</label>
  <select id="{{ $var }}" name="{{ $var }}" class="inline-block w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
      <option
        value=""
        @if ($selected == null && $selected == '')
          selected
        @endif
        >
        {{ $placeholder }}
      </option>
      @foreach ($options as $option)
          <option
            value="{{ $option->value }}"
            @if ( $option->value == $selected)
              selected
            @endif
            >
            {{ $option->name }}
          </option>
      @endforeach
  </select>
  @error($var)
    <div class="text-red-500 text-sm">{{ $message }}</div>
  @enderror
</div>
