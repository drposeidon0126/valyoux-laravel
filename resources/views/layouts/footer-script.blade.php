        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
        <!-- Sweet Alerts js -->
        <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        @yield('script')
        <!-- App js -->

        <script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/app.js')}}"></script>


        @if(session()->has('success'))
            <script type="text/javascript">js_success("{{ session('success') }}")</script>
        @endif
        @if(session()->has('error'))
            <script type="text/javascript">js_error("{{ session('error') }}")</script>
        @endif
        @if(session()->has('notify'))
            <script type="text/javascript">js_notify("{{ session('notify') }}","{{ session('url') }}","{{ session('button') }}")</script>
        @endif

        @yield('script-bottom')
