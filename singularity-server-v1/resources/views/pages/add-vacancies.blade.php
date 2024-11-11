@extends('layout.base')

@section('title', '| Adicionar Vagas')

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

    <!-- Content -->
    <div class="content container-fluid">
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

        <div class="row">


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



                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card" id="basicSection">
                        <div class="card-header">
                            <h2 class="card-title h4">Publicar Anuncio de vagas</h2>
                        </div>
                        <form action="{{ isset($vacancy) ? route('edit-vacancy', $vacancy->id) : route('add-vacancy') }}" method="POST">
                            @csrf
                            @if (isset($vacancy))
                                @method('PUT')  <!-- Para indicar que é uma atualização -->
                            @endif

                            <!-- Body -->
                            <div class="card-body" id="card-1">
                                <!-- Form 1 -->
                                <div class="row mb-4">
                                    <label for="title" class="col-sm-3 col-form-label form-label">Titulo<i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Displayed on public forums, such as Front."></i></label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <input type="text" class="form-control" name="title" id="title"
                                                   placeholder="Digite o titulo do anuncio"
                                                   value="{{ old('title', $vacancy->title ?? '') }}">
                                        </div>
                                    </div>
                                </div>
                                <!-- Categories Form -->
                                <div class="row mb-4">
                                    <label for="categories" class="col-sm-3 col-form-label form-label">Selecione Categorias:</label>
                                    <div class="col-sm-9">
                                        <select id="categories" name="categories[]" multiple class="form-control">
                                            @if($categories->count() > 0 )
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"
                                                    @if(isset($vacancy) && $vacancy->categories->contains($category->id)) selected @endif>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <!-- Start Date Form -->
                                <div class="row mb-4">
                                    <label for="submission_start_date" class="col-sm-3 col-form-label form-label">Data de início de submissão</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="submission_start_date"
                                               value="{{ old('submission_start_date', $vacancy->submission_start_date ?? '') }}">
                                    </div>
                                </div>
                                <!-- End Date Form -->
                                <div class="row mb-4">
                                    <label for="submission_end_date" class="col-sm-3 col-form-label form-label">Data fim de submissão</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="submission_end_date"
                                               value="{{ old('submission_end_date', $vacancy->submission_end_date ?? '') }}">
                                    </div>
                                </div>
                                <!-- Quantity of Vacancies Form -->
                                <div class="row mb-4">
                                    <label for="vacancy_quantity" class="col-sm-3 col-form-label form-label">Quantidade de vagas</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="vacancies_count"
                                               placeholder="Digite a quantidade total de vagas existentes"
                                               value="{{ old('vacancies_count', $vacancy->vacancies_count ?? '') }}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="salary" class="col-sm-3 col-form-label form-label">Salário</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="salary"
                                               placeholder="Digite o salario"
                                               value="{{ old('salary', $vacancy->salary ?? '') }}">
                                    </div>
                                </div>
                                <!-- Description Form -->
                                <div class="row mb-4">
                                    <label for="description" class="col-sm-3 col-form-label form-label">Descrição</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                                                  placeholder="Descreva o objetivo da vaga e os profissionais que busca">{{ old('description', $vacancy->description ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" onclick="showNextCard(2)">Próximo</button>
                                </div>
                            </div>
                            <div class="card-body" id="card-2" style="display: none;">
                                <div class="row mb-4">
                                    <label for="campo_dinamico_2" class="col-sm-3 col-form-label form-label">Requisitos</label>
                                    <div class="col-sm-9" id="dynamic-fields-2">
                                        @forelse($vacancy->requirements ?? [] as $requirement)
                                            <input type="text" class="form-control mb-2" name="requirements[]" placeholder="Digite algo" value="{{ $requirement->requirement }}">
                                        @empty
                                            <!-- Adiciona um campo vazio caso não haja requisitos -->
                                            <input type="text" class="form-control mb-2" name="requirements[]" placeholder="Digite algo">
                                        @endforelse
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <button type="button" class="btn btn-secondary" onclick="addField(2)">+</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" onclick="showPreviousCard(1)">Voltar</button>
                                    <button type="button" class="btn btn-primary" onclick="showNextCard(3)">Próximo</button>
                                </div>
                            </div>

                            <div class="card-body" id="card-3" style="display: none;">
                                <div class="row mb-4">
                                    <label for="campo_dinamico_3" class="col-sm-3 col-form-label form-label">Benefícios</label>
                                    <div class="col-sm-9" id="dynamic-fields-3">
                                        @forelse($vacancy->benefits ?? [] as $benefit)
                                            <input type="text" class="form-control mb-2" name="benefits[]" placeholder="Digite algo" value="{{ $benefit->benefit }}">
                                        @empty
                                            <!-- Adiciona um campo vazio caso não haja benefícios -->
                                            <input type="text" class="form-control mb-2" name="benefits[]" placeholder="Digite algo">
                                        @endforelse
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <button type="button" class="btn btn-secondary" onclick="addField(3)">+</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" onclick="showPreviousCard(2)">Voltar</button>
                                    <button type="submit" class="btn btn-primary">Finalizar</button>
                                </div>
                            </div>



                        </form>

                        <!-- End Body -->
                    </div>
                    <!-- End Card -->


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

 @section('js')

    <!-- Style Switcher JS -->
    <script>
function showNextCard(cardNumber) {
    // Hide all cards
    let cards = document.querySelectorAll('.card-body');
    cards.forEach(card => {
        card.style.display = 'none';
    });

    // Show the selected card
    let nextCard = document.getElementById(`card-${cardNumber}`);
    nextCard.style.display = 'block';
}

function showPreviousCard(cardNumber) {
    // Hide all cards
    let cards = document.querySelectorAll('.card-body');
    cards.forEach(card => {
        card.style.display = 'none';
    });

    // Show the selected previous card
    let previousCard = document.getElementById(`card-${cardNumber}`);
    previousCard.style.display = 'block';
}

function addField(cardNumber) {
    let dynamicFields;
    let inputName;

    if (cardNumber === 2) {
        // Add field to requirements
        dynamicFields = document.getElementById('dynamic-fields-2');
        inputName = 'requirements[]';
    } else if (cardNumber === 3) {
        // Add field to benefits
        dynamicFields = document.getElementById('dynamic-fields-3');
        inputName = 'benefits[]';
    }

    // Create new input field
    let newField = document.createElement('input');
    newField.type = 'text';
    newField.className = 'form-control mb-2';
    newField.name = inputName;  // Set the correct name for the field
    newField.placeholder = 'Digite algo';

    // Append the new field to the corresponding dynamic fields container
    dynamicFields.appendChild(newField);
}

function submitForm() {
    // Submit form logic here, currently doesn't submit but could trigger validation
    alert('Formulário Finalizado');
}

    </script>

@endsection
