{{-- Sweetalert for new user created --}}
@if (Session::has('created'))
<script>
  Swal.fire({
    title: 'Created',
    html: '{{ $model }} <span class="text-black font-bold">{{ Session::get('created') }}</span> created!',
    icon: 'success',
    confirmButtonText: 'OK'
  })
</script>
@endif

@if (Session::has('updated'))
<script>
  Swal.fire({
    title: 'Updated',
    html: '{{ $model }} <span class="text-black font-bold">{{ Session::get('updated') }}</span> updated!',
    icon: 'success',
    confirmButtonText: 'OK'
  })
</script>
@endif

@if (Session::has('deleted'))
<script>
  Swal.fire({
    title: 'Deleted',
    html: '{{ $model }} <span class="text-black font-bold">{{ Session::get('deleted') }}</span> deleted!',
    icon: 'success',
    confirmButtonText: 'OK'
  })
</script>
@endif
