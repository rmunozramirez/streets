<script src="{{ asset('js/admin/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/admin/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/admin/pace.min.js') }}"></script>
<script src="{{ asset('js/admin/inspinia.js') }}"></script>
<script src="{{ asset('js/admin/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.select2.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.summernote.js') }}"></script>
<script src="{{ asset('js/admin/jquery.toastr.min.js') }}"></script>

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

<script>
    $(document).ready(function() {
        var $validator = $("#commentForm").validate({
          rules: {
            emailfield: {
              required: true,
              email: true,
              minlength: 3
            },
            namefield: {
              required: true,
              minlength: 3
            },
            urlfield: {
              required: true,
              minlength: 3,
              url: true
            }
          }
        });
     
          $('#rootwizard').bootstrapWizard({
            'tabClass': 'nav nav-pills',
            'onNext': function(tab, navigation, index) {
              var $valid = $("#commentForm").valid();
              if(!$valid) {
                $validator.focusInvalid();
                return false;
              }
            }
          });
    });
</script>