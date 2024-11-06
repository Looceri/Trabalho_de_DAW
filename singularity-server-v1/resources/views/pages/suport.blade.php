@extends('admin.layout.base')

@section('title', '| Suporte')

@section('content')
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">Suporte</h1>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->


            <div class="row justify-content-lg-center">
                <div class="col-lg-9">
                    <!-- Step -->
                    <ul class="step">
                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <small class="step-divider">Hoje</small>
                            </div>
                        </li>
                        <!-- Fim Step Item -->

                        <!-- Solicitação de Suporte do Usuário -->
                        <li class="step-item">
                            <div class="step-content-wrapper">

                                <span class="btn-status btn-sm-status btn-status-primary"></span>
                                <div class="step-avatar">
                                    <a href="{{route('professionals')}}">
                                        <img class="step-avatar" src="{{ asset('template/admin/assets/img/160x160/img1.jpg') }}" alt="Foto do Usuário">
                                    </a>
                                </div>
                                <div class="step-content">
                                    <a href="{{route('professionals')}}">
                                        <span class="d-block h5 text-inherit mb-1">Carlos Mabunda (Usuário)</span>
                                    </a>
                                    <p class="fs-5 mb-1">Enviou uma solicitação de suporte sobre <a href="#">erro ao
                                            acessar a conta</a>
                                    </p>

                                    <ul class="list-group list-group-sm">
                                        <li class="list-group-item list-group-item-light">
                                            <div class="row gx-1">

                                                <div class="col-sm-4">
                                                    <!-- Detalhes do Arquivo -->
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img class="avatar avatar-xs"
                                                                src="{{ asset('template/admin/assets/svg/brands/pdf-icon.svg') }}" alt="PDF">
                                                        </div>
                                                        <div class="flex-grow-1 text-truncate ms-2">
                                                            <span class="d-block fs-6 text-dark text-truncate"
                                                                title="erro-conta.pdf">detalhes-do-erro.pdf</span>
                                                            <span class="d-block small text-muted">150kb</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-8 text-end">
                                                    <a class="btn btn-sm btn-white" href="#">Ver<i
                                                            class="bi-chevron-right small ms-1"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <div class="text-end" style="margin-top: 10px;">
                                            <a class="btn btn-sm btn-white" href="{{route('messages')}}">Ver mais detalhes <i
                                                    class="bi-chevron-right small ms-1"></i></a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Fim Solicitação de Suporte do Usuário -->

                        <!-- Resposta do Cliente -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <div>
                                    <span class="btn-status btn-sm-status btn-status-danger"></span>

                                    <a href="{{route('professionals')}}">
                                        <img style="height: 42px; margin-right: 16px;" class="step-avatar-img"
                                            src="{{ asset('template/admin/assets/img/160x160/img8.jpg') }}" alt="Imagem do Profissional">
                                    </a>
                                </div>

                                <div class="step-content">

                                    <a href="{{route('professionals')}}">
                                        <span class="d-block h5 text-inherit mb-1">Maria Silva (Cliente)</span>
                                    </a>
                                    <p class="fs-5 mb-1 text-body">Estou com dificuldades para redefinir minha senha e
                                        preciso de
                                        assistência.</p>
                                    <div class="text-end">
                                        <a class="btn btn-sm btn-white" href="{{route('messages')}}">Ver mais detalhes <i
                                                class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Fim Resposta do Cliente -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <small class="step-divider">Ontem</small>
                            </div>
                        </li>
                        <!-- Fim Step Item -->

                        <!-- Solicitação de Suporte do Usuário -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <div class="step-avatar">
                                    <a href="{{route('professionals')}}">
                                        <img class="step-avatar" src="{{ asset('template/admin/assets/img/160x160/img3.jpg') }}" alt="Imagem da Empresa">
                                    </a>
                                </div>

                                <div class="step-content">
                                    <a href="{{route('professionals')}}">
                                        <span class="d-block h5 text-inherit mb-1">ABC Logistics (Cliente)</span>
                                    </a>
                                    <p class="fs-5 mb-1">Respondeu à solicitação de <strong>Carlos Mabunda</strong> sobre o
                                        erro de login.
                                    </p>

                                    <ul class="list-group list-group-sm">
                                        <li class="list-group-item list-group-item-light">
                                            <p class="mb-0">O problema foi identificado e já está sendo corrigido.
                                                Agradecemos pela paciência.
                                            </p>
                                        </li>
                                    </ul>

                                    <div class="text-end" style="margin-top: 10px;">
                                        <a class="btn btn-sm btn-white" href="{{route('messages')}}">Ver detalhes da resposta
                                            <i class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Fim Solicitação de Suporte do Usuário -->

                        <!-- Solicitação de Suporte do Profissional -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <a href="{{route('professionals')}}">
                                    <span class="step-icon step-icon-soft-info">P</span>
                                </a>
                                <div class="step-content">
                                    <a href="{{route('professionals')}}">
                                        <span class="d-block h5 text-inherit mb-1">Pedro Fernandes
                                            (Profissional)</span>
                                    </a>
                                    <p class="fs-5 mb-1">Enviou uma solicitação de suporte sobre problemas técnicos na
                                        plataforma.</p>

                                    <div class="text-end">
                                        <a class="btn btn-sm btn-white" href="{{route('messages')}}">Ver mais detalhes <i
                                                class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Fim Solicitação de Suporte do Profissional -->

                        <!-- Solicitação de Suporte do Usuário -->
                        <li class="step-item">
                            <div class="step-content-wrapper">

                                <a href="{{route('enterprises')}}">
                                    <div>
                                        <img style="height: 42px; margin-right: 16px;" class="step-avatar-img"
                                            src="{{ asset('template/admin/assets/img/160x160/img7.jpg') }}" alt="Imagem do Profissional">
                                    </div>
                                </a>
                                <div class="step-content">
                                    <a href="{{route('enterprises')}}">
                                        <span class="d-block h5 text-inherit mb-1" class="mb-1">
                                            Sara Pinto (Usuário)
                                        </span>
                                    </a>
                                    <p class="fs-5 mb-1">Enviou uma solicitação de ajuda sobre a verificação de e-mail.</p>

                                    <div class="text-end">
                                        <a class="btn btn-sm btn-white" href="{{route('messages')}}">Ver detalhes da
                                            solicitação <i class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Fim Solicitação de Suporte do Usuário -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <small class="step-divider">Semana passada</small>
                            </div>
                        </li>
                        <!-- Fim Step Item -->

                        <!-- Solicitação de Suporte do Usuário -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <div class="step-avatar">
                                    <a href="{{route('enterprises')}}">
                                        <img class="step-avatar-img" src="{{ asset('template/admin/assets/img/160x160/img6.jpg') }}"
                                            alt="Imagem do Usuário">
                                    </a>
                                </div>

                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="{{route('enterprises')}}">Mário Gomes (Usuário)</a>
                                    </h5>
                                    <p class="fs-5">Solicitou suporte sobre o carregamento lento da página.</p>

                                    <div class="text-end">
                                        <a class="btn btn-sm btn-white" href="{{route('messages')}}">Ver detalhes do suporte
                                            <i class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Fim Solicitação de Suporte do Usuário -->

                        <!-- Resposta de um Cliente -->
                        <li class="step-item">
                            <div class="step-content-wrapper">

                                <a href="{{route('enterprises')}}">
                                    <span class="step-icon step-icon-soft-primary">L</span>
                                </a>
                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="{{route('enterprises')}}">Luís Mendes (Cliente)</a>
                                    </h5>
                                    <p class="fs-5">Confirmou que o problema de carregamento lento foi resolvido e está
                                        em funcionamento.
                                    </p>

                                    <div class="text-end">
                                        <a class="btn btn-sm btn-white" href="{{route('messages')}}">Ver detalhes da
                                            resolução <i class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Fim Resposta de um Cliente -->
                    </ul>
                    <!-- Fim Step -->

                    <!-- Footer -->
                    <div class="d-grid">
                        <a class="btn btn-white" href="javascript:;">
                            <i class="bi-arrow-clockwise me-1"></i> Carregar mais solicitações
                        </a>
                    </div>
                    <!-- Fim Footer -->
                </div>
            </div>


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
