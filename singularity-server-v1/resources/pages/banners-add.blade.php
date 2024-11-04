@extends('admin.layout.base')

@section('title', '| Adicionar Banner')

@section('content')

    <!-- Content -->
    <div class="content container-fluid">
        <!-- Step Form -->
        <form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
              }'>
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <!-- Step -->
              <ul id="addUserStepFormProgress"
                class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                      "targetSelector": "#addUserStepProfile"
                    }'>
                    <span class="step-icon step-icon-soft-dark">1</span>
                    <div class="step-content">
                      <span class="step-title">Banner</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                      "targetSelector": "#addUserStepConfirmation"
                    }'>
                    <span class="step-icon step-icon-soft-dark">2</span>
                    <div class="step-content">
                      <span class="step-title">Confirmação</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End Step -->

              <!-- Content Step Form -->
              <div id="addUserStepFormContent">
                <!-- Card -->
                <div id="addUserStepProfile" class="card card-lg active">
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form -->
                    <div class="row mb-4">
                      <label class="col-sm-3 col-form-label form-label">Banner</label>

                      <div class="col-sm-9">
                          <div class="profile-cover">
                              <div class="profile-cover-img-wrapper">
                                <img id="editProfileCoverImgModal" class="profile-cover-img" src="{{ asset('template/admin/assets/img/1920x400/img1.jpg') }}"
                                  alt="Image Description">

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
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Titulo<i
                          class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="O nome do banner."></i></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Titulo"
                            aria-label="Titulo">

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
                      <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Contacto do dono <span
                          class="form-label-secondary">(+258)</span></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel"
                            placeholder="xx xx-xx-xxx" aria-label="xx xx-xx-xxx" data-hs-mask-options='{
                                   "mask": "00 00-00-000"
                                 }'>

                          <!-- Select -->
                          <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
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

                        <!-- Container For Input Field -->
                        <div id="addPhoneFieldContainer"></div>

                        <a class="js-create-field form-link" href="javascript:;">
                          <i class="bi-plus"></i> Adicionar telemovel
                        </a>
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- Add Phone Input Field -->
                    <div id="addAddressFieldTemplate" style="display: none;">
                      <div class="input-group-add-field">
                        <input type="text" class="form-control" data-name="addressLine" placeholder="Your address"
                          aria-label="Your address">

                        <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                          <i class="bi-x-lg"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Add Phone Input Field -->

                    <!-- Add Phone Input Field -->
                    <div id="addPhoneFieldTemplate" class="input-group-add-field" style="display: none;">
                      <div class="input-group input-group-sm-vertical align-items-center">
                        <input type="text" class="js-input-mask form-control" data-name="additionlPhone"
                          placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                 "mask": "+0(000)000-00-00"
                               }'>

                        <div class="input-group-append">
                          <!-- Select -->
                          <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select-dynamic form-select" autocomplete="off" data-name="phoneSelect"
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

                      <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                        <i class="bi-x-lg"></i>
                      </a>
                    </div>
                    <!-- End Add Phone Input Field -->


                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#addUserStepConfirmation"
                            }'>
                      Next <i class="bi-chevron-right"></i>
                    </button>
                  </div>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->

                <div id="addUserStepConfirmation" class="card card-lg" style="display: none;">
                  <!-- Profile Cover -->
                  <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                      <img class="profile-cover-img" src="{{ asset('template/admin/assets/img/1920x400/img1.jpg') }}" alt="Image Description">
                    </div>
                  </div>
                  <!-- End Profile Cover -->


                  <!-- Body -->
                  <div class="card-body">
                    <dl class="row">
                      <dt class="col-sm-6 text-sm-end">Titulo:</dt>
                      <dd class="col-sm-6">Banner xx</dd>

                      <dt class="col-sm-6 text-sm-end">Link:</dt>
                      <dd class="col-sm-6">https://banner.com</dd>

                      <dt class="col-sm-6 text-sm-end">Contacto do dono:</dt>
                      <dd class="col-sm-6">+258 84 97-22-222</dd>

                    </dl>
                    <!-- End Row -->
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <div class="card-footer d-sm-flex align-items-sm-center">
                    <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0" data-hs-step-form-prev-options='{
                         "targetSelector": "#addUserStepProfile"
                       }'>
                      <i class="bi-chevron-left"></i> Passo anterior
                    </button>

                    <div class="ms-auto">
                      <button type="button" class="btn btn-white me-2">Salvar em rascunhos</button>
                      <button id="addUserFinishBtn" type="button" class="btn btn-primary">Adicionar banner</button>
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>
              </div>
              <!-- End Content Step Form -->

              <!-- Message Body -->
              <div id="successMessageContent" style="display:none;">
                <div class="text-center">
                  <img class="img-fluid mb-3" src="{{ asset('template/admin/assets/svg/illustrations/oc-hi-five.svg') }}" alt="Image Description"
                    data-hs-theme-appearance="default" style="max-width: 15rem;">
                  <img class="img-fluid mb-3" src="{{ asset('template/admin/assets/svg/illustrations-light/oc-hi-five.svg') }}" alt="Image Description"
                    data-hs-theme-appearance="dark" style="max-width: 15rem;">

                    <div class="mb-4">
                      <h2>Sucesso!</h2>
                      <p>O novo banner <span class="fw-semibold text-dark">Banner xx</span> foi criado com sucesso.</p>
                    </div>

                  <div class="d-flex justify-content-center">
                    <a class="btn btn-white me-3" href="settings-app_banners.html">
                      <i class="bi-chevron-left ms-1"></i> Volte para os banners
                    </a>
                    <a class="btn btn-primary" href="settings-app_banner-add.html">
                      <i class="bi-person-plus-fill me-1"></i> Adicionar novo banner
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Message Body -->
            </div>
          </div>
          <!-- End Row -->
        </form>
        <!-- End Step Form -->
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
