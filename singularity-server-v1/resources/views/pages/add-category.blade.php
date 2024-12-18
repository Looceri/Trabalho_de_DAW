@extends('layout.base')

@section('title', '|publicar ')

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
<!-- Alerta de Sucesso -->
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

    <!-- Content -->
    <div class="content container-fluid">
        

        <div class="row">
            <div>
                
                 

                    <!-- End Navbar Collapse -->
                {{-- </div> --}}
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
                    <!-- End Avatar -->

                    <!-- Body -->

                    <!-- End Body -->

                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card" id="basicSection">
                        <div class="card-header">
                            <h2 class="card-title h4">Criar Categoria</h2>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form -->
                            <form  action="{{ isset($category) ? route('update-category', $category->id) : route('add-category') }}" method="POST">
                                @csrf
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Nome<i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Displayed on public forums, such as Front."></i></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <input type="text" class="form-control" name="name" id="title"
                                                placeholder="Digite o nome da categoria" 
                                                value="{{ old('name', $category->name ?? '') }}">
                                                >
                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->

                               
                           

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Descricao </label>

                                    <div class="col-sm-9">
                                        <textarea name="description" id="" cols="30" rows="10"
                                         style="width: 100%; height: 150px;" class="form-control"
                                          placeholder="Descreva a categoria">{{ old('description', $category->description ?? '') }}</textarea>
                                    </div>
                                </div>
                                <!-- End Form -->
                              


                              

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Body -->
                    </div>
              <!-- Alerta de Sucesso -->
 
                          

          
                
                    <!-- End Card -->

                    <!-- Card -->
                    {{-- <div id="emailSection" class="card" style=" display: none;">
                        <div class="card-header">
                            <h4 class="card-title">Email</h4>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <p>Seu Email actual é <span class="fw-semibold">mark@site.com</span></p>

                            <!-- Form -->
                            <form>
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Novo
                                        Email</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="newEmail" id="newEmailLabel"
                                            placeholder="Insira o seu Email" aria-label="Enter new email address">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Body -->
                    </div> --}}
                    <!-- End Card -->

                    <!-- Card -->
                    {{-- <div id="passwordSection" class="card" style=" display: none;">
                        <div class="card-header">
                            <h4 class="card-title">Actualize sua Senha</h4>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form -->
                            <form id="changePasswordForm">
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"> Senha
                                        Actual</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="currentPassword"
                                            id="currentPasswordLabel" placeholder="Insira a sua senha actual"
                                            aria-label="Enter current password">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="newPassword" class="col-sm-3 col-form-label form-label">Nova Senha</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="newPassword" id="newPassword"
                                            placeholder="Insira sua nova senha" aria-label="Enter new password">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="confirmNewPasswordLabel"
                                        class="col-sm-3 col-form-label form-label">Confirme a nova
                                        senha</label>

                                    <div class="col-sm-9">
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="confirmNewPassword"
                                                id="confirmNewPasswordLabel" placeholder="Confirme sua nova senha"
                                                aria-label="Confirm your new password">
                                        </div>
                                        <!--
                            <h5>Password requirements:</h5>

                            <p class="fs-6 mb-2">Ensure that these requirements are met:</p>

                            <ul class="fs-6">
                              <li>Minimum 8 characters long - the more, the better</li>
                              <li>At least one lowercase character</li>
                              <li>At least one uppercase character</li>
                              <li>At least one number, symbol, or whitespace character</li>
                            </ul> -->
                                    </div>
                                </div>
                                <!-- End Form -->

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Body -->
                    </div> --}}
                    <!-- End Card -->






                    <!-- Card -->
                    {{-- <div id="deleteAccountSection" class="card" style=" display: none;">
                        <div class="card-header">
                            <h4 class="card-title">Eliminar sua conta</h4>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <p class="card-text">Quando você exclui sua conta, você perde o acesso aos serviços da conta
                                Moz+, e nós
                                excluímos permanentemente seus dados pessoais. Você pode cancelar a exclusão em até 14 dias
                            </p>

                            <div class="mb-4">
                                <!-- Form Check -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="deleteAccountCheckbox">
                                    <label class="form-check-label" for="deleteAccountCheckbox">
                                        Confirmo que quero excluir minha conta.
                                    </label>
                                </div>
                                <!-- End Form Check -->
                            </div>

                            <div class="d-flex justify-content-end gap-3">
                                <a class="btn btn-white" href="#">Saiba mais</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>
                        <!-- End Body -->
                    </div> --}}
                    <!-- End Card -->
                </div>

                <!-- Sticky Block End Point -->
                {{-- <div id="stickyBlockEndPoint"></div> --}}
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

{{-- @section('js')

    <!-- Style Switcher JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mapeamento dos links de navegação para as seções correspondentes
            const sections = {
                '#content': 'basicSection',
                '#emailSection': 'emailSection',
                '#passwordSection': 'passwordSection',
                '#deleteAccountSection': 'deleteAccountSection'
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

            // Adiciona um ouvinte de eventos para cada link na barra de navegação
            document.querySelectorAll('#navbarSettings .nav-link').forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Previne o comportamento padrão do link
                    const sectionId = sections[this.getAttribute(
                    'href')]; // Pega o ID da seção correspondente
                    if (sectionId) {
                        showSection(sectionId); // Exibe a seção correspondente
                    }
                });
            });

            // Inicialmente, oculta todas as seções e mostra apenas a primeira
            hideAllSections();
            showSection('basicSection'); // Exibe a seção de Informações Pessoais como padrão
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
@endsection --}}
