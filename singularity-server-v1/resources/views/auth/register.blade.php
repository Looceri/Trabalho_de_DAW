@extends('auth.layout.base')

@section('title', '| Login')

@section('content')


              <div class="card-body" style="text-align: left">
                    <!-- Formulário -->
                    <form method="POST" action="{{ route('register_week') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            <div class="mb-5 ">
                                <h1 class="display-5">Crie sua conta</h1>
                                <p>Já tem uma conta? <a class="link" href="{{route('login')}}">Entre aqui</a></p>
                            </div>
                        </div>

                  
                        <!-- Formulário -->
                        <div class="mb-4">
                            <label class="form-label" for="signupSrEmail">Nome da Instituicao</label>
                            <input type="text" class="form-control form-control-lg" name="name" id="signupSrEmail"
                                placeholder="Nome"  required=""
                                :value="old('name')" required autofocus autocomplete="name" 
                            >
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        </div>
                        <!-- Fim do Formulário -->
                        <!-- Formulário -->
                        <div class="mb-4">
                            <label class="form-label" for="signupSrEmail">Seu email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail"
                                placeholder="email@endereco.com" aria-label="email@endereco.com" required=""
                                :value="old('email')" required autocomplete="username" 
                            >
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        <!-- Fim do Formulário -->
                         <!-- Formulário -->
                         {{-- <div class="mb-4">
                            <label class="form-label" for="signupSrEmail">Alvara Da Instituicao</label>
                            <input type="file" class="form-control form-control-lg" name="alvara" id="signupSrEmail"
                                placeholder="email@endereco.com" aria-label="email@endereco.com" required=""
                                :value="old('alvara')" required autocomplete="username" 
                            >
                            <x-input-error :messages="$errors->get('alvara')" class="mt-2" />
                            </div> --}}
                        <!-- Fim do Formulário -->

                        <!-- Formulário -->
                        <div class="mb-4">
                            <label class="form-label" for="signupSrPassword">Senha</label>

                            <div class="input-group input-group-merge" data-hs-validation-validate-class="">
                                <input type="password" class="js-toggle-password form-control form-control-lg"
                                    name="password" id="signupSrPassword" placeholder="Requerido mínimo de 8 caracteres"
                                    required autocomplete="new-password" 
                                    aria-label="Requerido mínimo de 8 caracteres" required="" minlength="8"
                                    data-hs-toggle-password-options='{
                         "target": [".js-toggle-password-target-1"],
                         "defaultClass": "bi-eye-slash",
                         "showClass": "bi-eye",
                         "classChangeTarget": ".js-toggle-password-show-icon-1"
                       }'>

                            </div>

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        <!-- Fim do Formulário -->

                        <!-- Formulário -->
                        <div class="mb-4">
                            <label class="form-label" for="signupSrConfirmPassword">Confirme sua senha</label>

                            <div class="input-group input-group-merge" data-hs-validation-validate-class="">
                                <input type="password" class="js-toggle-password form-control form-control-lg"
                                    name="password_confirmation" id="signupSrConfirmPassword"
                                    placeholder="Requerido mínimo de 8 caracteres"
                                    aria-label="Requerido mínimo de 8 caracteres" required="" minlength="8"
                                    data-hs-toggle-password-options='{
                     "target": [" .js-toggle-password-target-2"],
                     "defaultClass": "bi-eye-slash",
                     "showClass": "bi-eye",
                     "classChangeTarget": ".js-toggle-password-show-icon-2"
                   }'>
                  
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        <!-- Fim do Formulário -->

                        <div class="d-grid gap-2">
                            <x-primary-button class="ms-4 btn btn-primary">
                                {{ __('Register') }}
                            </x-primary-button>                        </div>
                    </form>
                    <!-- Fim do Formulário -->
                </div>

@endsection
