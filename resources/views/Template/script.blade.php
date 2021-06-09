<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- moment js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<script>
    function hover(element) {
        element.setAttribute('src', '{{asset('img/aboutUs/hen-2.png')}}');
    }

    function unhover(element) {
        element.setAttribute('src', '{{asset('img/aboutUs/michael.jpg')}}');
    }
</script>