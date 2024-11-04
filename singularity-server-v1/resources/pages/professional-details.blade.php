@extends('admin.layout.base')

@section('title', '| Detalhes do Prosfissional')

@section('content')

     <!-- Content -->
     <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('professionals') }}">Profissional</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detalhes do Profissional</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Anne Richard</h1>
            </div>
            <!-- End Col -->
  <!--
            <div class="col-sm-auto">
              <div class="d-flex gap-2">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Previous customer">
                  <i class="bi-arrow-left"></i>
                </button>
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Next customer">
                  <i class="bi-arrow-right"></i>
                </button>
              </div>
            </div> -->
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
          <div class="col-lg-8">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body">
                <!-- Media -->
                <div class="d-flex align-items-center mb-5">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-lg avatar-circle">
                      <img class="avatar-img" src="{{ asset('template/admin/assets/img/160x160/img9.jpg') }}" alt="Image Description">
                    </div>
                  </div>

                  <div class="flex-grow-1 mx-3">
                    <div class="d-flex mb-1">
                      <h3 class="mb-0 me-3">Anne Richard</h3>

                      <!-- Dropdown -->
                      <div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <button type="button" class="btn btn-white btn-icon btn-xs rounded-circle" id="editDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi-pencil-fill"></i>
                        </button>

                        <div class="dropdown-menu dropdown-card mt-1" aria-labelledby="editDropdown" style="min-width: 20rem;">
                          <!-- Card -->
                          <div class="card">
                            <div class="card-body">
                              <div class="row gx-3">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                  <label for="firstNameLabel" class="form-label">Nome</label>
                                  <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice" value="Anna">
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-12 mt-3">
                                  <label for="lastNameLabel" class="form-label">Apelido</label>
                                  <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone" aria-label="Boone" value="Richard">
                                </div>
                                <div class="col-sm-12 mt-3">
                                  <label for="lastNameLabel" class="form-label">Foto de perfil</label>
                                  <input type="file" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone" aria-label="Boone" value="Richard">
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <div class="d-flex justify-content-end gap-2 mt-3">
                                <button type="button" class="btn btn-white btn-sm">Cancelar</button>
                                <button type="button" class="btn btn-primary btn-sm">Salvar</button>
                              </div>
                            </div>
                          </div>
                          <!-- End Body -->
                        </div>
                      </div>
                      <!-- End Dropdown -->
                    </div>

                    <span class="fs-6"> Subscrição expira em 3 dias.</span>
                  </div>

                  <div class="d-none d-sm-inline-block ms-auto text-end">
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-white btn-sm" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions <i class="bi-chevron-down"></i>
                      </button>

                      <div class="dropdown-menu mt-1" aria-labelledby="actionsDropdown">
                        <a class="dropdown-item" href="#">
                          <i class="bi-envelope dropdown-item-icon"></i> Enviar E-mail
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-telephone dropdown-item-icon"></i> Ligar
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-arrow-repeat dropdown-item-icon"></i> Enviar Mensagem
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">
                          <i class="bi-trash dropdown-item-icon text-danger"></i>
                          Eliminar
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->
                  </div>
                </div>
                <!-- End Media -->

                <label class="form-label">Biografia</label>

                <!-- Quill -->
                <div class="quill-custom">
                  <div id="quill-editor" class="js-quill" style="height: 15rem;" data-hs-quill-options='{
                        "modules": {
                          "toolbar": [
                            ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                          ]
                        }
                       }'>
                  </div>
                </div>

                <!-- End Quill -->
                <div class="mt-5">
                  <label for="phoneLabel" class="form-label">E-mail </label>

                  <div class="input-group">
                    <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" value="AnneRichard@gmail.com" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                             "mask": "+0(000)000-00-00"
                           }'>
                          </div>
                      </div>
                  <div class="mt-5">
                  <label for="phoneLabel" class="form-label">Celular </label>

                  <div class="input-group">
                    <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" value="(+258)845663338" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                             "mask": "+0(000)000-00-00"
                           }'>

                    <div class="input-group-append">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select form-select" autocomplete="off" name="phoneSelect" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true,
                                "dropdownWidth": "8rem"
                              }'>
                          <option value="+258" selected="">+258</option>
                          <option value="Home">+1</option>
                          <option value="Work">+100</option>
                          <option value="Fax">+325</option>
                          <option value="Direct">+900</option>
                        </select>
                        <!-- End Select -->
                      </div>
                  </div>

                    </div>
                  </div>
                  <div class="mt-5">
                      <label for="phoneLabel" class="form-label">Localização </label>

                      <div class="input-group">
                        <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" value="Maputo,Moçambique" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                 "mask": "+0(000)000-00-00"
                               }'>
                              </div>
                          </div>
              </div>
              <!-- Body -->

              <!-- Footer -->
              <div class="card-footer">
                <div class="d-flex justify-content-end gap-3">
                  <button type="submit" class="btn btn-white">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
              </div>
              <!-- End Footer -->
            </div>
            <!-- End Card -->


            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Informações Profissionais</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Step -->

                  <!-- Step Item -->

                    <div class="step-content-wrapper">


                      <!-- Quill -->

                  <div class="mt-5">
                      <label for="phoneLabel" class="form-label">Experiência</label>

                      <div class="input-group">
                        <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" value="35 anos" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                 "mask": "+0(000)000-00-00"
                               }'>
                              </div>
                          </div>

                <!-- Quill -->



                <div class="mt-5">
                  <label for="phoneLabel" class="form-label">Serviços </label>

                  <div class="input-group">
                    <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" value="Advogada" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                             "mask": "+0(000)000-00-00"
                           }'>
                          </div>
                      </div>

              </div>
              <!-- Body -->

              <!-- Footer -->
              <div class="card-footer">
                <div class="d-flex justify-content-end gap-3">
                  <button type="submit" class="btn btn-white">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
              </div>
                  </li>
                  <!-- End Step Item -->
                </ul>
                <!-- End Step -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
                <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title"> Detalhes da Subscrição</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Step -->

                  <!-- Step Item -->

                    <div class="step-content-wrapper">


                      <!-- Quill -->
                      <div class="mt-5">
                          <label for="phoneLabel" class="form-label">Início da Subscrição</label>

                          <div class="input-group">
                            <input type="date" class="js-input-mask form-control" name="phone" id="phoneLabel" value="2023-06-01" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                     "mask": "+0(000)000-00-00"
                                   }'>
                                  </div>
                              </div>
                              <div class="mt-5">
                                  <label for="phoneLabel" class="form-label">Fim da Subscrição </label>

                                  <div class="input-group">
                                    <input type="date" class="js-input-mask form-control" name="phone" id="phoneLabel" value="2023-07-01" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                             "mask": "+0(000)000-00-00"
                                           }'>
                                  </div>
                              </div>
                              <div class="mt-5">
                                  <label for="subscriptionStatus" class="form-label">Status da Subscrição </label>

                                  <div id="subscriptionStatus" class="d-flex">
                                    <div class="form-check me-3">
                                      <input class="form-check-input" type="checkbox" id="statusPendente" name="subscriptionStatus" value="pendente" >
                                      <label class="form-check-label" for="statusPendente">Pendente</label>
                                    </div>

                                    <div class="form-check me-3">
                                      <input class="form-check-input" type="checkbox" id="statusAtivo" name="subscriptionStatus" value="ativo" checked>
                                      <label class="form-check-label" for="statusAtivo">Ativo</label>
                                    </div>

                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="statusDesativo" name="subscriptionStatus" value="desativo">
                                      <label class="form-check-label" for="statusDesativo">Desativo</label>
                                    </div>
                                  </div>
                                </div>
                <!-- Quill -->
                <div class="quill-custom">

                </div>


                <!-- Quill -->
                <div class="quill-custom">

                </div>
                <!-- End Quill -->
              </div>
              <!-- Body -->

              <!-- Footer -->
              <div class="card-footer">
                <div class="d-flex justify-content-end gap-3">
                  <button type="submit" class="btn btn-white">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
              </div>
                  </li>
                  <!-- End Step Item -->
                </ul>
                <!-- End Step -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <div class="d-none d-lg-block">
              <button type="button" class="btn btn-danger">Eliminar Profissional</button>
            </div>
          </div>

          <div class="col-lg-4">
            <!-- Card -->

            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h5>Avaliação</h5>

              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body ">


                <!-- Estrelas de Avaliação -->
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                  </div>
                  <p class="users-count mb-0">3 Avaliações</p> <!-- Remove a margem inferior padrão -->
                </div>




              </div>
              <!-- Body -->
            </div>



            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Feedback do Usuário</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
               <p>
                  Este gráfico exibe a comparação entre likes e dislikes, oferecendo insights valiosos sobre as preferências do usuário.
               </p>
                <!-- Bar Chart -->
                <div class="chartjs-custom my-5" style="height: 12rem;">
                  <canvas id="ecommerce-customer-details" class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5"],
                               "datasets": [{
                                "data": [10, 9, 14, 5, 10],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0,
                                "tension": 0.4
                              },
                              {
                                "data": [15, 13, 18, 7, 26],
                                "backgroundColor": "transparent",
                                "borderColor": "red",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0,
                                "tension": 0.4
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
                                      "stepSize": 10,
                                      "color": "#97a4af",
                                      "font": {
                                        "size": 12,
                                        "family": "Open Sans, sans-serif"
                                      },
                                      "padding": 10
                                    }
                                  },
                                  "x": {
                                    "display": false
                                  }
                              },
                              "plugins": {
                                "tooltip": {
                                  "hasIndicator": true,
                                  "mode": "index",
                                  "intersect": false,
                                  "lineMode": true,
                                  "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                                }
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                  </canvas>
                </div>
                <!-- End Bar Chart -->

                <div class="row justify-content-center">
                  <div class="col-auto">
                    <span class="legend-indicator bg-danger"></span> Dislike
                  </div>
                  <!-- End Col -->

                  <div class="col-auto">
                    <span class="legend-indicator bg-primary"></span> Like
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->


 <!-- Card -->
 <div class="card mb-3 mb-lg-5">
    <!-- Header -->
   <div class="card-header ">
     <div class="d-flex  align-items-center mb-3"> <!-- Flex para alinhar horizontalmente -->
         <div class="flex-shrink-0 me-3"> <!-- Margem à direita para espaçamento -->
             <a href="profile.html" class="avatar avatar-lg avatar-circle">
                 <img class="avatar-img" src="{{asset('template/admin/assets/img/160x160/img9.jpg')}}" alt="Image Description">
             </a>
         </div>
         <div class="text-start"> <!-- Para garantir que o texto não fique centralizado -->
             <h5 class="mb-0">
                 <a href="profile.html" style="text-decoration: none; color: inherit;">Ivan Perce</a>
             </h5>
             <h6 class="text-muted mb-0" style="font-weight: bold;">Proprietário</h6> <!-- Título do proprietário -->
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
             <a href="https://www.google.com/maps/search/?api=1&query=Maputo,+Moçambique" target="_blank" style="text-decoration: none; color: inherit;">
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
        <!-- End Row -->


      </div>
      <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <p class="fs-6 mb-0">&copy; Todos os direitos reservados. Feito pela <a
                        class="d-none d-sm-inline-block nav-link d-inline fw-normal p-0 ms-1" href="https://explicador.co.mz/"
                        target="_blank" rel="noopener" style="color: #377dff;">Explicador Inc.</a></p>
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
              <img class="mb-3" src="{{ asset('template/admin/asset/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="{{ asset('template/admin/asset/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
      });

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    // descricao da biografia
    document.addEventListener("DOMContentLoaded", function() {
    var quill = new Quill('#quill-editor', {
    });

    // Definir o valor da biografia aqui
    quill.root.innerHTML = 'Advogado especializado em Direito Civil e Empresarial, com mais de 10 anos de experiência prestando consultoria jurídica para empresas e clientes individuais. Comprometido em oferecer soluções estratégicas e eficazes, com foco na resolução de conflitos e na defesa dos direitos de seus clientes. Atuante em processos judiciais e extrajudiciais, com uma abordagem ética e personalizada para cada caso.';
  });
//   end

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


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')
        HSCore.components.HSQuill.init('.js-quill-step')


        // INITIALIZATION OF LEAFLET
        // =======================================================
        const leaflet = HSCore.components.HSLeaflet.init(document.getElementById('map'))

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          id: 'mapbox/light-v9'
        }).addTo(leaflet)
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
