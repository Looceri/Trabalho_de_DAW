@extends('layout.base')

@section('title', '| Detalhes da Vaga')

@section('content')

<style>
    #navbarSettings {
        list-style: none;
        /* Remove os pontos */
        display: flex;
        /* Coloca os itens em linha */
        justify-content: center;
        /* Centraliza horizontalmente */
        padding: 0;
        margin: 0;
    }

    #navbarSettings .nav-item {
        margin: 0 15px;
        /* Espaçamento entre os itens */
    }

    #navbarSettings .nav-link {
        text-decoration: none;
        color: #000;
        /* Pode ajustar a cor conforme necessário */
    }

    #navbarSettings .nav-link:hover {
        color: #007bff;
        /* Cor ao passar o mouse */
    }
</style>

    <!-- Content -->
    <div class="content container-fluid">
  
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
        <div class="row">
            <div>
                <!-- Navbar -->
                <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
                    <!-- Navbar Toggle -->
                    <!-- Navbar Toggle -->
                    <div class="d-grid">
                        <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse"
                            data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false"
                            aria-controls="navbarVerticalNavMenu">
                            <span class="d-flex justify-content-between align-items-center">
                                <span class="text-dark">Menu</span>

                                <span class="navbar-toggler-default">
                                    <i class="bi-list"></i>
                                </span>

                                <span class="navbar-toggler-toggled">
                                    <i class="bi-x"></i>
                                </span>
                            </span>
                        </button>
                    </div>
                    <!-- End Navbar Toggle -->
                    <!-- End Navbar Toggle -->

                 

                    <!-- End Navbar Collapse -->
                </div>
                <!-- End Navbar -->
            </div>

            <div class=" col-lg-12">
                <div class="d-grid gap-3 gap-lg-5">
                    <!-- Card -->
                    <div class="card">
                        <!-- Profile Cover -->
                        <div class="profile-cover">
                            <div class="profile-cover-img-wrapper">
                                <img id="profileCoverImg" class="profile-cover-img" src="{{ asset('assets/img/1920x400/img2.jpg') }}"
                                    alt="Image Description">

                                <!-- Custom File Cover -->
                                <div class="profile-cover-content profile-cover-uploader p-3">
                                    <input type="file" class="js-file-attach profile-cover-uploader-input"
                                        id="profileCoverUplaoder"
                                        data-hs-file-attach-options='{
                                  "textTarget": "#profileCoverImg",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "allowTypes": [".png", ".jpeg", ".jpg"]
                               }'>
                                 
                                </div>
                                <!-- End Custom File Cover -->
                            </div>
                        </div>
                        <!-- End Profile Cover -->

                        <!-- Avatar -->
                        <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar"
                            for="editAvatarUploaderModal">
                            <img id="editAvatarImgModal" class="avatar-img" src="{{ asset('assets/img/160x160/img6.jpg') }}"
                                alt="Image Description">

                            <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal"
                                data-hs-file-attach-options='{
                              "textTarget": "#editAvatarImgModal",
                              "mode": "image",
                              "targetAttr": "src",
                              "allowTypes": [".png", ".jpeg", ".jpg"]
                           }'>

                         
                        </label>
                    </div>
                       <!-- Navbar Collapse -->
                       <div id="" class="">
                        <ul id="navbarSettings">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('details-vacancy', ['id' => $vacancy->id]) }}?showEmail=false">
                                    <i class="bi-person nav-icon"></i> Descricao da Vaga
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('details-vacancy', ['id' => $vacancy->id]) }}?showEmail=true">
                                    <i class="bi-at nav-icon"></i> Candidaturas
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- End Avatar -->

                  

                    <!-- Card -->
                    <div class="card" id="basicSection">
                        <div class="card-header">
                            <h2 class="card-title h4">Descricao da Vaga</h2>
                        </div>

                        <div class="card-body d-flex flex-wrap">
                            <!-- Título da Vaga -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Título</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">{{ $vacancy->title }}</p>
                                </div>
                            </div>
                        
                            <!-- Nome da Empresa -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Empresa</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">{{ $vacancy->owner->name }}</p>
                                </div>
                            </div>
                        
                            <!-- Salário -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Salário</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">{{ $vacancy->salary }}</p>
                                </div>
                            </div>
                        
                            <!-- Data de Início da Submissão -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Data de Início</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">{{ $vacancy->submission_start_date }}</p>
                                </div>
                            </div>
                        
                            <!-- Data de Fim da Submissão -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Data de Fim</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">{{ $vacancy->submission_end_date }}</p>
                                </div>
                            </div>
                        
                            <!-- Quantidade de Vagas -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Quantidade de Vagas</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">{{ $vacancy->vacancies_count }}</p>
                                </div>
                            </div>
                        
                            <!-- Descrição -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Descrição</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">{{ $vacancy->description }}</p>
                                </div>
                            </div>
                        
                            <!-- Quantidade de Candidaturas -->
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <label class="col-4 col-form-label fw-bold fs-5">Candidaturas</label>
                                <div class="col-8">
                                    <p class="fs-5 mb-0">5</p>
                                </div>
                            </div>
                        
                            <!-- Requisitos -->
                            <div class="col-md-6 mb-4 d-flex">
                                <label class="col-4 col-form-label fw-bold fs-5">Requisitos</label>
                                <div class="col-8">
                                    <ul class="list-unstyled fs-5 mb-0">
                                        @foreach ($vacancy->requirements as $requirement)
                                            <li>{{ $requirement->requirement }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        
                            <!-- Benefícios -->
                            <div class="col-md-6 mb-4 d-flex">
                                <label class="col-4 col-form-label fw-bold fs-5">Benefícios</label>
                                <div class="col-8">
                                    <ul class="list-unstyled fs-5 mb-0">
                                        @foreach ($vacancy->benefits as $benefit)
                                            <li>{{ $benefit->benefit }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 d-flex">
                                <label class="col-4 col-form-label fw-bold fs-5">Categorias</label>
                                <div class="col-8">
                                    <ul class="list-unstyled fs-5 mb-0">
                                        @foreach ($vacancy->categories as $category)
                                            <li>{{ $category->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                         
                        </div>
                        
                        
                    
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div id="emailSection" class="card" style=" display: none;">
                        <div class="card-header">
                            <h4 class="card-title">Candidaturas</h4>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            
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
                                            <th class="table-column-ps-0">Proprietario</th>
                                            <th>Documento</th>
                                            <th>Estado da candidatura</th>
                                            <th>Accoes</th>
                                        </tr>
                                    </thead>
                                    
                            
                                    <tbody class="text-center align-middle">
                                        @if($vacancy->applications->count() > 0)
                                        @foreach($vacancy->applications as $application)
                                            <tr>
                                                <td class="table-column-pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="usersDataCheck{{$vacancy->id}}">
                                                        <label class="form-check-label" for="usersDataCheck{{$vacancy->id}}"></label>
                                                    </div>
                                                </td>
                                                <td>{{$application->id}}</td>
                                                <td class="table-column-ps-0">
                                                    <a class="d-flex align-items-center justify-content-center" >
                                                        <div class="flex-grow-1 ms-2">
                                                            <h6 class="text-inherit mb-0">{{$application->user->name}}</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                               
                                                <td>
                                                        <div class="card-body">
                                                            <a href="{{ route('file', $application->file->id) }}" > <h5 class="card-title">{{ $application->file->name }}</h5>
                                                            </a>
                                                        </div>
                                                </td>
                                                <td>
                                                    @if($application->approved)
                                                        <span class="badge bg-primary">Aprovado</span>
                                                    @else
                                                        <span class="badge bg-danger">Não Aprovado</span>
                                                    @endif
                                                </td>
                                                                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">
                                                             <a href="{{ route('file', $application->file->id) }}" class="btn btn-primary btn-sm">
                                                                <i class="bi-eye-fill"></i>

                                                             </a>
                                                        <form action="{{ route('desactive-application', $application->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('POST') 
                                                        
                                                                @if($application->approved)
                                                                <button type="submit" class=" btn btn-danger">
                                                                    Desprovar
                                                                </button>  
                                                                @else
                                                                <button type="submit" class=" btn btn-primary">
                                                                    Aprovar

                                                                </button> 
                                                               @endif
                                                            
                                                        </form>
                                                        
                                                      
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                            
                                        @endforeach
                               
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->

                






                 
                </div>

                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>
        </div>
        <!-- End Row -->
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
            <img class="mb-3" src="{{ asset('assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
            <img class="mb-3" src="{{ asset('assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">Nenhuma Candidatura encontrada</p>

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
    <!-- Style Switcher JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mapeamento dos links de navegação para as seções correspondentes
            const sections = {
                '#content': 'basicSection',
                '#emailSection': 'emailSection',
            };
    
            // Função para ocultar todas as seções
            function hideAllSections() {
                for (const sectionId of Object.values(sections)) {
                    document.getElementById(sectionId).style.display = 'none';
                }
            }
    
            // Função para mostrar a seção correspondente ao link clicado
            function showSection(sectionId) {
                hideAllSections(); // Oculta todas as seções
                document.getElementById(sectionId).style.display = 'block'; // Exibe a seção desejada
            }
    
            // Verifica se o parâmetro 'showEmail' existe na URL e se é 'true'
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('showEmail') && urlParams.get('showEmail') === 'true') {
                showSection('emailSection'); // Exibe a seção de email se o parâmetro for true
            } else {
                showSection('basicSection'); // Exibe a seção básica por padrão
            }
    
            // Adiciona um ouvinte de eventos para cada link na barra de navegação
            document.querySelectorAll('#navbarSettings .nav-link').forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Previne o comportamento padrão do link
                    const sectionId = sections[this.getAttribute('href')]; // Pega o ID da seção correspondente
                    if (sectionId) {
                        showSection(sectionId); // Exibe a seção correspondente
                    }
                });
            });
        });
    </script>
    




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


        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach('.js-file-attach')


        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
          finish: () => {
            document.getElementById("addUserStepFormProgress").style.display = 'none'
            document.getElementById("addUserStepProfile").style.display = 'none'
            document.getElementById("addUserStepConfirmation").style.display = 'none'
            document.getElementById("successMessageContent").style.display = 'block'
            scrollToTop('#header');
            const formContainer = document.getElementById('formContainer')
          },
          onNextStep: function () {
            scrollToTop()
          },
          onPrevStep: function () {
            scrollToTop()
          }
        })

        function scrollToTop(el = '.js-step-form') {
          el = document.querySelector(el)
          window.scrollTo({
            top: (el.getBoundingClientRect().top + window.scrollY) - 30,
            left: 0,
            behavior: 'smooth'
          })
        }


        // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField('.js-add-field', {
          addedField: field => {
            HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
            HSCore.components.HSMask.init(field.querySelector('.js-input-mask'))
          }
        })


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select', {
          render: {
            'option': function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`
            },
            'item': function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`
            }
          }
        })


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')
      }
    })()
  </script>
@endsection
