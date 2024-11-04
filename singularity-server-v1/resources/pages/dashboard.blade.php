@extends('admin.layout.base')

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
                    <div class="card-body">
                        <h6 class="card-subtitle">Total De Usuários</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <h2 class="card-title text-inherit">72,540</h2>
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
                            <i class="bi-graph-up"></i> 12.5%
                        </span>
                        <span class="text-body fs-6 ms-1">de 70,104</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Total De Serviços</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <h2 class="card-title text-inherit">72</h2>
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
                                    "data": [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,60,71,72],
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
                            <i class="bi-graph-up"></i> 1.7%
                        </span>
                        <span class="text-body fs-6 ms-1">de 71</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Total De Empresas</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <h2 class="card-title text-inherit">568</h2>
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
                                  "data": [167, 200, 220, 180, 300, 151, 140, 150, 290, 320, 250, 270, 230, 310, 400, 350, 380, 410, 360, 450, 500, 475, 525, 490, 550, 600, 612, 568],
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

                        <span class="badge bg-soft-danger text-danger">
                            <i class="bi-graph-down"></i> 4.4%
                        </span>
                        <span class="text-body fs-6 ms-1">de 612</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Total De Profissional</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <h2 class="card-title text-inherit">92,913</h2>
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
                                    "data": [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
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

                        <span class="badge bg-soft-secondary text-body">0.0%</span>
                        <span class="text-body fs-6 ms-1">de 92,899</span>
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

                    <div class="col-auto">
                        <!-- Filter -->
                        <div class="row align-items-sm-center">
                            <div class="col-sm-auto">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <span class="text-secondary me-2">Status:</span>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-auto">
                                        <!-- Select -->
                                        <div class="tom-select-custom tom-select-custom-end">
                                            <select
                                                class="js-select js-datatable-filter form-select form-select-sm form-select-borderless"
                                                data-target-column-index="2" data-target-table="datatable"
                                                autocomplete="off"
                                                data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "10rem"
                                  }'>
                                                <option value="null" selected="">All</option>
                                                <option value="successful">Successful</option>
                                                <option value="overdue">Overdue</option>
                                                <option value="pending">Pending</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-auto">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <span class="text-secondary me-2">Signed up:</span>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-auto">
                                        <!-- Select -->
                                        <div class="tom-select-custom tom-select-custom-end">
                                            <select
                                                class="js-select js-datatable-filter form-select form-select-sm form-select-borderless"
                                                data-target-column-index="5" data-target-table="datatable"
                                                autocomplete="off"
                                                data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "10rem"
                                  }'>
                                                <option value="null" selected="">All</option>
                                                <option value="1 year ago">1 year ago</option>
                                                <option value="6 months ago">6 months ago</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->

                            <div class="col-md">
                                <form>
                                    <!-- Search -->
                                    <div class="input-group input-group-merge input-group-flush">
                                        <div class="input-group-prepend input-group-text">
                                            <i class="bi-search"></i>
                                        </div>
                                        <input id="datatableSearch" type="search" class="form-control"
                                            placeholder="Search users" aria-label="Search users">
                                    </div>
                                    <!-- End Search -->
                                </form>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Filter -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 4],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="table-column-pe-0">
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
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                                    <label class="form-check-label" for="usersDataCheck2"></label>
                                </div>
                            </td>
                            <td>67989</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img10.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Amanda Harvey <i
                                                class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Top endorsed"></i></h5>
                                    </div>
                                </a>
                            </td>
                            <td>amanda@site.com</td>
                            <td>+258 87 31 231 789</td>
                            <td>Maputo cidade</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck3">
                                    <label class="form-check-label" for="usersDataCheck3"></label>
                                </div>
                            </td>
                            <td>67326</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                                            <span class="avatar-initials">A</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Anne Richard</h5>
                                    </div>
                                </a>
                            </td>
                            <td>anne@site.com</td>
                            <td>+258 84 22 33 44 55</td>
                            <td>Beira</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck4">
                                    <label class="form-check-label" for="usersDataCheck4"></label>
                                </div>
                            </td>
                            <td>55821</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img3.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">David Harrison</h5>
                                    </div>
                                </a>
                            </td>
                            <td>david@site.com</td>
                            <td>+258 82 11 22 33 44</td>
                            <td>Nampula</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck5">
                                    <label class="form-check-label" for="usersDataCheck5"></label>
                                </div>
                            </td>
                            <td>85214</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img5.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Finch Hoot</h5>
                                    </div>
                                </a>
                            </td>
                            <td>finch@site.com</td>
                            <td>+258 85 43 21 98 76</td>
                            <td>Pemba</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck6">
                                    <label class="form-check-label" for="usersDataCheck6"></label>
                                </div>
                            </td>
                            <td>75470</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                            <span class="avatar-initials">B</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Bob Dean</h5>
                                    </div>
                                </a>
                            </td>
                            <td>bob@site.com</td>
                            <td>+258 82 90 12 34 56</td>
                            <td>Chimoio</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck7">
                                    <label class="form-check-label" for="usersDataCheck7"></label>
                                </div>
                            </td>
                            <td>37534</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img9.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Ella Lauda <i
                                                class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Top endorsed"></i></h5>
                                    </div>
                                </a>
                            </td>
                            <td>Ella@site.com</td>
                            <td>+258 84 56 78 90 12</td>
                            <td>Quelimane</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck8">
                                    <label class="form-check-label" for="usersDataCheck8"></label>
                                </div>
                            </td>
                            <td>57300</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img4.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Sam Kart</h5>
                                    </div>
                                </a>
                            </td>
                            <td>sam@site.com</td>
                            <td>+258 87 12 34 56 78</td>
                            <td>Tete</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck9">
                                    <label class="form-check-label" for="usersDataCheck9"></label>
                                </div>
                            </td>
                            <td>71288</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img6.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Costa Quinn</h5>
                                    </div>
                                </a>
                            </td>
                            <td>costa@site.com</td>
                            <td>+258 84 32 10 98 76</td>
                            <td>Inhambane</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck10">
                                    <label class="form-check-label" for="usersDataCheck10"></label>
                                </div>
                            </td>
                            <td>95211</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                                            <span class="avatar-initials">R</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Rachel Doe</h5>
                                    </div>
                                </a>
                            </td>
                            <td>rachel@site.com</td>
                            <td>+258 82 87 65 43 21</td>
                            <td>Manica</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck11">
                                    <label class="form-check-label" for="usersDataCheck11"></label>
                                </div>
                            </td>
                            <td>58643</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                            <span class="avatar-initials">B</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Brian Halligan</h5>
                                    </div>
                                </a>
                            </td>
                            <td>brian@site.com</td>
                            <td>+258 84 11 22 33 44</td>
                            <td>Sofala</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck12">
                                    <label class="form-check-label" for="usersDataCheck12"></label>
                                </div>
                            </td>
                            <td>44414</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img8.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Linda Bates</h5>
                                    </div>
                                </a>
                            </td>
                            <td>linda@site.com</td>
                            <td>+258 82 12 34 56 78</td>
                            <td>Gaza</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck13">
                                    <label class="form-check-label" for="usersDataCheck13"></label>
                                </div>
                            </td>
                            <td>12569</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-info avatar-circle">
                                            <span class="avatar-initials">C</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Chris Mathew <i
                                                class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Top endorsed"></i></h5>
                                    </div>
                                </a>
                            </td>
                            <td>chris@site.com</td>
                            <td>+258 85 98 76 54 32</td>
                            <td>Zambezia</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck14">
                                    <label class="form-check-label" for="usersDataCheck14"></label>
                                </div>
                            </td>
                            <td>54621</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                            <span class="avatar-initials">L</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Lewis Clarke</h5>
                                    </div>
                                </a>
                            </td>
                            <td>lewis@site.com</td>
                            <td>+258 87 65 43 21 98</td>
                            <td>Cabo Delgado</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck15">
                                    <label class="form-check-label" for="usersDataCheck15"></label>
                                </div>
                            </td>
                            <td>23485</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img7.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Clarice Boone <i
                                                class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Top endorsed"></i></h5>
                                    </div>
                                </a>
                            </td>
                            <td>clarice@site.com</td>
                            <td>+258 82 34 56 78 90</td>
                            <td>Niassa</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck16">
                                    <label class="form-check-label" for="usersDataCheck16"></label>
                                </div>
                            </td>
                            <td>78463</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-danger avatar-circle">
                                            <span class="avatar-initials">M</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Mark Colbert</h5>
                                    </div>
                                </a>
                            </td>
                            <td>mark@site.com</td>
                            <td>+258 84 98 76 54 32</td>
                            <td>Manhiça</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck17">
                                    <label class="form-check-label" for="usersDataCheck17"></label>
                                </div>
                            </td>
                            <td>23564</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-info avatar-circle">
                                            <span class="avatar-initials">J</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Johnny Appleseed</h5>
                                    </div>
                                </a>
                            </td>
                            <td>johnny@site.com</td>
                            <td>+258 87 23 45 67 89</td>
                            <td>Matola</td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="usersDataCheck18">
                                    <label class="form-check-label" for="usersDataCheck18"></label>
                                </div>
                            </td>
                            <td>39199</td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center" href="user-profile.html">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                                            <span class="avatar-initials">P</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">Phileas Fogg</h5>
                                    </div>
                                </a>
                            </td>
                            <td>phileas@site.com</td>
                            <td>+258 82 10 11 12 13</td>
                            <td>Boane</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
