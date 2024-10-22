@extends('auth.layout.base')

@section('title', '| Login')

@section('content')


              <div class="card-body" style="text-align: left">
                    <!-- Formulário -->
                    <form method="POST" action="{{ route('password.email') }}" >
                        @csrf
                        <div class="text-center">
                            <div class="mb-5 ">
                                <h1 class="display-5">Esqueceu sua Senha?</h1>
                                <p>Digite o endereço de e-mail que você usou ao se inscrever e enviaremos instruções para redefinir sua senha..</p>
                            </div>
                        </div>

                  
                       
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
                       

                        

                        <div class="d-grid gap-2">
                            <x-primary-button class="ms-4 btn btn-primary">
                                Enviar Link de Redefinição de Senha
                            </x-primary-button> 
                            <div class="text-center">
                                <a class="btn btn-link" href="{{route('login')}}">
                                    <i class="bi-chevron-left"></i> Voltar para o Login
                                </a>
                            </div>
                        </div>
                    </form>
                    <!-- Fim do Formulário -->
                </div>

@endsection
