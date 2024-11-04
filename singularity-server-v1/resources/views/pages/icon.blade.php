@extends('admin.layout.base')

@section('title', '| Icone')

@section('content')

    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col">
              <h1 class="page-header-title">Icone da app</h1>
            </div>
            <!-- End Col -->


            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="card">
          <form>
            <!-- Media -->
            <div class="d-flex align-items-center  p-2">
              <!-- Avatar -->
              <label class="avatar avatar-xxl avatar-circle" for="avatarUploader">
                <img id="avatarImg" class="avatar-img" src="{{ asset('template/admin/assets/img/512x512/img2.png') }}" alt="Image Description">
              </label>

              <div class="d-flex gap-3 ms-4">
                <div class="form-attachment-btn btn btn-sm btn-primary">Novo icone
                  <input type="file" class="js-file-attach form-attachment-btn-label" id="avatarUploader"
                    data-hs-file-attach-options='{
                        "textTarget": "#avatarImg",
                        "mode": "image",
                        "targetAttr": "src",
                        "resetTarget": ".js-file-attach-reset-img",
                        "resetImg": "{{ asset('template/admin/assets/img/512x512/img2.png') }}",
                        "allowTypes": [".png", ".jpeg", ".jpg"]
                     }'>
                </div>
                <!-- End Avatar -->

                <button type="button" class="js-file-attach-reset-img btn btn-white btn-sm">Reset</button>
                <div>
                  <div class="text-center">Modo:</div>
                  <div>
                    <div class="form-check form-check-inline form-check-warning">
                      <input type="checkbox" id="colorfulFormInlineCheck5" class="form-check-input" checked="">
                      <label class="form-check-label" for="colorfulFormInlineCheck5">Light</label>
                    </div>

                    <div class="form-check form-check-inline form-check-dark">
                      <input type="checkbox" id="colorfulFormInlineCheck7" class="form-check-input" checked="">
                      <label class="form-check-label" for="colorfulFormInlineCheck7">Dark</label>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-soft-success">Save</button>

              </div>

            </div>

            <!-- End Media -->
          </form>
        </div>

        <br>
        <br>
        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="table-responsive datatable-custom position-relative">
            <table id="datatable"
              class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
              data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 6],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 15,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
              <thead class="thead-light">
                <tr>
                  <th class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                      <label class="form-check-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th>ID</th>
                  <th class="table-column-ps-0">Nome do ficheiro</th>
                  <th>Imagem</th>
                  <th>Status</th>
                  <th>Modo</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>


                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck1">
                      <label class="form-check-label" for="usersDataCheck1"></label>
                    </div>
                  </td>
                  <td>1</td>
                  <td class="table-column-ps-0">Model 3</td>
                  <td><img src="{{ asset('template/assets/logo.png') }}" alt="Logo do App 1" width="50" height="50"></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Activo
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Ligtht
                  </td>
                  <td>
                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal"
                      data-bs-target="#editUserModal">
                      <i class="bi-pencil-fill me-1"></i> Editar
                    </button>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                      <label class="form-check-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td>2</td>
                  <td class="table-column-ps-0">Model 2</td>
                  <td><img src="{{ asset('template/admin/assets/5e1c0d0aec0f5af51d32e8484132a37e.png') }}" alt="Logo do App 1" width="50" height="50">
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Inactivo
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Ligtht
                    <br>
                    <span class="legend-indicator bg-dark"></span>Dark
                  </td>
                  <td>
                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal"
                      data-bs-target="#editUserModal">
                      <i class="bi-pencil-fill me-1"></i> Editar
                    </button>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                      <label class="form-check-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td>3</td>
                  <td class="table-column-ps-0">Model 1</td>
                  <td><img src="{{ asset('template/assets/logo-dark.png') }}" alt="Logo do App 1" width="50" height="50"></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Activo
                  </td>
                  <td>
                    <span class="legend-indicator bg-dark"></span>Dark
                  </td>
                  <td>
                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal"
                      data-bs-target="#editUserModal">
                      <i class="bi-pencil-fill me-1"></i> Editar
                    </button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <!-- End Card -->

        <br>


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


  <!-- Edit Icon -->
  <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">Edit icon</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">

          <!-- Tab Content -->
          <div class="tab-content" id="editUserModalTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <form>
                <!-- Profile Cover -->
                <div class="profile-cover">
                  <div class="profile-cover-img-wrapper">
                    <img id="editProfileCoverImgModal" class="profile-cover-img" src="{{ asset('template/admin/assets/img/1920x400/img1.jpg') }}"
                      alt="Image Description">


                  </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar mb-5"
                  for="editAvatarUploaderModal">
                  <img id="editAvatarImgModal" class="avatar-img" src="{{ asset('template/assets/logo.png') }}" alt="Image Description">

                  <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal"
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
                  <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label form-label">Nome do ficheiro<i
                      class="tio-help-outlined text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                      title="Displayed on public forums, such as Front."></i></label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel"
                        placeholder="Nome do ficheiro" aria-label="Nome do ficheiro" value="Model 1">
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label class="col-sm-3 col-form-label form-label">Status</label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <!-- Radio Check -->
                      <label class="form-control" for="editUserModalAccountTypeModalRadio1">
                        <span class="form-check">
                          <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadio"
                            id="editUserModalAccountTypeModalRadio1" checked="">
                          <span class="form-check-label">Activo</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="editUserModalAccountTypeModalRadio2">
                        <span class="form-check">
                          <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadio"
                            id="editUserModalAccountTypeModalRadio2">
                          <span class="form-check-label">Desactivo</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4 align'items-center">
                  <label class="col-sm-3 col-form-label form-label">Modo</label>

                  <div class="col-sm-9">
                    <!-- Radio Check -->
                    <div class="form-check form-check-inline form-check-warning">
                      <input type="checkbox" id="colorfulFormInlineCheck5" class="form-check-input" checked="">
                      <label class="form-check-label" for="colorfulFormInlineCheck5">Warning</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check form-check-inline form-check-dark">
                      <input type="checkbox" id="colorfulFormInlineCheck7" class="form-check-input" checked="">
                      <label class="form-check-label" for="colorfulFormInlineCheck7">Dark</label>
                    </div>
                    <!-- End Radio Check -->
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

          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Body -->
      </div>
    </div>
  </div>
  <!-- End Edit Icon -->

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
              <img class="mb-3" src="{{asset('template/admin/assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="{{asset('template/admin/assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
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
