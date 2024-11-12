@extends('layout.base')

@section('title', '| Dashboard')

@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Dashboard</h1>
                </div>
                <!-- End Col -->

                <!-- <div class="col-auto">
                      <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
                        <i class="bi-person-plus-fill me-1"></i> Invite users
                      </a>
                    </div> -->
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    @php
                        // Calculate total, active, and inactive vacancies
                        $totalVacancies = $users->count();
                        $activeVacancies = $users->where('status', true)->count();
                        $inactiveVacancies = $users->where('status', false)->count();
                        
                        // Calculate the percentage of active vacancies
                        $activePercentage = $totalVacancies > 0 ? round(($activeVacancies / $totalVacancies) * 100, 1) : 0;
                    @endphp
                
                    <div class="card-body">
                        <h6 class="card-subtitle">Total de Usuarios</h6>
                
                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <!-- Display total vacancies -->
                                <h2 class="card-title text-inherit">{{ $totalVacancies }}</h2>
                            </div>
                            <!-- End Col -->
                
                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart"
                                        data-hs-chartjs-options='{
                                            "type": "line",
                                            "data": {
                                               "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                               "datasets": [{
                                                "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                                "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                                "borderColor": "#377dff",
                                                "borderWidth": 2,
                                                "pointRadius": 0,
                                                "pointHoverRadius": 0
                                              }]
                                            },
                                            "options": {
                                               "scales": {
                                                 "y": {
                                                   "display": false
                                                 },
                                                 "x": {
                                                   "display": false
                                                 }
                                               },
                                              "hover": {
                                                "mode": "nearest",
                                                "intersect": false
                                              },
                                              "plugins": {
                                                "tooltip": {
                                                  "postfix": "k",
                                                  "hasIndicator": true,
                                                  "intersect": false
                                                }
                                              }
                                            }
                                        }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                
                        <span class="badge bg-soft-success text-success">
                            <i class="bi-graph-up"></i> {{ $activePercentage }}%
                        </span>
                        <span class="text-body fs-6 ms-1">ativos de {{ $totalVacancies }}</span>
                        
                        
                    </div>
                </a>
                
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    @php
                        // Calculate total, active, and inactive vacancies
                        $totalVacancies = $vacancies->count();
                        $activeVacancies = $vacancies->where('status', true)->count();
                        $inactiveVacancies = $vacancies->where('status', false)->count();
                        
                        // Calculate the percentage of active vacancies
                        $activePercentage = $totalVacancies > 0 ? round(($activeVacancies / $totalVacancies) * 100, 1) : 0;
                    @endphp
                
                    <div class="card-body">
                        <h6 class="card-subtitle">Total de Vagas</h6>
                
                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <!-- Display total vacancies -->
                                <h2 class="card-title text-inherit">{{ $totalVacancies }}</h2>
                            </div>
                            <!-- End Col -->
                
                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart"
                                        data-hs-chartjs-options='{
                                            "type": "line",
                                            "data": {
                                               "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                               "datasets": [{
                                                "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                                "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                                "borderColor": "#377dff",
                                                "borderWidth": 2,
                                                "pointRadius": 0,
                                                "pointHoverRadius": 0
                                              }]
                                            },
                                            "options": {
                                               "scales": {
                                                 "y": {
                                                   "display": false
                                                 },
                                                 "x": {
                                                   "display": false
                                                 }
                                               },
                                              "hover": {
                                                "mode": "nearest",
                                                "intersect": false
                                              },
                                              "plugins": {
                                                "tooltip": {
                                                  "postfix": "k",
                                                  "hasIndicator": true,
                                                  "intersect": false
                                                }
                                              }
                                            }
                                        }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                
                        <span class="badge bg-soft-success text-success">
                            <i class="bi-graph-up"></i> {{ $activePercentage }}%
                        </span>
                        <span class="text-body fs-6 ms-1">ativos de {{ $totalVacancies }}</span>
                        
                      
                    </div>
                </a>
                
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    @php
                        // Calculate total, active, and inactive vacancies
                        $totalVacancies = $Applications->count();
                        $activeVacancies =$Applications->where('status', true)->count();
                        $inactiveVacancies =$Applications->where('status', false)->count();
                        
                        // Calculate the percentage of active vacancies
                        $activePercentage = $totalVacancies > 0 ? round(($activeVacancies / $totalVacancies) * 100, 1) : 0;
                    @endphp
                
                    <div class="card-body">
                        <h6 class="card-subtitle">Total de Candidaturas</h6>
                
                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <!-- Display total vacancies -->
                                <h2 class="card-title text-inherit">{{ $totalVacancies }}</h2>
                            </div>
                            <!-- End Col -->
                
                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart"
                                        data-hs-chartjs-options='{
                                            "type": "line",
                                            "data": {
                                               "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                               "datasets": [{
                                                "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                                "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                                "borderColor": "#377dff",
                                                "borderWidth": 2,
                                                "pointRadius": 0,
                                                "pointHoverRadius": 0
                                              }]
                                            },
                                            "options": {
                                               "scales": {
                                                 "y": {
                                                   "display": false
                                                 },
                                                 "x": {
                                                   "display": false
                                                 }
                                               },
                                              "hover": {
                                                "mode": "nearest",
                                                "intersect": false
                                              },
                                              "plugins": {
                                                "tooltip": {
                                                  "postfix": "k",
                                                  "hasIndicator": true,
                                                  "intersect": false
                                                }
                                              }
                                            }
                                        }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                
                        <span class="badge bg-soft-success text-success">
                            <i class="bi-graph-up"></i> {{ $activePercentage }}%
                        </span>
                        <span class="text-body fs-6 ms-1">ativos de {{ $totalVacancies }}</span>
                        
                      
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    @php
                        // Calculate total, active, and inactive vacancies
                        $totalVacancies = $Applications->count();
                        $activeVacancies =$Applications->where('status', true)->count();
                        $inactiveVacancies =$Applications->where('status', false)->count();
                        
                        // Calculate the percentage of active vacancies
                        $activePercentage = $totalVacancies > 0 ? round(($activeVacancies / $totalVacancies) * 100, 1) : 0;
                    @endphp
                
                    <div class="card-body">
                        <h6 class="card-subtitle">Total de Candidaturas</h6>
                
                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <!-- Display total vacancies -->
                                <h2 class="card-title text-inherit">{{ $activeVacancies }}</h2>
                            </div>
                            <!-- End Col -->
                
                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart"
                                        data-hs-chartjs-options='{
                                            "type": "line",
                                            "data": {
                                               "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                               "datasets": [{
                                                "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                                "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                                "borderColor": "#377dff",
                                                "borderWidth": 2,
                                                "pointRadius": 0,
                                                "pointHoverRadius": 0
                                              }]
                                            },
                                            "options": {
                                               "scales": {
                                                 "y": {
                                                   "display": false
                                                 },
                                                 "x": {
                                                   "display": false
                                                 }
                                               },
                                              "hover": {
                                                "mode": "nearest",
                                                "intersect": false
                                              },
                                              "plugins": {
                                                "tooltip": {
                                                  "postfix": "k",
                                                  "hasIndicator": true,
                                                  "intersect": false
                                                }
                                              }
                                            }
                                        }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                
                        <span class="badge bg-soft-success text-success">
                            <i class="bi-graph-up"></i> {{ $activePercentage }}%
                        </span>
                        <span class="text-body fs-6 ms-1">ativos de {{ $totalVacancies }}</span>
                        
                      
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Stats -->

        <div class="col-lg-7 mb-3 mb-lg-5 w-100">
            <!-- Card -->
            <div class="card h-100">
                <!-- Header -->
                <div class="card-header card-header-content-sm-between">
                    <h4 class="card-header-title mb-2 mb-sm-0">Registos Mensais</h4>

                    <!-- Nav -->
                    <ul class="nav nav-segment nav-fill" id="expensesTab" role="tablist">
                        <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="thisYear" data-trigger="click"
                            data-action="toggle">
                            <a class="nav-link active" href="javascript:;" data-bs-toggle="tab">Neste ano</a>
                        </li>
                        <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="lastYear" data-trigger="click"
                            data-action="toggle">
                            <a class="nav-link" href="javascript:;" data-bs-toggle="tab">Ano passado</a>
                        </li>
                    </ul>
                    <!-- End Nav -->
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm mb-2 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <span class="h1 mb-0">35%</span>
                                <span class="text-success ms-2">
                                    <i class="bi-graph-up"></i> 25.3%
                                </span>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto align-self-sm-end">
                            <div class="row fs-6 text-body">
                                <div class="col-auto">
                                    <span class="legend-indicator bg-primary"></span> Empresas
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                    <span class="legend-indicator"></span> Profissionais
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                        
                    <!-- Bar Chart -->
                    <div class="chartjs-custom">
                        <canvas id="updatingBarChart" style="height: 20rem;"
                            data-hs-chartjs-options='{
                        "type": "bar",
                        "data": {
                          "labels": ["Jan 24", "Feb 24", "Mar 24", "Abr 24", "May 24", "Jun 24", "Jul 24", "Ago 24", "Set 24"],
                          "datasets": [{
                            "data": [200, 300, 290, 350, 150, 350, 300, 100, 125],
                            "backgroundColor": "#377dff",
                            "hoverBackgroundColor": "#377dff",
                            "borderColor": "#377dff",
                            "maxBarThickness": "10"
                          },
                          {
                            "data": [150, 230, 382, 204, 169, 290, 300, 100, 300],
                            "backgroundColor": "#e7eaf3",
                            "borderColor": "#e7eaf3",
                            "maxBarThickness": "10"
                          }]
                        },
                        "options": {
                          "scales": {
                            "y": {
                              "grid": {
                                "color": "#e7eaf3",
                                "drawBorder": false,
                                "zeroLineColor": "#e7eaf3"
                              },
                              "ticks": {
                                "beginAtZero": true,
                                "stepSize": 100,
                                "fontSize": 12,
                                "fontColor":  "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 10,
                                "postfix": "$"
                              }
                            },
                            "x": {
                              "grid": {
                                "display": false,
                                "drawBorder": false
                              },
                              "ticks": {
                                "fontSize": 12,
                                "fontColor":  "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 5
                              },
                              "categoryPercentage": 0.5,
                              "maxBarThickness": "10"
                            }
                          },
                          "cornerRadius": 2,
                          "plugins": {
                            "tooltip": {
                              "hasIndicator": true,
                              "mode": "index",
                              "intersect": false
                            }
                          },
                          "hover": {
                            "mode": "nearest",
                            "intersect": true
                          }
                        }
                      }'></canvas>
                    </div>
                    <!-- End Bar Chart -->
                </div>
                <!-- End Body -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Row -->

        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-header-title">Lista dos Últimos Novos registos</h4>

                            <!-- Datatable Info -->
                            <div id="datatableCounterInfo" style="display: none;">
                                <div class="d-flex align-items-center">
                                    <span class="fs-6 me-3">
                                        <span id="datatableCounter">0</span>
                                        Selected
                                    </span>
                                    <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                                        <i class="tio-delete-outlined"></i> Delete
                                    </a>
                                </div>
                            </div>
                            <!-- End Datatable Info -->
                        </div>
                    </div>
                    <!-- End Col -->

                   
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom position-relative">
                <table id="datatable"
                    class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 7],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 7,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>

                    <thead class="thead-light" style="text-align: center;">
                        <tr>
                            <th class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="datatableCheckAll">
                                    <label class="form-check-label" for="datatableCheckAll"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th class="table-column-ps-0">Nome Completo</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Localização</th>
                            <th>Idade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck1">
                                    <label class="form-check-label" for="usersDataCheck1"></label>
                                </div>
                            </td>
                            <td>{{$user->id}}</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src=""
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">{{$user->name}} <i
                                                class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Top endorsed"></i></h5>
                                    </div>
                                </a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>+258 87 31 231 789</td>
                            <td>Maputo cidade</td>
                            <td>28 anos</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editUserModal">
                                        <i class="bi-pencil-fill me-1"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal"
                                        data-bs-target="#">
                                        <i class="bi-trash-fill me-1"></i> Bloquear
                                    </button>
                                   
                                </div>
                            </td>
                        </tr>
                    @endforeach
                   
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
 @php
    $totalUsers = $users->count();
    $initialDisplay = $totalUsers > 10 ? 10 : $totalUsers; // Mostra 10 ou o total de usuários, se menor que 10
@endphp
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <!-- Pagination -->
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
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8" selected="">8</option>
                                    <option value="12">12</option>
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
                <!-- End Pagination -->
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
        $(document).on('ready', function() {
            // INITIALIZATION OF DATERANGEPICKER
            // =======================================================
            $('.js-daterangepicker').daterangepicker();

            $('.js-daterangepicker-times').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });

            var start = moment();
            var end = moment();

            function cb(start, end) {
                $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format(
                    'MMM D') + ' - ' + end.format('MMM D, YYYY'));
            }

            $('#js-daterangepicker-predefined').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
        });


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
              <img class="mb-3" src="{{ asset('assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="{{ asset('assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
            }
        });

        const datatable = HSCore.components.HSDatatables.getItem(0)

        document.querySelectorAll('.js-datatable-filter').forEach(function(item) {
            item.addEventListener('change', function(e) {
                const elVal = e.target.value,
                    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
                    targetTable = e.target.getAttribute('data-target-table');

                HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(
                    elVal !== 'null' ? elVal : '').draw()
            })
        })
    </script>

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            localStorage.removeItem('hs_theme')

            window.onload = function() {


                // INITIALIZATION OF NAVBAR VERTICAL ASIDE
                // =======================================================
                new HSSideNav('.js-navbar-vertical-aside').init()


                // INITIALIZATION OF FORM SEARCH
                // =======================================================
                const HSFormSearchInstance = new HSFormSearch('.js-form-search')

                if (HSFormSearchInstance.collection.length) {
                    HSFormSearchInstance.getItem(1).on('close', function(el) {
                        el.classList.remove('top-0')
                    })

                    document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
                        let dataOptions = JSON.parse(e.currentTarget.getAttribute(
                                'data-hs-form-search-options')),
                            $menu = document.querySelector(dataOptions.dropMenuElement)

                        $menu.classList.add('top-0')
                        $menu.style.left = 0
                    })
                }


                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init()


                // INITIALIZATION OF CHARTJS
                // =======================================================
                HSCore.components.HSChartJS.init('.js-chart')


                // INITIALIZATION OF CHARTJS
                // =======================================================
                HSCore.components.HSChartJS.init('#updatingBarChart')
                const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

                // Call when tab is clicked
                document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
                    item.addEventListener('click', e => {
                        let keyDataset = e.currentTarget.getAttribute('data-datasets')

                        const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart',
                            HSThemeAppearance.getAppearance())

                        if (keyDataset === 'lastYear') {
                            updatingBarChart.data.labels = ["Jan 23", "Feb 23", "Mar 23", "Abr 23",
                                "May 23", "Jun 23", "Jul 23", "Ago 23", "Set 23", "Out 23",
                                "Nov 23", "Dez 23"
                            ];
                            updatingBarChart.data.datasets = [{
                                    "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320,
                                        125, 320, 125, 320
                                    ],
                                    "backgroundColor": styles.data.datasets[0].backgroundColor,
                                    "hoverBackgroundColor": styles.data.datasets[0]
                                        .hoverBackgroundColor,
                                    "borderColor": styles.data.datasets[0].borderColor,
                                    "maxBarThickness": 10
                                },
                                {
                                    "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245,
                                        110, 110
                                    ],
                                    "backgroundColor": styles.data.datasets[1].backgroundColor,
                                    "borderColor": styles.data.datasets[1].borderColor,
                                    "maxBarThickness": 10
                                }
                            ];
                            updatingBarChart.update();
                        } else {
                            updatingBarChart.data.labels = ["Jan 24", "Feb 24", "Mar 24", "Abr 24",
                                "May 24", "Jun 24", "Jul 24", "Ago 24", "Set 24"
                            ];
                            updatingBarChart.data.datasets = [{
                                    "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                                    "backgroundColor": styles.data.datasets[0].backgroundColor,
                                    "hoverBackgroundColor": styles.data.datasets[0]
                                        .hoverBackgroundColor,
                                    "borderColor": styles.data.datasets[0].borderColor,
                                    "maxBarThickness": 10
                                },
                                {
                                    "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225,
                                        120
                                    ],
                                    "backgroundColor": styles.data.datasets[1].backgroundColor,
                                    "borderColor": styles.data.datasets[1].borderColor,
                                    "maxBarThickness": 10
                                }
                            ]
                            updatingBarChart.update();
                        }
                    })
                })


                // INITIALIZATION OF CHARTJS
                // =======================================================
                HSCore.components.HSChartJS.init('.js-chart-datalabels', {
                    plugins: [ChartDataLabels],
                    options: {
                        plugins: {
                            datalabels: {
                                anchor: function(context) {
                                    var value = context.dataset.data[context.dataIndex];
                                    return value.r < 20 ? 'end' : 'center';
                                },
                                align: function(context) {
                                    var value = context.dataset.data[context.dataIndex];
                                    return value.r < 20 ? 'end' : 'center';
                                },
                                color: function(context) {
                                    var value = context.dataset.data[context.dataIndex];
                                    return value.r < 20 ? context.dataset.backgroundColor : context
                                        .dataset.color;
                                },
                                font: function(context) {
                                    var value = context.dataset.data[context.dataIndex],
                                        fontSize = 25;

                                    if (value.r > 50) {
                                        fontSize = 35;
                                    }

                                    if (value.r > 70) {
                                        fontSize = 55;
                                    }

                                    return {
                                        weight: 'lighter',
                                        size: fontSize
                                    };
                                },
                                formatter: function(value) {
                                    return value.r
                                },
                                offset: 2,
                                padding: 0
                            }
                        },
                    }
                })

                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')


                // INITIALIZATION OF CLIPBOARD
                // =======================================================
                HSCore.components.HSClipboard.init('.js-clipboard')
            }
        })()
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

    <!-- End Style Switcher JS -->
@endsection
