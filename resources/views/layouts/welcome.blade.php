<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('frontend.partials.header')

<body>
    <div id="app">

        <main>
            @yield('content')
            
                @yield('widgets')

            @include('frontend.partials.content-footer')
        
        </main>  

        @include('frontend.partials.footer')   

    </div>

        @include('frontend.partials.scripts') 
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

</body>
</html>
