@extends('admin.layout.base')

@section('title', '| Adicionar User')

@section('content')



    <!-- Content -->
    <div class="content container-fluid card mt-5 ml-5">
        <!-- Step Form -->
        <form method="POST" action="{{ route('register_week') }}">

            @csrf

            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                   <h3 class="text_center">Crie sua semana laboral</h3>
                    <!-- Body -->
                    <div class="card-body">
                        <!-- Inputs -->
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label form-label" for="name">Data inicio</label>

                            <div class="col-sm-9">
                                <div class="input-group input-group-sm-vertical">
                                    <input
                                        type="date"
                                        class="form-control w-100 @error('start_date') is-invalid @enderror"
                                        
                                        name="start_date" value="{{ old('start_date') }}"
                                        required
                                        autocomplete="start_date"
                                        autofocus
                                    >
                                    <x-input-error :messages="$errors->get('start_date')" class="mt-2" />

                                </div>
                            </div>
                        </div>
                        <!-- End Inputs -->
                             <!-- Inputs -->
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label form-label" for="name">Data fim</label>

                            <div class="col-sm-9">
                                <div class="input-group input-group-sm-vertical">
                                    <input
                                        type="date"
                                        class="form-control w-100 @error('end_date') is-invalid @enderror"
                                        id="end_date"
                                        name="end_date" value="{{ old('end_date') }}"
                                        required
                                        autocomplete="end_date"
                                        autofocus
                                    >
                                    <x-input-error :messages="$errors->get('end_date')" class="mt-2" />

                                </div>
                            </div>
                        </div>
                        <!-- End Inputs -->
                      

                       

               

                        <div class="">

                            <button type="submit" class="btn btn-primary" style="float:right;">
                                Adicionar semana
                            </button>

                        </div>

                    </div>
                    <!-- End Body -->

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
            document.getElementById("addUserStepBillingAddress").style.display = 'none'
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
