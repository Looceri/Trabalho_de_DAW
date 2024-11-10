@extends('layout.base')

@section('title', '| Vagas')

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
                    <h1 class="page-header-title">Vagas</h1>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('add-vacancy') }}">
                        <i class="bi-person-plus-fill me-1"></i> Adicionar vaga
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
                        <h6 class="card-subtitle mb-2">Total de Vagas  </h6>

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
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total de vagas Publicadas</h6>

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
                <!-- End Card -->
            </div>

            <div class="col-sm-12 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total de candidaturas</h6>

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
                <!-- End Card -->
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
                            <input id="datatableSearch" type="search" class="form-control" placeholder="Pesquisar Vagas"
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
                <th class="table-column-ps-0">Titulo</th>
                <th>Data de publicacao</th>
                <th>Data fim de submissao</th>
                <th>Quantidade de vagas</th>
                <th>quantidade de Candidaturas</th>
                <th>Accoes</th>
            </tr>
        </thead>

        <tbody class="text-center align-middle">
            @if($vacancies->count() > 0)
            @foreach($vacancies as $vacancy)
                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="usersDataCheck{{$vacancy->id}}">
                            <label class="form-check-label" for="usersDataCheck{{$vacancy->id}}"></label>
                        </div>
                    </td>
                    <td>{{$vacancy->id}}</td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center justify-content-center">
                            <div class="flex-grow-1 ms-2">
                                <h6 class="text-inherit mb-0">{{$vacancy->title}}</h6>
                            </div>
                        </a>
                    </td>
                    <td>{{$vacancy->submission_start_date}}</td>
                    <td>{{$vacancy->submission_end_date}}</td>
                    <td>{{$vacancy->vacancies_count}}</td>
                    <td><a href="{{ route('edit-category', ['id' => $vacancy->id]) }}">5</a></td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('details-vacancy', ['id' => $vacancy->id]) }}" class="btn btn-primary btn-sm" title="Ver">
                                <i class="bi-eye-fill"></i>
                            </a>
                            <a href="{{ route('update-vacancy', ['id' => $vacancy->id]) }}" class="btn btn-warning btn-sm" title="Editar">
                                <i class="bi-pencil-fill"></i>
                            </a>
                            <form action="{{ route('desactive-vacancy', $vacancy->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('POST') <!-- Aqui estamos forçando o método POST -->
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi-trash-fill me-1"></i> 
                                </button>
                            </form>
                            
                          
                        </div>
                        
                    </td>
                </tr>

            @endforeach
   
            @endif
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
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
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
                        href="#" target="_blank" rel="noopener"
                        style="color: #377dff;">Singularity Inc.</a></p>
            </div>
        </div>
    </div>



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
            <p class="mb-0">Nenhuma Vaga encontrada</p>
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
