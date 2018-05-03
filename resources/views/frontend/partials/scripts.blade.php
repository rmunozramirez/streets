 <!-- Core JavaScript -->

<script src="{{ asset('js/libs.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
   <script>
        //toastr

        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

        @if(Session::has('info'))

        toastr.info("{{Session::get('info')}}")

        @endif

        @if(Session::has('error'))

        toastr.error("{{Session::get('error')}}")

        @endif

        @if(Session::has('success'))

        toastr.success("{{Session::get('success')}}")

        @endif
    </script>

    <script type="text/javascript">
        $('.select2-multi').select2({
                maximumSelectionLength: 8,
                placeholder: 'Choose an Actor',
                allowClear: true
            });
    </script>

    <script>
        $('#summernote').summernote({
            placeholder: 'And the Oscars goes to...',
            tabsize: 2,
            height: 200
        });
    </script>