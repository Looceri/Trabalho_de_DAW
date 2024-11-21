@php
    $posts = Auth::user()->posts;
@endphp

@extends('layout.base')

@section('title', '| Gerenciar Posts')

@section('content')

<style>
    .card-header {
        font-weight: bold;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-footer {
        background-color: #f8f9fa;
        text-align: right;
    }

    .dropdown-item {
        cursor: pointer;
    }
</style>

<!-- Alerta de Sucesso -->
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" id="close-alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session('success') }}
    </div>
@endif

<!-- Alerta de Erro de Validação -->
@if($errors->any())
    <div class="alert alert-danger" id="close-alert">
        <button type="button" class="close" id="close-alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Cards de Posts -->
<div class="container mt-5">
<div class="row">
    @if($posts->count() ==0)
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center">
            <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Imagem de erro" style="width: 10rem;" data-hs-theme-appearance="default">
            <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Imagem de erro" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">Nenhuma publicação encontrada</p>
        </div>
    </div>
    @endif
    @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card" style="max-width: 18rem;"> <!-- Card com largura limitada -->
                @if($post->url_image)
                    <!-- Imagem do Post que abre o Modal -->
                    <img src="{{ asset('storage/'.$post->url_image) }}" class="card-img-top img-fluid" alt="Imagem do Post" data-bs-toggle="modal" data-bs-target="#imageModal{{ $post->id }}" style="max-height: 180px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1.1rem;">{{ $post->title }}</h5> <!-- Título um pouco menor -->
                    <p class="card-text" style="font-size: 0.9rem;">{{ Str::limit($post->description, 100) }}</p> <!-- Descrição um pouco menor -->
                </div>
                <div class="card-footer">
                    <div class="dropdown">

                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('edit-post', $post->id) }}">Editar</a></li>
                            <li>
                                <form action="{{ route('deactivate-post', $post->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja Apagar este post?');">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Apagar</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    @endforeach
</div>
</div>
<!-- Modal de Exibição da Imagem -->
@foreach($posts as $post)
<div class="modal fade" id="imageModal{{ $post->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $post->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- modal-lg para aumentar o modal -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imageModalLabel{{ $post->id }}">{{ $post->title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Imagem em tamanho maior -->
          <img src="{{ asset('storage/'.$post->url_image) }}" class="img-fluid" alt="Imagem do Post" style="max-height: 80vh; object-fit: contain; width: 100%;" />

          <!-- Descrição do Post -->
          <p class="mt-3" style="font-size: 1rem; color: #555;">{{ $post->description }}</p>
        </div>
      </div>
    </div>
  </div>
@endforeach


<!-- Paginacao se necessário -->
<div class="d-flex justify-content-center">
    {{-- {{ $posts->links() }} --}}
</div>


@endsection
