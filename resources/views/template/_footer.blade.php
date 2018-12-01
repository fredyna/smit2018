    {{--  Footer  --}}
    <footer class="px-footer px-footer-bottom">
    Copyright © 2018 Komunitas SMIT. All rights reserved.
    </footer>
</body>

    <!-- ==============================================================================
    |
    |  SCRIPTS
    |
    =============================================================================== -->
    {{--  Pace.js  --}}
    <script src="{{ asset('template-admin/pace/pace.min.js') }}"></script>

    {{--  Load jQuery  --}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>

    {{--  Core scripts  --}}
    <script src="{{ asset('template-admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template-admin/js/pixeladmin.min.js') }}"></script>

    {{--  Your scripts  --}}
    <script src="{{ asset('template-admin/js/app.js') }}"></script>

    {{-- include script --}}
    @yield('myscript')