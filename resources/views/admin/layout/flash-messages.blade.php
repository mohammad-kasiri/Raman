<script>
@if ($message = Session::get('success'))
Swal.fire( "بسیار عالی!", "{{$message}}", "success");
@endif

@if ($message = Session::get('error'))
Swal.fire( "خطا" , "{{$message}}", "error");
@endif

@if ($message = Session::get('warning'))
Swal.fire( "هشدار" , "{{$message}}", "warning");
@endif

@if ($message = Session::get('info'))
Swal.fire( "توجه", "{{$message}}", "info");
@endif
</script>
