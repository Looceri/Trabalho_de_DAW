@extends('auth.layout.base')

@section('title', '| Login')

@section('content')


              <div class="card-body" style="text-align: left">
                    <!-- Formulário -->
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="text-center">
                            <div class="mb-5 ">
                                <h1 class="display-5">Entre</h1>
                                <p>Ainda nao tem uma conta? <a class="link" href="{{route('register')}}">Entre aqui</a></p>
                            </div>
                        </div>

                  
                      
                        <!-- Formulário -->
                        <div class="mb-4">
                            <label class="form-label" for="signupSrEmail">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail"
                                placeholder="email@endereco.com" aria-label="email@endereco.com" required=""
                                :value="old('email')" required autocomplete="username" 
                            >
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
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

                        <div class="form-check mb-4 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input" type="checkbox">
                                <label for="remember" class="ms-2">Lembrar-me</label>
                            </div>
                            <div>
                                <a class="link" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                            </div>
                        </div>
                        
                        <!-- Fim da Verificação de Formulário -->
                      

                        <div class="d-grid gap-2">
                            <x-primary-button class="ms-4 btn btn-primary">
                              Entrar
                            </x-primary-button>                        
                        </div>
                    </form>
                    <!-- Fim do Formulário -->
                </div>

@endsection
