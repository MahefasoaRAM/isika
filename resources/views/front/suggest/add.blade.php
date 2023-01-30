@extends('app')

@section('title', 'Ajout Proposition')


@section('content')

<div class="w-75 m-auto">
    <div class="mt-5 mb-5">
        <h1 class="text-center">Soummission d'une proposition</h1>
        <form action="" method="post" class="mt-5">
            <div class="form-row mb-3">
                <div class="form-group col-md">
                    <div class="form-">
                        <label for="nom">Nom & Prénom</label>
                        <input type="text" name="nom" id="nom" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md">
                    <div class="form-">
                        <label for="contact">Contact</label>
                        <input type="text" name="contact" id="contact" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-md">
                    <div class="form-">
                        <label for="commune">Commune</label>
                        <select name="commune" id="commune" class="form-control">
                            <option value="">Sélectionner</option>
                            <option value="ankaraobato">Ankaraobato</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md">
                    <div class="form-">
                        <label for="quartier">Quartier</label>
                        <select name="quartier" id="quartier" class="form-control">
                            <option value="">Sélectionner</option>
                            <option value="ankaraobato">Ankaraobato</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="titre">Titre de la proposition</label>
                <input type="text" name="titre" id="titre" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description de la proposition</label>
                <textarea name="description" id="description" rows="10" class="form-control"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-isikar text-capitalize font-weight-bold">soumettre</button>
            </div>
        </form>
    </div>
</div>


@section('script')

<script>
    tinymce.init({
        selector:'textarea',
        plugins: 'code table lists emoticons image',automatic_uploads: true,
        toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | emoticons'
    })
</script>

@stop

@endsection
