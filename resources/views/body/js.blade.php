<script>
    var resizefunc = [];

</script>

<!-- jQuery  -->
<script src="{{ asset('moon/js/jquery.min.js') }}"></script>
<script src="{{ asset('moon/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('moon/js/waves.js') }}"></script>
<script src="{{ asset('moon/js/wow.min.js') }}"></script>
<script src="{{ asset('moon/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('moon/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('moon/assets/chat/moment-2.2.1.js') }}"></script>
<script src="{{ asset('moon/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('moon/assets/jquery-detectmobile/detect.js') }}"></script>
<script src="{{ asset('moon/assets/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('moon/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('moon/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- sweet alerts -->
<script src="{{ asset('moon/assets/sweet-alert/sweet-alert.min.js') }}"></script>
<script src="{{ asset('moon/assets/sweet-alert/sweet-alert.init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script> --}}


<!-- flot Chart -->
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('moon/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

<!-- Counter-up -->
<script src="{{ asset('moon/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('moon/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('moon/js/jquery.app.js') }}"></script>

<!-- Dashboard -->
<script src="{{ asset('moon/js/jquery.dashboard.js') }}"></script>

<!-- Chat -->
<script src="{{ asset('moon/js/jquery.chat.js') }}"></script>

<!-- Todo -->
<script src="{{ asset('moon/js/jquery.todo.js') }}"></script>


<script type="text/javascript">
    /* ==============================================
        Counter Up
        =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>

<script>
@if(Session::has('message'))
  var type = "{{!! Session::get('alert-type', 'info') !!}}";
  switch(type){
      case 'info':
          toastr.info("{{!! Session::get('message') !!}}");
          break;

      case 'warning':
          toastr.warning("{{!! Session::get('message') !!}}");
          break;

      case 'success':
          toastr.success("{{!! Session::get('message') !!}}");
          break;

      case 'error':
          toastr.error("{{!! Session::get('message') !!}}");
          break;
  }
@endif
</script>