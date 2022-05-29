<div class="mb-6">
  @foreach ($options as $option)
    <label class="flex items-center mb-6">
      <input
        type="checkbox"
        name="checked-demo"
        value="{{ $option->value }}"
        class="h-6 w-6 text-green-500 checked:accent-green-500 dark:bg-gray-700 border border-gray-500 dark:border-gray-700 rounded-md focus:outline-none ltr:mr-2 rtl:ml-2">
      <span>{{ $option->label }}</span>
    </label>
  @endforeach
</div>
