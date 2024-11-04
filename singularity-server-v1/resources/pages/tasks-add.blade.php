﻿@extends('admin.layout.base')

@section('title', '| Adicionar User')

@section('content')



    <!-- Content -->
    <div class="content container-fluid card mt-5 ml-5">
        <!-- Step Form -->
        <form method="POST" action="{{ route('register') }}">

            @csrf

            <div class="row justify-content-lg-center">
                <div class="col-lg-8">

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Inputs -->
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label form-label" for="name">Nome do funcionario</label>

                            <div class="col-sm-9">
                                <div class="input-group input-group-sm-vertical">
                                    <input
                                        type="text"
                                        class="form-control w-100 @error('name') is-invalid @enderror"
                                        id="name"
                                        value="{{$user->name}}"
                                        name="name" 
                                        required
                                        autocomplete="name"
                                        autofocus
                                    >
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                            </div>
                        </div>
                        <!-- End Inputs -->
                             <!-- Inputs -->
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label form-label" for="name">Semana Laboral</label>

                            <div class="col-sm-9">
                                <div class="input-group input-group-sm-vertical">
                                    <input
                                        type="text"
                                        class="form-control w-100 @error('cargo') is-invalid @enderror"
                                        value="{{ $week->start_date }} a {{ $week->end_date }}"
                                        name="week" 
                                        required
                                        autocomplete="name"
                                        autofocus
                                    >
                                    <x-input-error :messages="$errors->get('cargo')" class="mt-2" />

                                </div>
                            </div>
                        </div>
                        <!-- End Inputs -->
                        <!-- Form -->
                      <div class="card mb-5">
                          <br>
                          <form action="" method="post">
                             <h3>Adicione quantas tarefas for desejar</h3>
                          
                            <div class="row mb-4">
                            <label for="description" class="col-sm-3 col-form-label form-label">Tarefa 1</label>

                            <div class="col-sm-9">
                                <input
                                    id="description"
                                    type="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    name="description"
                                    value=""
                                    required
                                   
                                >
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                              
                            </div>

                            </div>
                            <button type="submit" class="btn btn-primary mt-5 mb-5 text-right" style=" width:100px">
                              Proxima
                            </button>
                         </form>
                    </div>
                        
                        
                        <!-- End Inputs -->

                        <div class="">

                            <button type="submit" class="btn btn-primary" style="float:right;">
                                Adicionar utilizador
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
