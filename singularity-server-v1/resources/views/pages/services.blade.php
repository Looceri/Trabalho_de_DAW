@extends('admin.layout.base')

@section('title', '| Serviços')

@section('content')

    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">

                <div class="col">
                    <h1 class="page-header-title">Serviços</h1>
                </div>

                <!-- End Col -->

                <div class="col-sm-auto">
                    <a class="btn btn-primary" id="adicionar">Adicionar Serviço</a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>

            <!-- Dropdown -->

            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2">Total de Serviços </h6>

                            <div class="row align-items-center gx-2">
                                <div class="col">
                                    <span class="js-counter display-4 text-dark">1200</span>
                                    <span class="text-body fs-5 ms-1">de 1149</span>
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

            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Adicionar Serviço</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Formulário dentro do Modal -->
                            <div class="row gx-3">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="firstNameLabel" class="form-label">Título</label>
                                    <input type="text" class="form-control" name="firstName" id="firstNameLabel"
                                        placeholder="Clarice" aria-label="Clarice" value="Anna">
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-12 mt-3">
                                    <label for="lastNameLabel" class="form-label">Imagem</label>
                                    <input type="file" class="form-control" name="lastName" id="lastNameLabel"
                                        placeholder="Boone" aria-label="Boone" value="Richard">
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </div>
                        <div class="modal-footer d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary btn-sm">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->


            <!-- End Row -->

            <!-- Card -->
            <div class="card">
                <!-- Header -->
                <div class="card-header card-header-content-md-between">
                    <div class="mb-2 mb-md-0">
                        <form>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend input-group-text">
                                    <i class="bi-search"></i>
                                </div>
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Search users"
                                    aria-label="Search users">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>

                    <div class="d-grid d-sm-flex gap-2">
                        <button class="btn btn-white" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasEcommerceProductFilter"
                            aria-controls="offcanvasEcommerceProductFilter">
                            <i class="bi-filter me-1"></i> Filtros
                        </button>

                        <!-- Dropdown -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-white w-100" id="showHideDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                <i class="bi-table me-1"></i> Colunas <span
                                    class="badge bg-soft-dark text-dark rounded-circle ms-1">6</span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown"
                                style="width: 15rem;">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="d-grid gap-3">
                                            <!-- Form Switch -->
                                            <label class="row form-check form-switch" for="toggleColumn_product">
                                                <span class="col-8 col-sm-9 ms-0">
                                                    <span class="me-2">ID</span>
                                                </span>
                                                <span class="col-4 col-sm-3 text-end">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="toggleColumn_product" checked="">
                                                </span>
                                            </label>
                                            <!-- End Form Switch -->

                                            <!-- Form Switch -->
                                            <label class="row form-check form-switch" for="toggleColumn_type">
                                                <span class="col-8 col-sm-9 ms-0">
                                                    <span class="me-2">Imagem</span>
                                                </span>
                                                <span class="col-4 col-sm-3 text-end">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="toggleColumn_type" checked="">
                                                </span>
                                            </label>
                                            <!-- End Form Switch -->

                                            <!-- Form Switch -->
                                            <label class="row form-check form-switch" for="toggleColumn_vendor">
                                                <span class="col-8 col-sm-9 ms-0">
                                                    <span class="me-2">Título</span>
                                                </span>
                                                <span class="col-4 col-sm-3 text-end">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="toggleColumn_vendor">
                                                </span>
                                            </label>
                                            <!-- End Form Switch -->

                                            <!-- Form Switch -->
                                            <label class="row form-check form-switch" for="toggleColumn_stocks">
                                                <span class="col-8 col-sm-9 ms-0">
                                                    <span class="me-2">Frequência</span>
                                                </span>
                                                <span class="col-4 col-sm-3 text-end">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="toggleColumn_stocks" checked="">
                                                </span>
                                            </label>
                                            <!-- End Form Switch -->



                                            <!-- Form Switch -->
                                            <label class="row form-check form-switch" for="toggleColumn_variants">
                                                <span class="col-8 col-sm-9 ms-0">
                                                    <span class="me-2">Acções</span>
                                                </span>
                                                <span class="col-4 col-sm-3 text-end">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="toggleColumn_variants" checked="">
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
                        class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
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
                       "pageLength": 12,
                       "isResponsive": true,
                       "isShowPaging": true,
                       "pagination": "datatablePagination"
                     }'>
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll">
                                        <label class="form-check-label"></label>
                                    </div>
                                </th>
                                <th class="table-column-ps-0">ID</th>
                                <th>Imagem</th>
                                <th>Título</th>
                                <th>Frequência</th>
                                <th>Status</th>
                                <th>Acções</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- Registros de serviços -->
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll1">
                                        <label class="form-check-label" for="datatableCheckAll1"></label>
                                    </div>
                                </td>
                                <td>1</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets/img/400x400/img4.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </a>
                                </td>
                                <td>

                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('services-details') }}">
                                            <h5 class="text-inherit mb-0">Advogacia</h5>
                                        </a>
                                    </div>

                                </td>

                                <td>15</td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Active
                                </td>


                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown1" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown1">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Repetindo os registros com dados diferentes -->
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll2">
                                        <label class="form-check-label" for="datatableCheckAll2"></label>
                                    </div>
                                </td>
                                <td>2</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets/img/400x400/img11.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('services-details') }}">
                                            <h5 class="text-inherit mb-0">Assessoria Legal</h5>
                                        </a>
                                    </div>
                                </td>
                                <td>20</td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Active
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown2" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown2">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll3">
                                        <label class="form-check-label" for="datatableCheckAll3"></label>
                                    </div>
                                </td>
                                <td>3</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets/img/400x400/img15.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>
                                    <a href="{{ route('services-details') }}">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Representação Legal</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>5</td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Active
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown3" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown3">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll4">
                                        <label class="form-check-label" for="datatableCheckAll4"></label>
                                    </div>
                                </td>
                                <td>4</td>

                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets/img/400x400/img13.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>

                                    <a>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Mediação de Conflitos</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>8</td>
                                <td>
                                    <span class="legend-indicator bg-danger"></span>Disabled
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown4" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown4">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll5">
                                        <label class="form-check-label" for="datatableCheckAll5"></label>
                                    </div>
                                </td>
                                <td>5</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets') }}/img/400x400/img14.jpg"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>
                                    <a href="{{ route('services-details') }}">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Consultoria em Compliance</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>12</td>
                                <td>
                                    <span class="legend-indicator bg-danger"></span>Disabled
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown5" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown5">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>
                                                i class="bi-x-lg dropdown-item-icon"></i> Despublicar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll6">
                                        <label class="form-check-label" for="datatableCheckAll6"></label>
                                    </div>
                                </td>
                                <td>6</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets') }}/img/400x400/img17.jpg"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>
                                    <a href="{{ route('services-details') }}">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Assessoria em Propriedade Intelectual</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>7</td>
                                <td>
                                    <span class="legend-indicator bg-danger"></span>Disabled
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown6" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown6">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll7">
                                        <label class="form-check-label" for="datatableCheckAll7"></label>
                                    </div>
                                </td>
                                <td>7</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets') }}/img/400x400/img20.jpg"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>
                                    <a href="{{ route('services-details') }}">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Consultoria em Direito Trabalhista</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>11</td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Activo
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown7" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown7">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll8">
                                        <label class="form-check-label" for="datatableCheckAll8"></label>
                                    </div>
                                </td>
                                <td>8</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets') }}/img/400x400/img18.jpg"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>
                                    <a href="{{ route('services-details') }}">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Consultoria em Direito Penal</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>9</td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Activo
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown8" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown8">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll9">
                                        <label class="form-check-label" for="datatableCheckAll9"></label>
                                    </div>
                                </td>
                                <td>9</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets') }}/img/400x400/img19.jpg"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>
                                    <a href="{{ route('services-details') }}">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Consultoria em Planejamento Sucessório</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>8</td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Activo
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown9" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown9">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll10">
                                        <label class="form-check-label" for="datatableCheckAll10"></label>
                                    </div>
                                </td>
                                <td>10</td>
                                <td class="table-column-ps-0">
                                    <a class="d-flex align-items-center" href="{{ route('services-details') }}">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg"
                                                src="{{ asset('template/admin/assets/img/400x400/img2.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                </td>
                                <td>
                                    <a href="{{ route('services-details') }}">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-inherit mb-0">Consultoria em Direito Administrativo</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>10</td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Activo
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-white btn-sm" href="{{ route('services-details') }}">
                                            <i class="bi-pencil-fill me-1"></i> Editar
                                        </a>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                id="productsEditDropdown10" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                aria-labelledby="productsEditDropdown10">
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi-trash dropdown-item-icon"></i> Deletar
                                                </a>

                                            </div>
                                        </div>
                                    </div>
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
                                <span class="me-2">Showing:</span>

                                <!-- Select -->
                                <div class="tom-select-custom">
                                    <select id="datatableEntries"
                                        class="js-select form-select form-select-borderless w-auto" autocomplete="off"
                                        data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true
                            }'>
                                        <option value="12">12</option>
                                        <option value="14" selected="">14</option>
                                        <option value="16">16</option>
                                        <option value="18">18</option>
                                    </select>
                                </div>
                                <!-- End Select -->

                                <span class="text-secondary me-2">of</span>

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

        <!-- End Footer -->

        <!-- Product Filter Modal -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceProductFilter"
            aria-labelledby="offcanvasEcommerceProductFilterLabel">
            <div class="offcanvas-header">
                <h4 id="offcanvasEcommerceProductFilterLabel" class="mb-0">Filters</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <span class="text-cap small">Product vendor</span>

                <div class="row">
                    <div class="col-6">
                        <div class="d-grid gap-2 mb-2">
                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio1">
                                <label class="form-check-label" for="productVendorFilterRadio1">Google</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio2">
                                <label class="form-check-label" for="productVendorFilterRadio2">Topman</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio3">
                                <label class="form-check-label" for="productVendorFilterRadio3">RayBan</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio4">
                                <label class="form-check-label" for="productVendorFilterRadio4">Mango</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio5">
                                <label class="form-check-label" for="productVendorFilterRadio5">Calvin Klein</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio6">
                                <label class="form-check-label" for="productVendorFilterRadio6">Givenchy</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio7">
                                <label class="form-check-label" for="productVendorFilterRadio7">Asos</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio8">
                                <label class="form-check-label" for="productVendorFilterRadio8">Apple</label>
                            </div>
                            <!-- End Form Check -->
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="d-grid gap-2 mb-2">
                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio9">
                                <label class="form-check-label" for="productVendorFilterRadio9">Times</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio10">
                                <label class="form-check-label" for="productVendorFilterRadio10">Asos</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio11">
                                <label class="form-check-label" for="productVendorFilterRadio11">Nike Jordan</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio12">
                                <label class="form-check-label" for="productVendorFilterRadio12">VA RVCA</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio13">
                                <label class="form-check-label" for="productVendorFilterRadio13">Levis</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio14">
                                <label class="form-check-label" for="productVendorFilterRadio14">Beats</label>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                                    value="" id="productVendorFilterRadio15">
                                <label class="form-check-label" for="productVendorFilterRadio15">Clarks</label>
                            </div>
                            <!-- End Form Check -->
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                <a class="link mt-2" href="javascript:;">
                    <i class="bi-x"></i> Clear
                </a>

                <hr>

                <span class="text-cap small">Availability</span>

                <div class="d-grid gap-2 mb-2">
                    <!-- Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                            value="" id="productAvailabilityFilterRadio1">
                        <label class="form-check-label" for="productAvailabilityFilterRadio1">Available on Online
                            Store</label>
                    </div>
                    <!-- End Form Check -->

                    <!-- Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="productAvailabilityFilterRadio"
                            value="" id="productAvailabilityFilterRadio2">
                        <label class="form-check-label" for="productAvailabilityFilterRadio2">Unavailable on Online
                            Store</label>
                    </div>
                    <!-- End Form Check -->
                </div>

                <a class="link mt-2" href="javascript:;">
                    <i class="bi-x"></i> Clear
                </a>

                <hr>

                <span class="text-cap small">Tagged with</span>

                <div class="mb-2">
                    <input type="text" class="form-control" name="tagsName" id="tagsLabel"
                        placeholder="Enter tags here" aria-label="Enter tags here">
                </div>

                <a class="link mt-2" href="javascript:;">
                    <i class="bi-x"></i> Clear
                </a>

                <hr>

                <span class="text-cap small">Product type</span>

                <div class="d-grid gap-2 mb-2">
                    <!-- Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="productTypeFilterRadio" value=""
                            id="productTypeFilterRadio1">
                        <label class="form-check-label" for="productTypeFilterRadio1">Shoes</label>
                    </div>
                    <!-- End Form Check -->

                    <!-- Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="productTypeFilterRadio" value=""
                            id="productTypeFilterRadio2">
                        <label class="form-check-label" for="productTypeFilterRadio2">Accessories</label>
                    </div>
                    <!-- End Form Check -->

                    <!-- Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="productTypeFilterRadio" value=""
                            id="productTypeFilterRadio3">
                        <label class="form-check-label" for="productTypeFilterRadio3">Clothing</label>
                    </div>
                    <!-- End Form Check -->

                    <!-- Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="productTypeFilterRadio" value=""
                            id="productTypeFilterRadio4">
                        <label class="form-check-label" for="productTypeFilterRadio4">Electronics</label>
                    </div>
                    <!-- End Form Check -->
                </div>

                <a class="link mt-2" href="javascript:;">
                    <i class="bi-x"></i> Clear
                </a>

                <hr>

                <span class="text-cap small">Collection</span>

                <!-- Input Group -->
                <div class="input-group input-group-merge mb-2">
                    <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                    </div>

                    <input type="search" class="form-control" placeholder="Search for collections"
                        aria-label="Search for collections">
                </div>
                <!-- End Input Group -->

                <!-- Form Check -->
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" value="" id="productCollectionFilterRadio1">
                    <label class="form-check-label" for="productCollectionFilterRadio1">Home page</label>
                </div>
                <!-- End Form Check -->

                <a class="link mt-2" href="javascript:;">
                    <i class="bi-x"></i> Clear
                </a>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="offcanvas-footer">
                <div class="row gx-2">
                    <div class="col">
                        <div class="d-grid">
                            <button type="button" class="btn btn-white">Clear all filters</button>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col">
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Product Filter Modal -->
    @endsection

    @section('js')

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
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
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
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

      $('#datatableSearch').on('mouseup', function (e) {
        var $input = $(this),
          oldValue = $input.val();

        if (oldValue == "") return;

        setTimeout(function(){
          var newValue = $input.val();

          if (newValue == ""){
            // Gotcha
            datatable.search('').draw();
          }
        }, 1);
      });

      $('#toggleColumn_product').change(function (e) {
        datatable.columns(1).visible(e.target.checked)
      })

      $('#toggleColumn_type').change(function (e) {
        datatable.columns(2).visible(e.target.checked)
      })

      datatable.columns(3).visible(false)

      $('#toggleColumn_vendor').change(function (e) {
        datatable.columns(3).visible(e.target.checked)
      })

      $('#toggleColumn_stocks').change(function (e) {
        datatable.columns(4).visible(e.target.checked)
      })

      $('#toggleColumn_sku').change(function (e) {
        datatable.columns(5).visible(e.target.checked)
      })

      $('#toggleColumn_price').change(function (e) {
        datatable.columns(6).visible(e.target.checked)
      })

      datatable.columns(7).visible(false)

      $('#toggleColumn_quantity').change(function (e) {
        datatable.columns(7).visible(e.target.checked)
      })

      $('#toggleColumn_variants').change(function (e) {
        datatable.columns(8).visible(e.target.checked)
      })

    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {


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

        // INITIALIZATION OF COUNTER
        // =======================================================
        new HSCounter('.js-counter')

        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
        document.getElementById('adicionar').addEventListener('click', function () {
          var myModal = new bootstrap.Modal(document.getElementById('editModal'));
          myModal.show();
        });

    </script>
@endsection
