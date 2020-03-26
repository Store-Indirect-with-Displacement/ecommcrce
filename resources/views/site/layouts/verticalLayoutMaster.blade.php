<body class="vertical-layout vertical-menu-modern 2-columns {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }}  {{($configData['theme'] === 'light') ? '' : $configData['theme'] }}    {{ $configData['footerType'] }}" data-menu="vertical-menu-modern" data-col="2-columns"  data-layout="{{ $configData['theme'] }}">
    <!-- BEGIN: Content-->
    <div class="app-content">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        {{-- Include Navbar --}}
        @include('panels.navbar')

        <?php if (!empty($configData['contentLayout'])): ?>
            <div class="content-area-wrapper">
               
                <div class="<?= $configData['contentsidebarClass'] ?>">
                    <div class="content-wrapper">
                        <div class="content-body">
                            {{-- Include Page Content --}}
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
        <div class="content-wrapper">
            

                <div class="content-body">
                    {{-- Include Page Content --}}
                    @yield('content')
                </div>
            </div>
        <?php endif; ?>

    </div>
    <!-- End: Content-->

    <?php if ($configData['blankPage'] == false): ?>
        @include('Dashborad.pages.customizer')

        @include('Dashborad.pages.buy-now')
    <?php endif; ?>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    {{-- include footer --}}
    @include('panels/footer')

    {{-- include default scripts --}}
    @include('panels/scripts')

</body>
</html>
