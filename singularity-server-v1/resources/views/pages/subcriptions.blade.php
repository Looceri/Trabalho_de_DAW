@extends('admin.layout.base')

@section('title', '| Subscrições')

@section('content')

    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Subscrições</h1>
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
                    <h6 class="card-subtitle mb-2">Total De Subscrições</h6>

                    <div class="row align-items-center gx-2">
                        <div class="col">
                            <span class="js-counter display-4 text-dark">1200</span>
                            <span class="text-body fs-5 ms-1">de 1142</span>
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

                <!-- Dropdown -->
                <div class="dropdown">
                    <button type="button" class="btn btn-white w-100" id="showHideDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
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
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_product"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_type">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">pacote</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_type"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_vendor">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Nome do Assinante</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_vendor">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_stocks">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">valor da Subscrição</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_stocks"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->

                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_status">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Data da Subscrição </span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_status"
                                                checked="">
                                        </span>
                                    </label>
                                    <!-- End Form Switch -->
                                    <!-- Form Switch -->
                                    <label class="row form-check form-switch" for="toggleColumn_variants">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Fim da Subscrição</span>
                                        </span>
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" class="form-check-input" id="toggleColumn_variants"
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
                class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                data-hs-datatables-options='{
            "columnDefs": [{
                "targets": [0],
                "width": "5%",
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
                                <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                                <label class="form-check-label"></label>
                            </div>
                        </th>
                        <th class="table-column-ps-0">ID</th>
                        <th>Pacote</th>
                        <th>Nome do Assinante</th>
                        <th>Valor da Subscrição</th>
                        <th>Data da Subscrição</th>
                        <th>Data fim da Subscrição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check1">
                                <label class="form-check-label" for="check1"></label>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Pacote Básico</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img1.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">João Silva</span>
                                </div>
                            </a>
                        </td>
                        <td>500 MZN</td>
                        <td>01/01/2024</td>
                        <td>01/01/2025</td>
                    </tr>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check2">
                                <label class="form-check-label" for="check2"></label>
                            </div>
                        </td>
                        <td>2</td>
                        <td>Pacote Padrão</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img2.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Maria Ferreira</span>
                                </div>
                            </a>
                        </td>
                        <td>800 MZN</td>
                        <td>15/01/2024</td>
                        <td>15/01/2025</td>
                    </tr>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check3">
                                <label class="form-check-label" for="check3"></label>
                            </div>
                        </td>
                        <td>3</td>
                        <td>Pacote Avançado</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img3.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Carlos Santos</span>
                                </div>
                            </a>
                        </td>
                        <td>1,200 MZN</td>
                        <td>01/02/2024</td>
                        <td>01/02/2025</td>
                    </tr>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check4">
                                <label class="form-check-label" for="check4"></label>
                            </div>
                        </td>
                        <td>4</td>
                        <td>Pacote Premium</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img4.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Ana Costa</span>
                                </div>
                            </a>
                        </td>
                        <td>1,500 MZN</td>
                        <td>20/02/2024</td>
                        <td>20/02/2025</td>
                    </tr>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check5">
                                <label class="form-check-label" for="check5"></label>
                            </div>
                        </td>
                        <td>5</td>
                        <td>Pacote Básico</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img5.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Pedro Almeida</span>
                                </div>
                            </a>
                        </td>
                        <td>500 MZN</td>
                        <td>01/03/2024</td>
                        <td>01/03/2025</td>
                    </tr>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check6">
                                <label class="form-check-label" for="check6"></label>
                            </div>
                        </td>
                        <td>6</td>
                        <td>Pacote Padrão</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img6.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Luís Gomes</span>
                                </div>
                            </a>
                        </td>
                        <td>800 MZN</td>
                        <td>15/03/2024</td>
                        <td>15/03/2025</td>
                    </tr>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check7">
                                <label class="form-check-label" for="check7"></label>
                            </div>
                        </td>
                        <td>7</td>
                        <td>Pacote Avançado</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img7.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Sofia Ribeiro</span>
                                </div>
                            </a>
                        </td>
                        <td>1,200 MZN</td>
                        <td>01/04/2024</td>
                        <td>01/04/2025</td>
                    </tr>
                    <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check8">
                                <label class="form-check-label" for="check8"></label>
                            </div>
                        </td>
                        <td>8</td>
                        <td>Pacote Premium</td>
                        <td>
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalAssinante1" style="text-decoration: none; color: inherit;">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img8.jpg') }}"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="h5 text-inherit">Clara Lima</span>
                                </div>
                            </a>
                        </td>
                        <td>1,500 MZN</td>
                        <td>20/04/2024</td>
                        <td>20/04/2025</td>
                    </tr>
                </tbody>

            </table>
        </div>

        <!-- Modais para cada assinante -->
        <div class="modal fade" id="modalAssinante1" tabindex="-1" aria-labelledby="modalAssinante1Label"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Card -->
                    <div class="card mb-0"> <!-- Removi a margem inferior para o modal -->
                        <!-- Header -->
                        <div class="card-header text-center">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <!-- Flex para alinhar horizontalmente -->
                                <div class="flex-shrink-0 me-3"> <!-- Margem à direita para espaçamento -->
                                    <a href="{{ route('profile') }}" class="avatar avatar-lg avatar-circle">
                                        <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img9.jpg') }}"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="text-start"> <!-- Para garantir que o texto não fique centralizado -->
                                    <h5 class="mb-0">
                                        <a href="{{ route('profile') }}" style="text-decoration: none; color: inherit;">Ivan
                                            Perce</a>
                                    </h5>
                                    <h6 class="text-muted mb-0" style="font-weight: bold;">Proprietário</h6>
                                    <!-- Título do proprietário -->
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body text-center">
                            <!-- Informações Adicionais -->
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <i class="bi bi-telephone-fill me-2" style="color: #007bff;"></i>
                                <a href="tel:+258841234567" style="text-decoration: none; color: inherit;">
                                    <span>+258 84 123 4567</span>
                                </a>
                            </div>

                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <i class="bi bi-geo-alt-fill me-2" style="color: #007bff;"></i>
                                <a href="https://www.google.com/maps/search/?api=1&query=Maputo,+Moçambique"
                                    target="_blank" style="text-decoration: none; color: inherit;">
                                    <span>Maputo, Moçambique</span>
                                </a>
                            </div>

                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <i class="bi bi-envelope-fill me-2" style="color: #007bff;"></i>
                                <a href="mailto:ivan.perce@email.com" style="text-decoration: none; color: inherit;">
                                    <span>ivan.perce@email.com</span>
                                </a>
                            </div>
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->
                </div>
            </div>
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
                            <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                                autocomplete="off"
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

@endsection
