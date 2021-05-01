@if(session('messages'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session('messages') }}',
            showConfirmButton: false,
            timer: 3500
        })
    </script>
@endif
