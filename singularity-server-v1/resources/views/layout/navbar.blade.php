<aside
    class="js-navbar-vertical-aside
            navbar
            navbar-vertical-aside
            navbar-vertical
            navbar-vertical-fixed
            navbar-expand-xl
            navbar-bordered
            bg-white  ">

    <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
            <!-- Logo -->

            <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
                <img class="navbar-brand-logo" src="{{ asset('assets/logo-name.png') }}" alt="Logo"
                    data-hs-theme-appearance="default">
                <img class="navbar-brand-logo" src="{{ asset('assets/logo-name-white.png') }}" alt="Logo"
                    data-hs-theme-appearance="dark">
                <img class="navbar-brand-logo-mini" style="height: 43x; width: 43px;" src="{{ asset('assets/logo.png') }}"
                    alt="Logo" data-hs-theme-appearance="default">
                <img class="navbar-brand-logo-mini" style="height: 43x; width: 43px;" src="{{ asset('assets/logo-dark.png') }}"
                    alt="Logo" data-hs-theme-appearance="dark">
            </a>

            <!-- End Logo -->

            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            <!-- End Navbar Vertical Toggle -->

            <!-- Content -->
            <div class="navbar-vertical-content">
                <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                    <!-- Collapse -->
                    <div class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}" role="button" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                            <i class="bi-house-door nav-icon"></i>
                            <span class="nav-link-title">Dashboard</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="{{route('users')}}" role="button" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                            <i class="bi-house-door nav-icon"></i>
                            <span class="nav-link-title">Usuarios</span>
                        </a>
                    </div>
                    
                    <!-- Gerir Categorias -->
                    <div class="nav-item">
                        <a class="nav-link" href="#navbarVerticalMenuPagesProviderCategories" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProviderCategories" aria-controls="navbarVerticalMenuPagesProviderCategories">
                            <i class="bi-building nav-icon"></i>
                            <span class="nav-link-title">Gerir Categorias</span>
                        </a>
            
                        <div id="navbarVerticalMenuPagesProviderCategories" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
                            <a class="nav-link" href="{{route('add-category')}}">Adicionar categoria</a>
                            <a class="nav-link" href="{{route('list-category')}}">Lista de Categorias</a>
                        </div>
                    </div>
            
                    <!-- Gerir Vagas -->
                    <div class="nav-item">
                        <a class="nav-link" href="#navbarVerticalMenuPagesProviderVacancies" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProviderVacancies" aria-controls="navbarVerticalMenuPagesProviderVacancies">
                            <i class="bi-building nav-icon"></i>
                            <span class="nav-link-title">Gerir Vagas</span>
                        </a>
            
                        <div id="navbarVerticalMenuPagesProviderVacancies" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
                            <a class="nav-link" href="{{route('add-vacancy')}}">Adicionar vagas</a>
                            <a class="nav-link" href="{{route('list-vacancy')}}">Lista de vagas</a>
                        </div>
                    </div>
                    
                </div>
        </div>
    </div>
</aside>
