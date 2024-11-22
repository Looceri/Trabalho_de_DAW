@php
    $user = Auth::user();
@endphp

@extends('layout.base')

@section('title', '|Adicionar Categoria')

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
    @if (session('success'))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" id="close-alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> <!-- Ícone de fechamento -->
            </button>
            {{ session('success') }}
        </div>
    @endif

    <!-- Alerta de Erro de Validação -->
    @if ($errors->any())
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
                                <img id="profileCoverImg" class="profile-cover-img"
                                    src="{{ asset('assets/img/1920x400/img2.jpg') }}" alt="Image Description">

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
                            <h2 class="card-title h4">Criar uma Publicacao</h2>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form -->
                            <form action="{{ isset($post) ? route('update-post', $post->id) : route('store-post') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Título Field -->
                                <div class="row mb-4">
                                    <label for="title" class="col-sm-3 col-form-label form-label">Título</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Digite o título do post"
                                            value="{{ old('title', $post->title ?? '') }}">
                                    </div>
                                </div>

                                <!-- Descrição Field -->
                                <div class="row mb-4">
                                    <label for="description" class="col-sm-3 col-form-label form-label">Descrição</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Descreva o post">{{ old('description', $post->description ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Imagem Field -->
                                <div class="row mb-4">
                                    <label for="url_image" class="col-sm-3 col-form-label form-label">Imagem</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="url_image" id="url_image"
                                            accept="image/*">
                                        @if (isset($post) && $post->url_image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $post->url_image) }}" alt="Imagem do Post"
                                                    style="max-width: 150px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary">{{ isset($post) ? 'Atualizar' : 'Cadastrar' }} Post</button>
                                </div>
                            </form>
                        </div>

                        <!-- End Body -->
                    </div>



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
                        class="d-none d-sm-inline-block nav-link d-inline fw-normal p-0 ms-1" href="#" target="_blank"
                        rel="noopener" style="color: #377dff;">Singularity Inc.</a></p>
            </div>
        </div>
    </div>

@endsection
