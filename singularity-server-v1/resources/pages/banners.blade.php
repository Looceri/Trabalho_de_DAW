@extends('admin.layout.base')

@section('title', '| Banner')

@section('content')

    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col">
              <h1 class="page-header-title">Banners</h1>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <a class="btn btn-primary" href="{{ route('banner-add') }}">
                <i class="bi-person-plus-fill me-1"></i> Adicionar Banner
              </a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->



        <!-- Card -->
        <div class="card">
          <!-- Header -->
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
                   "pageLength": 15,
                   "isResponsive": ,
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
                  <th class="table-column-ps-0">Título</th>
                  <th>Link</th>
                  <th>Contacto</th>
                  <th>Imagem</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>


                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck4">
                      <label class="form-check-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <td>1</td>
                  <td class="table-column-ps-0">Banner 3</td>
                  <td style="color: #377dff;">https://wallpaperaccess.com/full/1155149.jpg</td>
                  <td>+258 84 123 456 789</td>
                  <td><img src="{{ asset('template/admin/assets/1155149.jpg') }}" alt="Banner 1" width="100" height="50"></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Activo
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
                  <td class="table-column-ps-0">Banner 2</td>
                  <td style="color: #377dff;">https://www.vecteezy.com/vector-art/664751-abstract-low-poly-banner-design
                  </td>
                  <td>+258 82 987 654 321</td>
                  <td><img src="{{ asset('template/admin/assets/R (7).jpg') }}" alt="Banner 2" width="100" height="50"></td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Inactivo
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
                  <td>1</td>
                  <td class="table-column-ps-0">Banner 1</td>
                  <td style="color: #377dff;">https://cdn.pixabay.com/photo/2016/07/30/19/47/banner-1557845_640.jpg</td>
                  <td>+258 85 111 222 333</td>
                  <td><img src="{{ asset('template/admin/assets/banner-1557845_640.jpg') }}" alt="Banner 3" width="100" height="50"></td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Inactivo
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

  <!-- Edit Banner -->
  <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Editar banner</h5>
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
                                        src="{{ asset('template/admin/assets/img/1920x400/img1.jpg') }}" alt="Image Description">

                                    <!-- Custom File Cover -->
                                    <div class="profile-cover-content profile-cover-uploader p-3">
                                        <input type="file" class="js-file-attach profile-cover-uploader-input"
                                            id="editProfileCoverUplaoderModal" data-hs-file-attach-options='{
                              "textTarget": "#editProfileCoverImgModal",
                              "mode": "image",
                              "targetAttr": "src",
                              "allowTypes": [".png", ".jpeg", ".jpg"]
                           }'>
                                        <label class="profile-cover-uploader-label btn btn-sm btn-white"
                                            for="editProfileCoverUplaoderModal">
                                            <i class="bi-camera-fill"></i>
                                            <span class="d-none d-sm-inline-block ms-1">Upload do banner</span>
                                        </label>
                                    </div>
                                    <!-- End Custom File Cover -->
                                </div>
                            </div>
                            <!-- End Profile Cover -->

                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Titulo<i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="O nome do banner."></i></label>

                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm-vertical">
                                        <input type="text" class="form-control" name="firstName" id="firstNameLabel"
                                            placeholder="Titulo" aria-label="Titulo">

                                    </div>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Link</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="emailLabel"
                                        placeholder="https://dominio" aria-label="https://dominio">
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="js-add-field row mb-4" data-hs-add-field-options='{
              "template": "#addPhoneFieldTemplate",
              "container": "#addPhoneFieldContainer",
              "defaultCreated": 0
            }'>
                                <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Contacto do dono
                                    <span class="form-label-secondary">(+258)</span></label>

                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm-vertical">
                                        <input type="text" class="js-input-mask form-control" name="phone"
                                            id="phoneLabel" placeholder="xx xx-xx-xxx" aria-label="xx xx-xx-xxx"
                                            data-hs-mask-options='{
                     "mask": "00 00-00-000"
                   }'>

                                        <!-- Select -->
                                        <div class="tom-select-custom tom-select-custom-end">
                                            <select class="js-select form-select" autocomplete="off"
                                                data-hs-tom-select-options='{
                        "searchInDropdown": false,
                        "hideSearch": true,
                        "dropdownWidth": "8rem"
                      }'>
                                                <option value="Mobile" selected="">Mobile</option>
                                                <option value="Home">Casa</option>
                                                <option value="Work">Trabalho</option>
                                                <option value="Fax">Fax</option>
                                                <option value="Direct">Direct</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
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

                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Edit Banner -->

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
          <img class="mb-3" src="{{ asset('template/admin/assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
          <img class="mb-3" src="{{ asset('template/admin/assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
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
