@extends('admin.layout.base')

@section('title', '| Professionais')

@section('content')

    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Professionais</h1>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('add-user') }}">
                        <i class="bi-person-plus-fill me-1"></i> Adicionar Profissional
                    </a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>

        <!-- Nav Scroller -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-left"></i>
                </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-right"></i>
                </a>
            </span>


        </div>
        <!-- End Nav Scroller -->

        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2">Total De Profissionais</h6>

                    <div class="row align-items-center gx-2">
                        <div class="col">
                            <span class="js-counter display-4 text-dark">1543</span>
                            <span class="text-body fs-5 ms-1">de 1470</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                            <span class="badge bg-soft-success text-success p-1">
                                <i class="bi-graph-up"></i> 5.0%
                            </span>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Card -->
        </div>

    </div>
    <!-- End Page Header -->

    <!-- Card -->
    <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-sm-between">
            <div class="mb-2 mb-sm-0">
                <form>
                    <!-- Search -->
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text">
                            <i class="bi-search"></i>
                        </div>
                        <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders"
                            aria-label="Search orders">
                    </div>
                    <!-- End Search -->
                </form>
            </div>

            <div class="d-grid d-sm-flex justify-content-sm-end align-items-sm-center gap-2">
                <!-- Datatable Info -->
                <div id="datatableCounterInfo" style="display: none;">
                    <div class="d-flex align-items-center">
                        <span class="fs-5 me-3">
                            <span id="datatableCounter">0</span>
                            Selected
                        </span>
                        <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                            <i class="bi-trash"></i> Delete
                        </a>
                    </div>
                </div>
                <!-- End Datatable Info -->

                <!-- Dropdown -->
                <div class="dropdown">
                    <button type="button" class="btn btn-white w-100" id="showHideDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi-table me-1"></i> Colunas <span
                            class="badge bg-soft-dark text-dark rounded-circle ms-1">5</span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown"
                        style="width: 15rem;">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-grid gap-3">
                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_name">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">id</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_name"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->
                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_name">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Name</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_name"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_email">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">E-mail</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_email"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_phone">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Celular</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_phone">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_country">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Localização</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_country"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_account_status">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Serviços</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input"
                                                id="toggleColumn_account_status">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_orders">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Status de Subscricao</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_orders"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Dropdown -->
            </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
            <table id="datatable"
                class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 15,
                     "isResponsive": true,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                                <label class="form-check-label" for="datatableCheckAll"></label>
                            </div>
                        </th>
                        <th class="table-column-ps-0">Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Celular</th>
                        <th>Localização</th>
                        <th>Serviços</th>
                        <th>Status de subscricao</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>

                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck1">
                                <label class="form-check-label" for="usersDataCheck1"></label>
                            </div>
                        </td>
                        <td class="table-column-pe-0">1</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img10.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Amanda Harvey <i
                                            class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Top endorsed"></i></span>
                                </div>
                            </a>
                        </td>
                        <td>amanda@site.com</td>
                        <td>+1-202-555-0140</td>
                        <td>United Kingdom</td>
                        <td>Advogado</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck2">
                                <label class="form-check-label" for="usersDataCheck2"></label>
                            </div>
                        </td>
                        <td>2</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-soft-primary avatar-circle">
                                        <span class="avatar-initials">A</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Anne Richard</span>
                                </div>
                            </a>
                        </td>
                        <td>anne@site.com</td>
                        <td>+1-752-235-2353</td>
                        <td>United States</td>
                        <td>Carpinteiro</td>
                        <td>
                            <span class="legend-indicator bg-danger"></span>Disabled
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck3">
                                <label class="form-check-label" for="usersDataCheck3"></label>
                            </div>
                        </td>
                        <td>3</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img3.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">David Harrison</span>
                                </div>
                            </a>
                        </td>
                        <td>david@site.com</td>
                        <td>+1-235-364-2611</td>
                        <td>United States</td>
                        <td>Juiz</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck4">
                                <label class="form-check-label" for="usersDataCheck4"></label>
                            </div>
                        </td>
                        <td>4</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img5.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Finch Hoot</span>
                                </div>
                            </a>
                        </td>
                        <td>finch@site.com</td>
                        <td>+1-743-632-9574</td>
                        <td>Argentina</td>
                        <td>Cozinheiro</td>
                        <td>
                            <span class="legend-indicator bg-danger"></span>Disabled
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck5">
                                <label class="form-check-label" for="usersDataCheck5"></label>
                            </div>
                        </td>
                        <td>5</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-soft-dark avatar-circle">
                                        <span class="avatar-initials">B</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Bob Dean</span>
                                </div>
                            </a>
                        </td>
                        <td>bob@site.com</td>
                        <td>+1-854-235-9755</td>
                        <td>Austria</td>
                        <td>Baba</td>
                        <td>
                            <span class="legend-indicator bg-danger"></span>Disabled
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck6">
                                <label class="form-check-label" for="usersDataCheck6"></label>
                            </div>
                        </td>
                        <td>6</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img9.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Ella Lauda <i class="bi-patch-check-fill text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Top endorsed"></i></span>
                                </div>
                            </a>
                        </td>
                        <td>ella@site.com</td>
                        <td>+1-846-157-2423</td>
                        <td>United Kingdom</td>
                        <td>Pasteleiro</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck7">
                                <label class="form-check-label" for="usersDataCheck7"></label>
                            </div>
                        </td>
                        <td>7</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-soft-info avatar-circle">
                                        <span class="avatar-initials">L</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Lori Hunter</span>
                                </div>
                            </a>
                        </td>
                        <td>hunter@site.com</td>
                        <td>+1-844-235-4378</td>
                        <td>Estonia</td>
                        <td>Informatico</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck16">
                                <label class="form-check-label" for="usersDataCheck16"></label>
                            </div>
                        </td>
                        <td>8</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-soft-primary avatar-circle">
                                        <span class="avatar-initials">M</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Mark Colbert</span>
                                </div>
                            </a>
                        </td>
                        <td>mark@site.com</td>
                        <td>+1-235-235-7482</td>
                        <td>Canada</td>
                        <td>Advogado</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck9">
                                <label class="form-check-label" for="usersDataCheck9"></label>
                            </div>
                        </td>
                        <td>9</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img6.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Costa Quinn</span>
                                </div>
                            </a>
                        </td>
                        <td>costa@site.com</td>
                        <td>+1-543-346-6343</td>
                        <td>France</td>
                        <td>Designer</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck10">
                                <label class="form-check-label" for="usersDataCheck10"></label>
                            </div>
                        </td>
                        <td>10</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-soft-danger avatar-circle">
                                        <span class="avatar-initials">R</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Rachel Doe <i class="bi-patch-check-fill text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Top endorsed"></i></span>
                                </div>
                            </a>
                        </td>
                        <td>rachel@site.com</td>
                        <td>+1-232-643-3643</td>
                        <td>United States</td>
                        <td>Médico</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck11">
                                <label class="form-check-label" for="usersDataCheck11"></label>
                            </div>
                        </td>
                        <td>11</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img8.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Linda Bates</span>
                                </div>
                            </a>
                        </td>
                        <td>linda@site.com</td>
                        <td>+1-123-523-5433</td>
                        <td>United Kingdom</td>
                        <td>Sapateiro</td>
                        <td>
                            <span class="legend-indicator bg-danger"></span>Disabled
                        </td>

                    </tr>

                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="usersDataCheck12">
                                <label class="form-check-label" for="usersDataCheck12"></label>
                            </div>
                        </td>
                        <td>12</td>
                        <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="{{ route('professional-details') }}">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-soft-info avatar-circle">
                                        <span class="avatar-initials">B</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Brian Halligan</span>
                                </div>
                            </a>
                        </td>
                        <td>brian@site.com</td>
                        <td>+1-141-463-1512</td>
                        <td>France</td>
                        <td>Sapateiro</td>
                        <td>
                            <span class="legend-indicator bg-success"></span>Active
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                        <span class="me-2">Mostrando:</span>

                        <!-- Select -->
                        <div class="tom-select-custom">
                            <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                                autocomplete="off"
                                data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true
                            }'>

                                <option value="15">5</option>
                                <option value="20">10</option>
                                <option value="10" selected="">12</option>
                            </select>
                        </div>
                        <!-- End Select -->

                        <span class="text-secondary me-2">de</span>

                        <!-- Pagination Quantity -->
                        <span id="datatableWithPaginationInfoTotalQty"></span>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-auto">
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        <!-- Pagination -->
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <p class="fs-6 mb-0">&copy; Todos os direitos reservados. Feito pela <a
                        class="d-none d-sm-inline-block nav-link d-inline fw-normal p-0 ms-1"
                        href="https://explicador.co.mz/" target="_blank" rel="noopener"
                        style="color: #377dff;">Explicador Inc.</a></p>
            </div>
        </div>
    </div>

@endsection

@section('js')



    <!-- JS Plugins Init. -->
    <script>
        (function() {
            window.onload = function() {

                // INITIALIZATION OF COUNTER
                // =======================================================
                new HSCounter('.js-counter')

                // INITIALIZATION OF NAVBAR VERTICAL ASIDE
                // =======================================================
                new HSSideNav('.js-navbar-vertical-aside').init()


                // INITIALIZATION OF FORM SEARCH
                // =======================================================
                new HSFormSearch('.js-form-search')


                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init()


                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')


                // INITIALIZATION OF NAV SCROLLER
                // =======================================================
                new HsNavScroller('.js-nav-scroller')



                // INITIALIZATION OF MODAL ON PAGE LOAD
                // =======================================================
                new bootstrap.Modal(document.getElementById('exportCustomersGuideModal')).show()


                // INITIALIZATION OF DROPZONE
                // =======================================================
                HSCore.components.HSDropzone.init('.js-dropzone')
            }
        })()
    </script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF DATATABLES
            // =======================================================
            HSCore.components.HSDatatables.init($('#datatable'), {
                select: {
                    style: 'multi',
                    selector: 'td:first-child input[type="checkbox"]',
                    classMap: {
                        checkAll: '#datatableCheckAll',
                        counter: '#datatableCounter',
                        counterInfo: '#datatableCounterInfo'
                    }
                },
                language: {
                    zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="{{ asset('template/admin/assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="{{ asset('template/admin/assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
                }
            });

            const datatable = HSCore.components.HSDatatables.getItem('datatable')

            $('.js-datatable-filter').on('change', function() {
                var $this = $(this),
                    elVal = $this.val(),
                    targetColumnIndex = $this.data('target-column-index');

                datatable.column(targetColumnIndex).search(elVal).draw();
            });

            $('#datatableSearch').on('mouseup', function(e) {
                var $input = $(this),
                    oldValue = $input.val();

                if (oldValue == "") return;

                setTimeout(function() {
                    var newValue = $input.val();

                    if (newValue == "") {
                        // Gotcha
                        datatable.search('').draw();
                    }
                }, 1);
            });

            $('#toggleColumn_name').change(function(e) {
                datatable.columns(1).visible(e.target.checked)
            })

            $('#toggleColumn_email').change(function(e) {
                datatable.columns(2).visible(e.target.checked)
            })

            datatable.columns(3).visible(false)

            $('#toggleColumn_phone').change(function(e) {
                datatable.columns(3).visible(e.target.checked)
            })

            $('#toggleColumn_country').change(function(e) {
                datatable.columns(4).visible(e.target.checked)
            })

            datatable.columns(5).visible(false)

            $('#toggleColumn_account_status').change(function(e) {
                datatable.columns(5).visible(e.target.checked)
            })

            $('#toggleColumn_orders').change(function(e) {
                datatable.columns(6).visible(e.target.checked)
            })

            datatable.columns(8).visible(false)

            $('#toggleColumn_last_activity').change(function(e) {
                datatable.columns(8).visible(e.target.checked)
            })

            $('#toggleColumn_total_spent').change(function(e) {
                datatable.columns(7).visible(e.target.checked)
            })
        });
    </script>

    <!-- Style Switcher JS -->

    <script>
        (function() {
            // STYLE SWITCHER
            // =======================================================
            const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
            const $variants = document.querySelectorAll(
                `[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

            // Function to set active style in the dorpdown menu and set icon for dropdown trigger
            const setActiveStyle = function() {
                $variants.forEach($item => {
                    if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
                        $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
                        return $item.classList.add('active')
                    }

                    $item.classList.remove('active')
                })
            }

            // Add a click event to all items of the dropdown to set the style
            $variants.forEach(function($item) {
                $item.addEventListener('click', function() {
                    HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
                })
            })

            // Call the setActiveStyle on load page
            setActiveStyle()

            // Add event listener on change style to call the setActiveStyle function
            window.addEventListener('on-hs-appearance-change', function() {
                setActiveStyle()
            })
        })()
    </script>
@endsection
