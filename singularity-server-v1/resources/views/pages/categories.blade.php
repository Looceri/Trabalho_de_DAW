﻿@extends('layout.base')

@section('title', '| User')

@section('content')
<!-- Alerta de Sucesso -->
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" id="close-alert" aria-label="Close">
            <span aria-hidden="true">&times;</span> <!-- Ícone de fechamento -->
        </button>
        {{ session('success') }}
    </div>
@endif

<!-- Alerta de Erro de Validação -->
@if($errors->any())
    <div class="alert alert-danger" id="close-alert">
        <button type="button" class="close" id="close-alert" aria-label="Close">
            <span aria-hidden="true">&times;</span> <!-- Ícone de fechamento -->
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
@endif
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Usuários</h1>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('add-category') }}">
                        <i class="bi-person-plus-fill me-1"></i> Adicionar Categoria
                    </a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

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

        <!-- Stats -->
        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total de Categorias </h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">124051</span>
                                <span class="text-body fs-5 ms-1">de 118144</span>
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

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
                {{-- <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Usarios Activos anuais</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">12347</span>
                                <span class="text-body fs-5 ms-1">de 12201</span>
                            </div>

                            <div class="col-auto">
                                <span class="badge bg-soft-success text-success p-1">
                                    <i class="bi-graph-up"></i> 1.2%
                                </span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card --> --}}
            </div>

            <div class="col-sm-12 col-lg-4 mb-3 mb-lg-5">
                {{-- <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Novos/recorrentes</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">48.7</span>
                                <span class="display-4 text-dark">%</span>
                                <span class="text-body fs-5 ms-1">de 56%</span>
                            </div>

                            <div class="col-auto">
                                <span class="badge bg-soft-danger text-danger p-1">
                                    <i class="bi-graph-down"></i> 2.8%
                                </span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card --> --}}
            </div>

        </div>
        <!-- End Stats -->

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
                            <input id="datatableSearch" type="search" class="form-control" placeholder="Pesquisar categoria"
                                aria-label="Search users">
                        </div>
                        <!-- End Search -->
                    </form>
                </div>

            
            </div>
            <!-- End Header -->

          <!-- Tabela -->
<div class="table-responsive datatable-custom position-relative">
    <table id="datatable"
        class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
        data-hs-datatables-options='{
            "columnDefs": [{"targets": [0, 4], "orderable": false}],
            "order": [],
            "info": {"totalQty": "#datatableWithPaginationInfoTotalQty"},
            "search": "#datatableSearch",
            "entries": "#datatableEntries",
            "pageLength": 7,
            "isResponsive": false,
            "isShowPaging": false,
            "pagination": "datatablePagination"
        }'>

        <thead class="thead-light text-center">
            <tr>
                <th class="table-column-pe-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="datatableCheckAll">
                        <label class="form-check-label" for="datatableCheckAll"></label>
                    </div>
                </th>
                <th>ID</th>
                <th class="table-column-ps-0">Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody class="text-center align-middle">
            @foreach($categories as $category)
                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="usersDataCheck{{$category->id}}">
                            <label class="form-check-label" for="usersDataCheck{{$category->id}}"></label>
                        </div>
                    </td>
                    <td>{{$category->id}}</td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center justify-content-center">
                            <div class="flex-grow-1 ms-2">
                                <h6 class="text-inherit mb-0">{{$category->name}}</h6>
                            </div>
                        </a>
                    </td>
                    <td>{{$category->description}}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('edit-category', ['id' => $category->id]) }}" class="btn btn-primary btn-sm" >
                                <i class="bi-pencil-fill me-1"></i> Editar
                            </a>
                            <a href="{{ route('delete-category', ['id' => $category->id]) }}" class="btn btn-danger btn-sm">
                                <i class="bi-trash-fill me-1"></i> Apagar
                            </a>
                            
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Fim Tabela -->


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
                                    <option value="5">5</option>
                                    <option value="7" selected="">7</option>
                                    <option value="9">9</option>
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


    <!-- Edit user -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Editar o user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Body -->
                <div class="modal-body">
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

                        <!-- Nav -->
                        <ul class="js-tabs-to-dropdown nav nav-segment nav-fill mb-5" id="editUserModalTab"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#profile" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" role="tab" aria-selected="true">
                                    <i class="bi-person me-1"></i> Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#billing-address" id="billing-address-tab"
                                    data-bs-toggle="tab" data-bs-target="#billing-address" role="tab"
                                    aria-selected="false">
                                    <i class="bi-building me-1"></i> Edereço
                                </a>
                            </li>


                        </ul>
                        <!-- End Nav -->
                    </div>
                    <!-- End Nav Scroller -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="editUserModalTabContent">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <form>
                                <!-- Profile Cover -->
                                <div class="profile-cover">
                                    <div class="profile-cover-img-wrapper">
                                        <img id="editProfileCoverImgModal" class="profile-cover-img"
                                            src="{{ asset('template/admin/assets/img/1920x400/img1.jpg') }}"
                                            alt="Image Description">

                                        <!-- Custom File Cover -->
                                        <div class="profile-cover-content profile-cover-uploader p-3">
                                            <input type="file" class="js-file-attach profile-cover-uploader-input"
                                                id="editProfileCoverUplaoderModal"
                                                data-hs-file-attach-options='{
                                  "textTarget": "#editProfileCoverImgModal",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "allowTypes": [".png", ".jpeg", ".jpg"]
                               }'>
                                            <label class="profile-cover-uploader-label btn btn-sm btn-white"
                                                for="editProfileCoverUplaoderModal">
                                                <i class="bi-camera-fill"></i>
                                                <span class="d-none d-sm-inline-block ms-1">Upload header</span>
                                            </label>
                                        </div>
                                        <!-- End Custom File Cover -->
                                    </div>
                                </div>
                                <!-- End Profile Cover -->

                                <!-- Avatar -->
                                <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar mb-5"
                                    for="editAvatarUploaderModal">
                                    <img id="editAvatarImgModal" class="avatar-img"
                                        src="{{ asset('template/admin/assets/img/160x160/img9.jpg') }}"
                                        alt="Image Description">

                                    <input type="file" class="js-file-attach avatar-uploader-input"
                                        id="editAvatarUploaderModal"
                                        data-hs-file-attach-options='{
                              "textTarget": "#editAvatarImgModal",
                              "mode": "image",
                              "targetAttr": "src",
                              "allowTypes": [".png", ".jpeg", ".jpg"]
                           }'>

                                    <span class="avatar-uploader-trigger">
                                        <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                                    </span>
                                </label>
                                <!-- End Avatar -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label form-label">Nome
                                        Complecto<i class="tio-help-outlined text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Displayed on public forums, such as Front."></i></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <input type="text" class="form-control" name="editFirstNameModal"
                                                id="editFirstNameModalLabel" placeholder="Your first name"
                                                aria-label="Your first name" value="Ella">
                                            <input type="text" class="form-control" name="editLastNameModal"
                                                id="editLastNameModalLabel" placeholder="Your last name"
                                                aria-label="Your last name" value="Lauda">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="editEmailModalLabel"
                                        class="col-sm-3 col-form-label form-label">Email</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="editEmailModal"
                                            id="editEmailModalLabel" placeholder="Email" aria-label="Email"
                                            value="ella@site.com">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="editPhoneLabel" class="col-sm-3 col-form-label form-label">Telemovel
                                        <span class="form-label-secondary">(Opcional)</span></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <input type="text" class="js-masked-input form-control" name="phone"
                                                id="editPhoneLabel" placeholder="+x(xxx)xxx-xx-xx"
                                                aria-label="+x(xxx)xxx-xx-xx" value="1(609)972-22-22"
                                                data-hs-mask-options='{
                                 "template": "+0(000)000-00-00"
                               }'>

                                            <!-- Select -->
                                            <div class="tom-select-custom">
                                                <select class="js-select form-select" autocomplete="off"
                                                    name="editPhoneSelect"
                                                    data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                                                    <option value="Mobile" selected="">Mobile</option>
                                                    <option value="Home">Home</option>
                                                    <option value="Work">Work</option>
                                                    <option value="Fax">Fax</option>
                                                    <option value="Direct">Direct</option>
                                                </select>
                                            </div>
                                            <!-- End Select -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label form-label">Tipo de conta</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <!-- Radio Check -->
                                            <label class="form-control" for="editUserModalAccountTypeModalRadio1">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input"
                                                        name="editUserModalAccountTypeModalRadio"
                                                        id="editUserModalAccountTypeModalRadio1" checked="">
                                                    <span class="form-check-label">Profissional</span>
                                                </span>
                                            </label>
                                            <!-- End Radio Check -->

                                            <!-- Radio Check -->
                                            <label class="form-control" for="editUserModalAccountTypeModalRadio2">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input"
                                                        name="editUserModalAccountTypeModalRadio"
                                                        id="editUserModalAccountTypeModalRadio2">
                                                    <span class="form-check-label">Empresa</span>
                                                </span>
                                            </label>
                                            <!-- End Radio Check -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <div class="d-flex justify-content-end">
                                    <div class="d-flex gap-3">
                                        <button type="button" class="btn btn-white" data-bs-dismiss="modal"
                                            aria-label="Close">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar mudanças</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="billing-address" role="tabpanel"
                            aria-labelledby="billing-address-tab">
                            <form>
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="editLocationModalLabel"
                                        class="col-sm-3 col-form-label form-label">Localização</label>

                                    <div class="col-sm-9">
                                        <!-- Select -->
                                        <div class="tom-select-custom mb-4">
                                            <select class="js-select form-select" id="editLocationModalLabel"
                                                autocomplete="off"
                                                data-hs-tom-select-options='{
                               "placeholder": "Select country"
                             }'>
                                                <option value="AF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/af.svg') }}" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>
                                                    Afghanistan</option>
                                                <option value="AX"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ax.svg') }}" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>
                                                    Aland Islands</option>
                                                <option value="AL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/al.svg') }}" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>
                                                    Albania</option>
                                                <option value="DZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/dz.svg') }}" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>
                                                    Algeria</option>
                                                <option value="AS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/as.svg') }}" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>
                                                    American Samoa</option>
                                                <option value="AD"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ad.svg') }}" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>
                                                    Andorra</option>
                                                <option value="AO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ao.svg') }}" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>
                                                    Angola</option>
                                                <option value="AI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ai.svg') }}" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>
                                                    Anguilla</option>
                                                <option value="AG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ag.svg') }}" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>
                                                    Antigua and Barbuda</option>
                                                <option value="AR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ar.svg') }}" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>
                                                    Argentina</option>
                                                <option value="AM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/am.svg') }}" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>
                                                    Armenia</option>
                                                <option value="AW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/aw.svg') }}" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>
                                                    Aruba</option>
                                                <option value="AU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/au.svg') }}" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>
                                                    Australia</option>
                                                <option value="AT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/at.svg') }}" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>
                                                    Austria</option>
                                                <option value="AZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/az.svg') }}" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>
                                                    Azerbaijan</option>
                                                <option value="BS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bs.svg') }}" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>
                                                    Bahamas</option>
                                                <option value="BH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bh.svg') }}" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>
                                                    Bahrain</option>
                                                <option value="BD"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bd.svg') }}" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>
                                                    Bangladesh</option>
                                                <option value="BB"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bb.svg') }}" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>
                                                    Barbados</option>
                                                <option value="BY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/by.svg') }}" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>
                                                    Belarus</option>
                                                <option value="BE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/be.svg') }}" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>
                                                    Belgium</option>
                                                <option value="BZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bz.svg') }}" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>
                                                    Belize</option>
                                                <option value="BJ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bj.svg') }}" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>
                                                    Benin</option>
                                                <option value="BM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bm.svg') }}" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>
                                                    Bermuda</option>
                                                <option value="BT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bt.svg') }}" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>
                                                    Bhutan</option>
                                                <option value="BO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bo.svg') }}" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>
                                                    Bolivia (Plurinational State of)</option>
                                                <option value="BQ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bq.svg') }}" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>
                                                    Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ba.svg') }}" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>
                                                    Bosnia and Herzegovina</option>
                                                <option value="BW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bw.svg') }}" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>
                                                    Botswana</option>
                                                <option value="BR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/br.svg') }}" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>
                                                    Brazil</option>
                                                <option value="IO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/io.svg') }}" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>
                                                    British Indian Ocean Territory</option>
                                                <option value="BN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bn.svg') }}" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>
                                                    Brunei Darussalam</option>
                                                <option value="BG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bg.svg') }}" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>
                                                    Bulgaria</option>
                                                <option value="BF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bf.svg') }}" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>
                                                    Burkina Faso</option>
                                                <option value="BI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bi.svg') }}" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>
                                                    Burundi</option>
                                                <option value="CV"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cv.svg') }}" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>
                                                    Cabo Verde</option>
                                                <option value="KH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/kh.svg') }}" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>
                                                    Cambodia</option>
                                                <option value="CM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cm.svg') }}" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>
                                                    Cameroon</option>
                                                <option value="CA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ca.svg') }}" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>
                                                    Canada</option>
                                                <option value="KY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ky.svg') }}" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>
                                                    Cayman Islands</option>
                                                <option value="CF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cf.svg') }}" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>
                                                    Central African Republic</option>
                                                <option value="TD"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/td.svg') }}" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>
                                                    Chad</option>
                                                <option value="CL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cl.svg') }}" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>
                                                    Chile</option>
                                                <option value="CN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cn.svg') }}" alt="China Flag" /><span class="text-truncate">China</span></span>'>
                                                    China</option>
                                                <option value="CX"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cx.svg') }}" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>
                                                    Christmas Island</option>
                                                <option value="CC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cc.svg') }}" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>
                                                    Cocos (Keeling) Islands</option>
                                                <option value="CO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/co.svg') }}" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>
                                                    Colombia</option>
                                                <option value="KM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/km.svg') }}" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>
                                                    Comoros</option>
                                                <option value="CK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ck.svg') }}" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>
                                                    Cook Islands</option>
                                                <option value="MZ" selected=""
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mz.svg') }}" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>
                                                    Mozambique</option>
                                                <option value="CR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cr.svg') }}" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>
                                                    Costa Rica</option>
                                                <option value="HR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/hr.svg') }}" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>
                                                    Croatia</option>
                                                <option value="CU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cu.svg') }}" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>
                                                    Cuba</option>
                                                <option value="CW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cw.svg') }}" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>
                                                    Curaçao</option>
                                                <option value="CY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cy.svg') }}" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>
                                                    Cyprus</option>
                                                <option value="CZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cz.svg') }}" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>
                                                    Czech Republic</option>
                                                <option value="CI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ci.svg') }}" alt=Côte d&apos;Ivoire Flag" /><span class="text-truncate">Côte d&apos;Ivoire</span></span>'>
                                                    Côte d'Ivoire</option>
                                                <option value="CD"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cd.svg') }}" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>
                                                    Democratic Republic of the Congo</option>
                                                <option value="DK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/dk.svg') }}" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>
                                                    Denmark</option>
                                                <option value="DJ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/dj.svg') }}" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>
                                                    Djibouti</option>
                                                <option value="DM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/dm.svg') }}" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>
                                                    Dominica</option>
                                                <option value="DO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/do.svg') }}" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>
                                                    Dominican Republic</option>
                                                <option value="EC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ec.svg') }}" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>
                                                    Ecuador</option>
                                                <option value="EG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/eg.svg') }}" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>
                                                    Egypt</option>
                                                <option value="SV"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sv.svg') }}" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>
                                                    El Salvador</option>
                                                <option value="GB-ENG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg') }}" alt="England Flag" /><span class="text-truncate">England</span></span>'>
                                                    England</option>
                                                <option value="GQ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gq.svg') }}" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>
                                                    Equatorial Guinea</option>
                                                <option value="ER"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/er.svg') }}" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>
                                                    Eritrea</option>
                                                <option value="EE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ee.svg') }}" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>
                                                    Estonia</option>
                                                <option value="ET"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/et.svg') }}" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>
                                                    Ethiopia</option>
                                                <option value="FK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/fk.svg') }}" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>
                                                    Falkland Islands</option>
                                                <option value="FO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/fo.svg') }}" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>
                                                    Faroe Islands</option>
                                                <option value="FM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/fm.svg') }}" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>
                                                    Federated States of Micronesia</option>
                                                <option value="FJ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/fj.svg') }}" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>
                                                    Fiji</option>
                                                <option value="FI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/fi.svg') }}" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>
                                                    Finland</option>
                                                <option value="FR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/fr.svg') }}" alt="France Flag" /><span class="text-truncate">France</span></span>'>
                                                    France</option>
                                                <option value="GF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gf.svg') }}" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>
                                                    French Guiana</option>
                                                <option value="PF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pf.svg') }}" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>
                                                    French Polynesia</option>
                                                <option value="TF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tf.svg') }}" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>
                                                    French Southern Territories</option>
                                                <option value="GA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ga.svg') }}" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>
                                                    Gabon</option>
                                                <option value="GM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gm.svg') }}" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>
                                                    Gambia</option>
                                                <option value="GE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ge.svg') }}" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>
                                                    Georgia</option>
                                                <option value="DE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/de.svg') }}" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>
                                                    Germany</option>
                                                <option value="GH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gh.svg') }}" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>
                                                    Ghana</option>
                                                <option value="GI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gi.svg') }}" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>
                                                    Gibraltar</option>
                                                <option value="GR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gr.svg') }}" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>
                                                    Greece</option>
                                                <option value="GL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gl.svg') }}" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>
                                                    Greenland</option>
                                                <option value="GD"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gd.svg') }}" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>
                                                    Grenada</option>
                                                <option value="GP"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gp.svg') }}" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>
                                                    Guadeloupe</option>
                                                <option value="GU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gu.svg') }}" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>
                                                    Guam</option>
                                                <option value="GT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gt.svg') }}" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>
                                                    Guatemala</option>
                                                <option value="GG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gg.svg') }}" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>
                                                    Guernsey</option>
                                                <option value="GN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gn.svg') }}" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>
                                                    Guinea</option>
                                                <option value="GW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gw.svg') }}" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>
                                                    Guinea-Bissau</option>
                                                <option value="GY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gy.svg') }}" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>
                                                    Guyana</option>
                                                <option value="HT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ht.svg') }}" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>
                                                    Haiti</option>
                                                <option value="VA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/va.svg') }}" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>
                                                    Holy See</option>
                                                <option value="HN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/hn.svg') }}" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>
                                                    Honduras</option>
                                                <option value="HK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/hk.svg') }}" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>
                                                    Hong Kong</option>
                                                <option value="HU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/hu.svg') }}" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>
                                                    Hungary</option>
                                                <option value="IS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/is.svg') }}" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>
                                                    Iceland</option>
                                                <option value="IN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/in.svg') }}" alt="India Flag" /><span class="text-truncate">India</span></span>'>
                                                    India</option>
                                                <option value="ID"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/id.svg') }}" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>
                                                    Indonesia</option>
                                                <option value="IR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ir.svg') }}" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>
                                                    Iran (Islamic Republic of)</option>
                                                <option value="IQ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/iq.svg') }}" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>
                                                    Iraq</option>
                                                <option value="IE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ie.svg') }}" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>
                                                    Ireland</option>
                                                <option value="IM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/im.svg') }}" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>
                                                    Isle of Man</option>
                                                <option value="IL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/il.svg') }}" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>
                                                    Israel</option>
                                                <option value="IT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/it.svg') }}" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>
                                                    Italy</option>
                                                <option value="JM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/jm.svg') }}" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>
                                                    Jamaica</option>
                                                <option value="JP"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/jp.svg') }}" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>
                                                    Japan</option>
                                                <option value="JE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/je.svg') }}" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>
                                                    Jersey</option>
                                                <option value="JO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/jo.svg') }}" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>
                                                    Jordan</option>
                                                <option value="KZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/kz.svg') }}" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>
                                                    Kazakhstan</option>
                                                <option value="KE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ke.svg') }}" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>
                                                    Kenya</option>
                                                <option value="KI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ki.svg') }}" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>
                                                    Kiribati</option>
                                                <option value="KW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/kw.svg') }}" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>
                                                    Kuwait</option>
                                                <option value="KG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/kg.svg') }}" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>
                                                    Kyrgyzstan</option>
                                                <option value="LA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/la.svg') }}" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>
                                                    Laos</option>
                                                <option value="LV"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/lv.svg') }}" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>
                                                    Latvia</option>
                                                <option value="LB"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/lb.svg') }}" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>
                                                    Lebanon</option>
                                                <option value="LS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ls.svg') }}" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>
                                                    Lesotho</option>
                                                <option value="LR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/lr.svg') }}" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>
                                                    Liberia</option>
                                                <option value="LY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ly.svg') }}" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>
                                                    Libya</option>
                                                <option value="LI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/li.svg') }}" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>
                                                    Liechtenstein</option>
                                                <option value="LT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/lt.svg') }}" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>
                                                    Lithuania</option>
                                                <option value="LU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/lu.svg') }}" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>
                                                    Luxembourg</option>
                                                <option value="MO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mo.svg') }}" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>
                                                    Macau</option>
                                                <option value="MG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mg.svg') }}" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>
                                                    Madagascar</option>
                                                <option value="MW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mw.svg') }}" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>
                                                    Malawi</option>
                                                <option value="MY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/my.svg') }}" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>
                                                    Malaysia</option>
                                                <option value="MV"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mv.svg') }}" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>
                                                    Maldives</option>
                                                <option value="ML"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ml.svg') }}" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>
                                                    Mali</option>
                                                <option value="MT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mt.svg') }}" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>
                                                    Malta</option>
                                                <option value="MH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mh.svg') }}" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>
                                                    Marshall Islands</option>
                                                <option value="MQ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mq.svg') }}" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>
                                                    Martinique</option>
                                                <option value="MR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mr.svg') }}" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>
                                                    Mauritania</option>
                                                <option value="MU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mu.svg') }}" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>
                                                    Mauritius</option>
                                                <option value="YT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/yt.svg') }}" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>
                                                    Mayotte</option>
                                                <option value="MX"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mx.svg') }}" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>
                                                    Mexico</option>
                                                <option value="MD"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/md.svg') }}" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>
                                                    Moldova</option>
                                                <option value="MC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mc.svg') }}" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>
                                                    Monaco</option>
                                                <option value="MN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mn.svg') }}" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>
                                                    Mongolia</option>
                                                <option value="ME"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/me.svg') }}" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>
                                                    Montenegro</option>
                                                <option value="MS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ms.svg') }}" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>
                                                    Montserrat</option>
                                                <option value="MA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ma.svg') }}" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>
                                                    Morocco</option>
                                                {{-- <option value="MZ" selected=""
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mz.svg') }}" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>
                                    Mozambique</option> --}}
                                                <option value="MM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mm.svg') }}" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>
                                                    Myanmar</option>
                                                <option value="NA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/na.svg') }}" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>
                                                    Namibia</option>
                                                <option value="NR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/nr.svg') }}" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>
                                                    Nauru</option>
                                                <option value="NP"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/np.svg') }}" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>
                                                    Nepal</option>
                                                <option value="NL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/nl.svg') }}" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>
                                                    Netherlands</option>
                                                <option value="NC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/nc.svg') }}" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>
                                                    New Caledonia</option>
                                                <option value="NZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/nz.svg') }}" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>
                                                    New Zealand</option>
                                                <option value="NI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ni.svg') }}" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>
                                                    Nicaragua</option>
                                                <option value="NE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ne.svg') }}" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>
                                                    Niger</option>
                                                <option value="NG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ng.svg') }}" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>
                                                    Nigeria</option>
                                                <option value="NU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/nu.svg') }}" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>
                                                    Niue</option>
                                                <option value="NF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/nf.svg') }}" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>
                                                    Norfolk Island</option>
                                                <option value="KP"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/kp.svg') }}" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>
                                                    North Korea</option>
                                                <option value="MK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mk.svg') }}" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>
                                                    North Macedonia</option>
                                                <option value="GB-NIR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg') }}" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>
                                                    Northern Ireland</option>
                                                <option value="MP"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mp.svg') }}" alt="Northern Mariana Islands Flag" /><span class="text-truncate">Northern Mariana Islands</span></span>'>
                                                    Northern Mariana Islands</option>
                                                <option value="NO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/no.svg') }}" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>
                                                    Norway</option>
                                                <option value="OM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/om.svg') }}" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>
                                                    Oman</option>
                                                <option value="PK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pk.svg') }}" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>
                                                    Pakistan</option>
                                                <option value="PW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pw.svg') }}" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>
                                                    Palau</option>
                                                <option value="PA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pa.svg') }}" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>
                                                    Panama</option>
                                                <option value="PG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pg.svg') }}" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>
                                                    Papua New Guinea</option>
                                                <option value="PY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/py.svg') }}" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>
                                                    Paraguay</option>
                                                <option value="PE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pe.svg') }}" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>
                                                    Peru</option>
                                                <option value="PH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ph.svg') }}" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>
                                                    Philippines</option>
                                                <option value="PN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pn.svg') }}" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>
                                                    Pitcairn</option>
                                                <option value="PL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pl.svg') }}" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>
                                                    Poland</option>
                                                <option value="PT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pt.svg') }}" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>
                                                    Portugal</option>
                                                <option value="PR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pr.svg') }}" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>
                                                    Puerto Rico</option>
                                                <option value="QA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/qa.svg') }}" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>
                                                    Qatar</option>
                                                <option value="CG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/cg.svg') }}" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>
                                                    Republic of the Congo</option>
                                                <option value="RO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ro.svg') }}" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>
                                                    Romania</option>
                                                <option value="RU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ru.svg') }}" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>
                                                    Russia</option>
                                                <option value="RW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/rw.svg') }}" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>
                                                    Rwanda</option>
                                                <option value="RE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/re.svg') }}" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>
                                                    Réunion</option>
                                                <option value="BL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/bl.svg') }}" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>
                                                    Saint Barthélemy</option>
                                                <option value="SH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sh.svg') }}" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>
                                                    Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/kn.svg') }}" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>
                                                    Saint Kitts and Nevis</option>
                                                <option value="LC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/lc.svg') }}" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>
                                                    Saint Lucia</option>
                                                <option value="MF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/mf.svg') }}" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>
                                                    Saint Martin</option>
                                                <option value="PM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/pm.svg') }}" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>
                                                    Saint Pierre and Miquelon</option>
                                                <option value="VC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/vc.svg') }}" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>
                                                    Saint Vincent and the Grenadines</option>
                                                <option value="WS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ws.svg') }}" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>
                                                    Samoa</option>
                                                <option value="SM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sm.svg') }}" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>
                                                    San Marino</option>
                                                <option value="ST"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/st.svg') }}" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>
                                                    Sao Tome and Principe</option>
                                                <option value="SA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sa.svg') }}" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>
                                                    Saudi Arabia</option>
                                                <option value="GB-SCT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg') }}" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>
                                                    Scotland</option>
                                                <option value="SN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sn.svg') }}" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>
                                                    Senegal</option>
                                                <option value="RS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/rs.svg') }}" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>
                                                    Serbia</option>
                                                <option value="SC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sc.svg') }}" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>
                                                    Seychelles</option>
                                                <option value="SL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sl.svg') }}" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>
                                                    Sierra Leone</option>
                                                <option value="SG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sg.svg') }}" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>
                                                    Singapore</option>
                                                <option value="SX"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sx.svg') }}" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>
                                                    Sint Maarten</option>
                                                <option value="SK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sk.svg') }}" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>
                                                    Slovakia</option>
                                                <option value="SI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/si.svg') }}" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>
                                                    Slovenia</option>
                                                <option value="SB"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sb.svg') }}" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>
                                                    Solomon Islands</option>
                                                <option value="SO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/so.svg') }}" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>
                                                    Somalia</option>
                                                <option value="ZA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/za.svg') }}" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>
                                                    South Africa</option>
                                                <option value="GS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gs.svg') }}" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>
                                                    South Georgia and the South Sandwich Islands</option>
                                                <option value="KR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/kr.svg') }}" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>
                                                    South Korea</option>
                                                <option value="SS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ss.svg') }}" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>
                                                    South Sudan</option>
                                                <option value="ES"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/es.svg') }}" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>
                                                    Spain</option>
                                                <option value="LK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/lk.svg') }}" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>
                                                    Sri Lanka</option>
                                                <option value="PS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ps.svg') }}" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>
                                                    State of Palestine</option>
                                                <option value="SD"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sd.svg') }}" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>
                                                    Sudan</option>
                                                <option value="SR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sr.svg') }}" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>
                                                    Suriname</option>
                                                <option value="SJ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sj.svg') }}" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>
                                                    Svalbard and Jan Mayen</option>
                                                <option value="SZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sz.svg') }}" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>
                                                    Swaziland</option>
                                                <option value="SE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/se.svg') }}" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>
                                                    Sweden</option>
                                                <option value="CH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ch.svg') }}" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>
                                                    Switzerland</option>
                                                <option value="SY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/sy.svg') }}" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>
                                                    Syrian Arab Republic</option>
                                                <option value="TW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tw.svg') }}" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>
                                                    Taiwan</option>
                                                <option value="TJ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tj.svg') }}" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>
                                                    Tajikistan</option>
                                                <option value="TZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tz.svg') }}" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>
                                                    Tanzania</option>
                                                <option value="TH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/th.svg') }}" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>
                                                    Thailand</option>
                                                <option value="TL"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tl.svg') }}" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>
                                                    Timor-Leste</option>
                                                <option value="TG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tg.svg') }}" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>
                                                    Togo</option>
                                                <option value="TK"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tk.svg') }}" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>
                                                    Tokelau</option>
                                                <option value="TO"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/to.svg') }}" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>
                                                    Tonga</option>
                                                <option value="TT"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tt.svg') }}" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>
                                                    Trinidad and Tobago</option>
                                                <option value="TN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tn.svg') }}" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>
                                                    Tunisia</option>
                                                <option value="TR"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tr.svg') }}" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>
                                                    Turkey</option>
                                                <option value="TM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tm.svg') }}" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>
                                                    Turkmenistan</option>
                                                <option value="TC"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tc.svg') }}" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>
                                                    Turks and Caicos Islands</option>
                                                <option value="TV"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/tv.svg') }}" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>
                                                    Tuvalu</option>
                                                <option value="UG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ug.svg') }}" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>
                                                    Uganda</option>
                                                <option value="UA"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ua.svg') }}" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>
                                                    Ukraine</option>
                                                <option value="AE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ae.svg') }}" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>
                                                    United Arab Emirates</option>
                                                <option value="GB"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gb.svg') }}" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>
                                                    United Kingdom</option>
                                                <option value="UM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/um.svg') }}" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>
                                                    United States Minor Outlying Islands</option>
                                                <option value="US"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/us.svg') }}" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>
                                                    United States of America</option>
                                                <option value="UY"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/uy.svg') }}" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>
                                                    Uruguay</option>
                                                <option value="UZ"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/uz.svg') }}" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>
                                                    Uzbekistan</option>
                                                <option value="VU"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/vu.svg') }}" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>
                                                    Vanuatu</option>
                                                <option value="VE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ve.svg') }}" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>
                                                    Venezuela (Bolivarian Republic of)</option>
                                                <option value="VN"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/vn.svg') }}" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>
                                                    Vietnam</option>
                                                <option value="VG"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/vg.svg') }}" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>
                                                    Virgin Islands (British)</option>
                                                <option value="VI"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/vi.svg') }}" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>
                                                    Virgin Islands (U.S.)</option>
                                                <option value="GB-WLS"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg') }}" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>
                                                    Wales</option>
                                                <option value="WF"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/wf.svg') }}" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>
                                                    Wallis and Futuna</option>
                                                <option value="EH"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/eh.svg') }}" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>
                                                    Western Sahara</option>
                                                <option value="YE"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/ye.svg') }}" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>
                                                    Yemen</option>
                                                <option value="ZM"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/zm.svg') }}" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>
                                                    Zambia</option>
                                                <option value="ZW"
                                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('template/admin/assets/vendor/flag-icon-css/flags/1x1/zw.svg') }}" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>
                                                    Zimbabwe</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->

                                        <div class="mb-4">
                                            <input type="text" class="form-control" name="editCityModal"
                                                id="editCityModalLabel" placeholder="Cidade" aria-label="Cidade"
                                                value="Maputo">
                                        </div>

                                        <input type="text" class="form-control" name="editStateModal"
                                            id="editStateModalLabel" placeholder="Provincia" aria-label="Provincia">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="editAddressLine1Label"
                                        class="col-sm-3 col-form-label form-label">Endereço 1</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="addressLine1"
                                            id="editAddressLine1Label" placeholder="Seu endereço"
                                            aria-label="Seu endereço" value="45 Roker Terrace, Latheronwheel">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="editAddressLine2ModalLabel"
                                        class="col-sm-3 col-form-label form-label">Endereço 2
                                        <span class="form-label-secondary">(Optional)</span></label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="editAddressLine2Modal"
                                            id="editAddressLine2ModalLabel" placeholder="Seu endereço"
                                            aria-label="Seu endereço">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row">
                                    <label for="editZipCodeLabel" class="col-sm-3 col-form-label form-label">CEP <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Você pode encontrar seu código em um endereço postal."></i></label>

                                    <div class="col-sm-9">
                                        <input type="text" class="js-input-mask form-control" name="zipCode"
                                            id="editZipCodeLabel" placeholder="Seu CEP" aria-label="Seu CEP"
                                            value="KW5 8NW"
                                            data-hs-mask-options='{
                             "mask": "AA0 0AA"
                           }'>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <hr>

                                <div class="d-flex justify-content-end">
                                    <div class="d-flex gap-3">
                                        <button type="button" class="btn btn-white" data-bs-dismiss="modal"
                                            aria-label="Close">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar mudanças</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="change-password" role="tabpanel"
                            aria-labelledby="change-password-tab">
                            <form>
                                <!-- Formulário -->
                                <div class="row mb-4">
                                    <label for="editUserModalCurrentPasswordLabel"
                                        class="col-sm-3 col-form-label form-label">Senha
                                        atual</label>

                                    <div class="col-sm-9">
                                        <!-- Grupo de Entrada -->
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="js-toggle-password form-control"
                                                name="currentPassword" id="editUserModalCurrentPasswordLabel"
                                                placeholder="Digite a senha atual" aria-label="Digite a senha atual"
                                                data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalTarget",
                                 "defaultClass": "bi-eye-slash",
                                 "showClass": "bi-eye",
                                 "classChangeTarget": "#editUserModalChangePassModalIcon"
                               }'>
                                            <a id="editUserModalChangePassModalTarget"
                                                class="input-group-append input-group-text" href="javascript:;">
                                                <i id="editUserModalChangePassModalIcon" class="bi-eye"></i>
                                            </a>
                                        </div>
                                        <!-- Fim do Grupo de Entrada -->
                                    </div>
                                </div>
                                <!-- Fim do Formulário -->

                                <!-- Formulário -->
                                <div class="row mb-4">
                                    <label for="editUserModalNewPassword"
                                        class="col-sm-3 col-form-label form-label">Nova senha</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="js-toggle-password form-control"
                                            name="editUserModalNewPassword" id="editUserModalNewPassword"
                                            placeholder="Digite a nova senha" aria-label="Digite a nova senha"
                                            data-hs-toggle-password-options='{
                               "target": "#editUserModalChangePassModalCheckbox"
                             }'>
                                    </div>
                                </div>
                                <!-- Fim do Formulário -->

                                <!-- Formulário -->
                                <div class="row mb-4">
                                    <label for="editUserModalConfirmNewPasswordLabel"
                                        class="col-sm-3 col-form-label form-label">Confirmar
                                        nova senha</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="js-toggle-password form-control"
                                            name="confirmNewPassword" id="editUserModalConfirmNewPasswordLabel"
                                            placeholder="Confirme sua nova senha" aria-label="Confirme sua nova senha"
                                            data-hs-toggle-password-options='{
                               "target": "#editUserModalChangePassModalCheckbox"
                             }'>
                                    </div>
                                </div>
                                <!-- Fim do Formulário -->

                                <!-- Formulário -->
                                <div class="row mb-4">
                                    <div class="col-sm-9 offset-sm-3">
                                        <!-- Verificação de Formulário -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="editUserModalChangePassModalCheckbox">
                                            <label class="form-check-label" for="editUserModalChangePassModalCheckbox">
                                                Mostrar senha
                                            </label>
                                        </div>
                                        <!-- Fim da Verificação de Formulário -->
                                    </div>
                                </div>
                                <!-- Fim do Formulário -->

                                <div class="d-flex justify-content-end">
                                    <div class="d-flex gap-3">
                                        <button type="button" class="btn btn-white" data-bs-dismiss="modal"
                                            aria-label="Fechar">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Salvar alterações</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="notifications" role="tabpanel"
                            aria-labelledby="notifications-tab">
                            <!-- Tabela -->
                            <div class="table-responsive datatable-custom">
                                <table
                                    class="table table-thead-bordered table-nowrap table-align-middle table-first-col-px-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tipo</th>
                                            <th class="text-center">
                                                <div class="mb-1">
                                                    <img class="avatar avatar-xs"
                                                        src="{{ asset('template/admin/assets/svg/illustrations/oc-email-at.svg') }}"
                                                        alt="Descrição da Imagem" data-hs-theme-appearance="default">
                                                    <img class="avatar avatar-xs"
                                                        src="{{ asset('template/admin/assets/svg/illustrations-light/oc-email-at.svg') }}"
                                                        alt="Descrição da Imagem" data-hs-theme-appearance="dark">
                                                </div>
                                                Email
                                            </th>
                                            <th class="text-center">
                                                <div class="mb-1">
                                                    <img class="avatar avatar-xs"
                                                        src="{{ asset('template/admin/assets/svg/illustrations/oc-globe.svg') }}"
                                                        alt="Descrição da Imagem" data-hs-theme-appearance="default">
                                                    <img class="avatar avatar-xs"
                                                        src="{{ asset('template/admin/assets/svg/illustrations-light/oc-globe.svg') }}"
                                                        alt="Descrição da Imagem" data-hs-theme-appearance="dark">
                                                </div>
                                                Navegador
                                            </th>
                                            <th class="text-center">
                                                <div class="mb-1">
                                                    <img class="avatar avatar-xs"
                                                        src="{{ asset('template/admin/assets/svg/illustrations/oc-phone.svg') }}"
                                                        alt="Descrição da Imagem" data-hs-theme-appearance="default">
                                                    <img class="avatar avatar-xs"
                                                        src="{{ asset('template/admin/assets/svg/illustrations-light/oc-phone.svg') }}"
                                                        alt="Descrição da Imagem" data-hs-theme-appearance="dark">
                                                </div>
                                                Aplicativo
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Novas para você</td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox1">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox1"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox2">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox2"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox3">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox3"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Atividade da conta <i class="bi-question-circle text-body ms-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Receba notificações importantes sobre você ou atividades que você perdeu"></i>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox4">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox4"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox5" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox5"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox6" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox6"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Um novo navegador foi usado para fazer login</td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox7" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox7"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox8" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox8"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox9" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox9"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Um novo dispositivo está vinculado</td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox10">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox10"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox11" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox11"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox12">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox12"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Um novo dispositivo conectado <i class="bi-question-circle text-body ms-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Envie um email para mim quando um novo dispositivo se conectar"></i>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox13">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox13"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox14" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox14"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="editUserModalAlertsCheckbox15" checked="">
                                                    <label class="form-check-label"
                                                        for="editUserModalAlertsCheckbox15"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Fim da Tabela -->

                            <hr>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- Formulário -->
                                    <div class="mb-4">
                                        <span class="d-block mb-2">Quando devemos enviar notificações?</span>

                                        <!-- Seleção -->
                                        <div class="tom-select-custom">
                                            <select class="js-select form-select" autocomplete="off"
                                                data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "width": "15rem",
                                  "hideSearch": true
                                }'>
                                                <option value="whenToSendNotification1">Sempre</option>
                                                <option value="whenToSendNotification2">Somente quando estou online
                                                </option>
                                            </select>
                                        </div>
                                        <!-- Fim da Seleção -->
                                    </div>
                                    <!-- Fim do Formulário -->
                                </div>

                                <div class="col-sm">
                                    <!-- Formulário -->
                                    <div class="mb-4">
                                        <span class="d-block mb-2">Enviar um resumo diário ("Resumo Diário") da atividade
                                            da tarefa.</span>

                                        <div class="row">
                                            <div class="col-auto mb-2">
                                                <!-- Seleção -->
                                                <div class="tom-select-custom">
                                                    <select class="js-select form-select" autocomplete="off"
                                                        data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                                                        <option value="EveryDay">Todos os dias</option>
                                                        <option value="weekdays" selected="">Dias úteis</option>
                                                        <option value="Never">Nunca</option>
                                                    </select>
                                                </div>
                                                <!-- Fim da Seleção -->
                                            </div>
                                            <!-- Fim da Coluna -->

                                            <div class="col-auto mb-2">
                                                <!-- Seleção -->
                                                <div class="tom-select-custom tom-select-custom-end">
                                                    <select class="js-select form-select" autocomplete="off"
                                                        data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "11rem",
                                    "dropup": true
                                  }'>
                                                        <option value="0">às 12h da manhã</option>
                                                        <option value="1">à 1h da manhã</option>
                                                        <option value="2">à 2h da manhã</option>
                                                        <option value="3">à 3h da manhã</option>
                                                        <option value="4">à 4h da manhã</option>
                                                        <option value="5">à 5h da manhã</option>
                                                        <option value="6">à 6h da manhã</option>
                                                        <option value="7">à 7h da manhã</option>
                                                        <option value="8">à 8h da manhã</option>
                                                        <option value="9" selected="">à 9h da manhã</option>
                                                        <option value="10">às 10h da manhã</option>
                                                        <option value="11">às 11h da manhã</option>
                                                        <option value="12">ao meio-dia</option>
                                                        <option value="13">à 1h da tarde</option>
                                                        <option value="14">à 2h da tarde</option>
                                                        <option value="15">à 3h da tarde</option>
                                                        <option value="16">à 4h da tarde</option>
                                                        <option value="17">à 5h da tarde</option>
                                                        <option value="18">à 6h da tarde</option>
                                                        <option value="19">à 7h da tarde</option>
                                                        <option value="20">à 8h da tarde</option>
                                                        <option value="21">à 9h da tarde</option>
                                                        <option value="22">às 10h da noite</option>
                                                        <option value="23">às 11h da noite</option>
                                                    </select>
                                                </div>
                                                <!-- Fim da Seleção -->
                                            </div>
                                            <!-- Fim da Coluna -->
                                        </div>
                                        <!-- Fim da Linha -->
                                    </div>
                                    <!-- Fim do Formulário -->
                                </div>
                                <!-- Fim da Coluna -->
                            </div>
                            <!-- Fim da Linha -->

                            <p>Para reduzir o ruído, as notificações por e-mail são agrupadas e enviadas apenas quando você
                                está
                                inativo
                                ou offline.</p>

                            <div class="d-flex justify-content-end">
                                <div class="d-flex gap-3">
                                    <button type="button" class="btn btn-white" data-bs-dismiss="modal"
                                        aria-label="Fechar">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Body -->
            </div>
        </div>
    </div>
    <!-- End Edit user -->
@endsection

@section('js')
<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'copy',
            className: 'd-none'
          },
          {
            extend: 'excel',
            className: 'd-none'
          },
          {
            extend: 'csv',
            className: 'd-none'
          },
          {
            extend: 'pdf',
            className: 'd-none'
          },
          {
            extend: 'print',
            className: 'd-none'
          },
        ],
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
      })

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('#export-copy').click(function () {
        datatable.button('.buttons-copy').trigger()
      });

      $('#export-excel').click(function () {
        datatable.button('.buttons-excel').trigger()
      });

      $('#export-csv').click(function () {
        datatable.button('.buttons-csv').trigger()
      });

      $('#export-pdf').click(function () {
        datatable.button('.buttons-pdf').trigger()
      });

      $('#export-print').click(function () {
        datatable.button('.buttons-print').trigger()
      });

      $('.js-datatable-filter').on('change', function () {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        if (elVal === 'null') elVal = ''

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function () {
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


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF COUNTER
        // =======================================================
        new HSCounter('.js-counter')


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')
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
  </script>
@endsection