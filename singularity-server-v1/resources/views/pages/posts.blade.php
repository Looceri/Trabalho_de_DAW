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
<div class="row">
    @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($post->url_image)
                    <img src="{{ asset('storage/'.$post->url_image) }}" class="card-img-top" alt="Imagem do Post">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->description, 100) }}</p>
                </div>
                <div class="card-footer">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                           ...
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('edit-post', $post->id) }}">Editar</a></li>
                            <li>
                                <form action="{{ route('deactivate-post', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Você tem certeza que deseja excluir este post?')">Excluir</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Paginacao se necessário -->
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection
