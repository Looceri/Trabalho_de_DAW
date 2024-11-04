@extends('admin.layout.base')

@section('title', '| Detalhe do Serviço')

@section('content')

    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('services') }}">Serviços</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Detalhes do serviço</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Advogacia</h1>
                </div>
                <!-- End Col -->

                <!-- <div class="col-sm-auto">
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
                    <!-- Header -->
                    <div class="card-header card-header-content-between">
                        <h4 class="card-header-title">Informações do serviço </h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Step -->

                        <!-- Step Item -->

                        <div class="step-content-wrapper">


                            <!-- Quill -->

                            <div class="mt-5">
                                <label for="phoneLabel" class="form-label">Título </label>

                                <div class="input-group">
                                    <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel"
                                        value="Advogacia" aria-label="+x(xxx)xxx-xx-xx"
                                        data-hs-mask-options='{
                                 "mask": "+0(000)000-00-00"
                               }'>
                                </div>
                            </div>

                            <!-- Quill -->



                            <div class="mt-5">
                                <label for="phoneLabel" class="form-label">Imagem <span
                                        class="form-label-secondary">(Optional)</span></label>

                                <div class="input-group">
                                    <input type="file" class="js-input-mask form-control">
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
                        <h4 class="card-header-title"> Detalhes do Serviço</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Step -->

                        <!-- Step Item -->

                        <div class="step-content-wrapper">


                            <!-- Quill -->
                            <div class="mt-5">
                                <label for="phoneLabel" class="form-label">Frequencia</label>

                                <div class="input-group">
                                    <input type="number" class="js-input-mask form-control" name="phone" id="phoneLabel"
                                        value="15">
                                </div>
                            </div>

                            <div class="mt-5">
                                <label for="subscriptionStatus" class="form-label">Status </label>

                                <div id="subscriptionStatus" class="d-flex">


                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" id="statusAtivo"
                                            name="subscriptionStatus" value="ativo" checked>
                                        <label class="form-check-label" for="statusAtivo">Ativo</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="statusDesativo"
                                            name="subscriptionStatus" value="desativo">
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
                    <button type="button" class="btn btn-danger">Eliminar Serviço</button>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Card -->

                <!-- End Card -->



                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Solicitações do Usuário</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <p>
                            Este gráfico exibe as solicitações feitas pelos usuários a este serviço, oferecendo insights
                            valiosos
                            sobre as preferências do usuário. </p>
                        <!-- Bar Chart -->
                        <div class="chartjs-custom my-5" style="height: 12rem;">
                            <canvas id="ecommerce-customer-details" class="js-chart"
                                data-hs-chartjs-options='{
                      "type": "line",
                      "data": {
                        "labels": ["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5"],
                        "datasets": [{
                          "data": [5, 6,4, 7, 8],
                          "backgroundColor": "transparent",
                          "borderColor": "#377dff",
                          "borderWidth": 3,
                          "pointRadius": 0,
                          "hoverBorderColor": "#377dff",
                          "pointBackgroundColor": "#377dff",
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
                              "stepSize": 1,
                              "color": "#97a4af",
                              "font": {
                                "size": 12,
                                "family": "Open Sans, sans-serif"
                              },
                              "padding": 10
                            }
                          },
                          "x": {
                            "display": true
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
                    }'></canvas>
                        </div>
                        <!-- End Bar Chart -->

                        <div class="row justify-content-center">
                            <!-- End Col -->

                            <div class="col-auto">
                                <span class="legend-indicator bg-primary"></span> Solicitações
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
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
            var quill = new Quill('#quill-editor', {});

            // Definir o valor da biografia aqui
            quill.root.innerHTML =
                'Advogado especializado em Direito Civil e Empresarial, com mais de 10 anos de experiência prestando consultoria jurídica para empresas e clientes individuais. Comprometido em oferecer soluções estratégicas e eficazes, com foco na resolução de conflitos e na defesa dos direitos de seus clientes. Atuante em processos judiciais e extrajudiciais, com uma abordagem ética e personalizada para cada caso.';
        });
        //   end

        (function() {
            window.onload = function() {


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

                L.tileLayer(
                    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        id: 'mapbox/light-v9'
                    }).addTo(leaflet)
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
@endsection
