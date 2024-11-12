<aside
    class="js-navbar-vertical-aside
            navbar
            navbar-vertical-aside
            navbar-vertical
            navbar-vertical-fixed
            navbar-expand-xl
            navbar-bordered
            bg-white  ">
            @php
            $role = Auth::user()->role;
        @endphp
            <div class="navbar-vertical-container">
                <div class="navbar-vertical-footer-offset">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
                        <img class="navbar-brand-logo" src="{{ asset('assets/logo-name.png') }}" alt="Logo" data-hs-theme-appearance="default">
                        <img class="navbar-brand-logo" src="{{ asset('assets/logo-name-white.png') }}" alt="Logo" data-hs-theme-appearance="dark">
                        <img class="navbar-brand-logo-mini" style="height: 43px; width: 43px;" src="{{ asset('assets/logo.png') }}" alt="Logo" data-hs-theme-appearance="default">
                        <img class="navbar-brand-logo-mini" style="height: 43px; width: 43px;" src="{{ asset('assets/logo-dark.png') }}" alt="Logo" data-hs-theme-appearance="dark">
                    </a>
                    <!-- End Logo -->
                    
                    <!-- Navbar Vertical Toggle -->
                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                        <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                        <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
            
                    <!-- Content -->
                    <div class="navbar-vertical-content">
                        <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                            @if($role == 'admin')
                            <!-- Dashboard Link -->
                            <div class="nav-item">
                                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                    <i class="bi-house-door nav-icon"></i>
                                    <span class="nav-link-title">Dashboard</span>
                                </a>
                            </div>
            
                            <!-- Users Link -->
                            <div class="nav-item">
                                <a class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">
                                    <i class="bi-people nav-icon"></i>
                                    <span class="nav-link-title">Usuários</span>
                                </a>
                            </div>
                            @elseif($role == 'employer' || $role == 'admin')
                            <!-- Manage Categories -->
                            <div class="nav-item">
                                <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}" href="#navbarVerticalMenuPagesProviderCategories" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProviderCategories" aria-controls="navbarVerticalMenuPagesProviderCategories">
                                    <i class="bi-tags nav-icon"></i>
                                    <span class="nav-link-title">Gerir Categorias</span>
                                </a>
                                <div id="navbarVerticalMenuPagesProviderCategories" class="nav-collapse collapse {{ request()->is('categories*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link {{ request()->routeIs('add-category') ? 'active' : '' }}" href="{{ route('add-category') }}">Adicionar categoria</a>
                                    <a class="nav-link {{ request()->routeIs('list-category') ? 'active' : '' }}" href="{{ route('list-category') }}">Lista de Categorias</a>
                                </div>
                            </div>
            
                            <!-- Manage Vacancies -->
                            <div class="nav-item">
                                <a class="nav-link {{ request()->is('vacancies*') ? 'active' : '' }}" href="#navbarVerticalMenuPagesProviderVacancies" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProviderVacancies" aria-controls="navbarVerticalMenuPagesProviderVacancies">
                                    <i class="bi-briefcase nav-icon"></i>
                                    <span class="nav-link-title">Gerir Vagas</span>
                                </a>
                                <div id="navbarVerticalMenuPagesProviderVacancies" class="nav-collapse collapse {{ request()->is('vacancies*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link {{ request()->routeIs('add-vacancy') ? 'active' : '' }}" href="{{ route('add-vacancy') }}">Adicionar Vagas</a>
                                    <a class="nav-link {{ request()->routeIs('list-vacancy') ? 'active' : '' }}" href="{{ route('list-vacancy') }}">Lista de Vagas</a>
                                </div>
                            </div>
            
                            <!-- Manage Posts -->
                            <div class="nav-item">
                                <a class="nav-link {{ request()->is('posts*') ? 'active' : '' }}" href="#navbarVerticalMenuPagesProviderPosts" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProviderPosts" aria-controls="navbarVerticalMenuPagesProviderPosts">
                                    <i class="bi-pencil-square nav-icon"></i>
                                    <span class="nav-link-title">Gerir Posts</span>
                                </a>
                                <div id="navbarVerticalMenuPagesProviderPosts" class="nav-collapse collapse {{ request()->is('posts*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link {{ request()->routeIs('add-post') ? 'active' : '' }}" href="{{ route('add-post') }}">Adicionar Post</a>
                                    <a class="nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}" href="{{ route('posts.index') }}">Lista de Posts</a>
                                </div>
                            </div>
                            @else
                            <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                                <div class="text-center">
                                    <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Imagem de erro" style="width: 10rem;" data-hs-theme-appearance="default">
                                    <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Imagem de erro" style="width: 10rem;" data-hs-theme-appearance="dark">
                                    <p class="mb-0">Nso  esta autorizado a usar essa app</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
</aside>
