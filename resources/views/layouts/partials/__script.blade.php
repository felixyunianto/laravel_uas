

<!-- DataTable -->
<script src="{{asset('assets/vendors/dataTable/datatables.min.js')}}"></script>
<script src="{{asset('assets/assets/js/examples/datatable.js')}}"></script>
<script src="{{asset('assets/assets/js/examples/sweet-alert.js')}}"></script>

<!-- Prism -->
<script src="{{asset('assets/vendors/prism/prism.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('assets/assets/js/app.min.js')}}"></script>

<script>
    function signOut() {
        swal({
            title: "Are you sure wanna want to sign out?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $('#logout-form').submit();
            }
        })
    }

</script>
