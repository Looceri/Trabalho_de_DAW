@extends('admin.layout.base')

@section('title', '| Messages de Suporte')

@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Suporte</h1>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 text-primary">Detalhes da Solicitação: Erro ao Acessar a Conta</h5>
                        <div class="col-sm-4 text-end">
                            <a class="btn btn-sm btn-outline-primary" href="suport.html"><i
                                    class="bi-chevron-left small ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="container mt-4">
            <!-- Painel de Conversa -->
            <div class="card-body" style="max-height: 66vh; overflow-y: auto;">
                <!-- Mensagens -->
                <ul class="list-unstyled">
                    <!-- Mensagem do Usuário -->
                    <li class="media mb-3">
                        <div class="card w-75">
                            <div class="card-body">
                                <div class="media">
                                    <img class="avatar avatar-sm me-3"
                                        src="{{ asset('template/admin/assets/img/160x160/img1.jpg') }}"
                                        alt="Foto do Usuário">
                                    <div class="media-body" style="margin-top: 5px;">
                                        <h6 class="mt-0 mb-1">Carlos Mabunda (Usuário)</h6>
                                        <p>Estou tendo problemas para acessar a minha conta. Aparece uma mensagem de erro
                                            dizendo que a senha está incorreta, mas tenho certeza que estou digitando a
                                            senha correta.</p>
                                        <small class="text-muted">Enviado em: 05/10/2024 às 10:30</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Mensagem do Suporte -->
                    <li class="media mb-3">
                        <div class="card bg-secondary text-white-70" style="margin-left: 30%; width: 68%;">
                            <div class="card-body">
                                <div class="media">
                                    <img class="avatar avatar-sm me-3" src="{{ asset('template/assets/logo.png') }}"
                                        alt="Suporte">
                                    <div class="media-body" style="margin-top: 5px;">
                                        <h6 class="mt-0 mb-1 text-white">Suporte Técnico</h6>
                                        <p>Olá, Carlos. Poderia confirmar se está utilizando o e-mail correto ao tentar
                                            realizar o login? Além disso, já tentou redefinir sua senha?</p>
                                        <small class="text-muted text-white-50">Enviado em: 05/10/2024 às 11:00</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Mensagem do Usuário -->
                    <li class="media mb-3">
                        <div class="card" style="width: 38%;">
                            <div class="card-body">
                                <div class="media">
                                    <img class="avatar avatar-sm me-3"
                                        src="{{ asset('template/admin/assets/img/160x160/img1.jpg') }}"
                                        alt="Foto do Usuário">
                                    <div class="media-body" style="margin-top: 5px;">
                                        <h6 class="mt-0 mb-1">Carlos Mabunda (Usuário)</h6>
                                        <p>Sim, tentei redefinir a senha, mas não recebo o e-mail de confirmação.</p>
                                        <small class="text-muted">Enviado em: 05/10/2024 às 11:20</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Mensagem do Suporte -->
                    <li class="media mb-3">
                        <div class="card w-70 bg-secondary text-white-70" style="margin-left: 28%;">
                            <div class="card-body">
                                <div class="media">
                                    <img class="avatar avatar-sm me-3" src="{{ asset('template/assets/logo.png') }}"
                                        alt="Suporte">
                                    <div class="media-body" style="margin-top: 5px;">
                                        <h6 class="mt-0 mb-1 text-white">Suporte Técnico</h6>
                                        <p>Vamos verificar se o sistema está enviando corretamente o e-mail de redefinição.
                                            Enquanto isso, você pode tentar fazer o login utilizando um navegador diferente
                                            ou em uma janela anônima?</p>
                                        <small class="text-muted text-white-50">Enviado em: 05/10/2024 às 11:45</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Campo para Nova Mensagem -->
            <div class="card-footer">
                <form>
                    <div class="d-flex">
                        <a>

                            <div class="form-attachment-btn btn btn-soft-primary ">+
                                <input type="file" class="js-file-attach form-attachment-btn-label" id="avatarUploader"
                                    data-hs-file-attach-options='{
                                 }'>
                            </div>
                        </a>
                        <div class="flex-grow-1 me-2 " style="margin-left: 8px;">
                            <div class="form-group mb-0">
                                <textarea style="height: 42.59px;" class="form-control" id="mensagem" rows="3"
                                    placeholder="Escreva sua mensagem..."></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi-send"></i>
                            </button>
                        </div>
                    </div>
                </form>
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
                        href="https://explicador.co.mz/" target="_blank" rel="noopener" style="color: #377dff;">Explicador
                        Inc.</a></p>
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
