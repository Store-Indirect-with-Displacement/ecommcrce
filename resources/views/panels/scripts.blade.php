{{-- Vendor Scripts --}}
<script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>

@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ asset('js/core/app-menu.js') }}"></script>
<script src="{{ asset('js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('js/core/app.js') }}"></script>
<script src="{{ asset('js/scripts/components.js') }}"></script>
<?php if ($configData['blankPage'] == false): ?>
    <script src="{{ asset('js/scripts/customizer.js') }}"></script>
    <script src="{{ asset('js/scripts/footer.js')}}"></script>
<?php endif; ?>
{{-- page script --}}
@yield('page-script')
{{-- page script --}}
