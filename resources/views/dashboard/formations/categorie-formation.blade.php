@extends('layouts.master-dashboard', ['title'=>'Liste des catégories des formations'])

@section('container')
@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Catégorie',
'info2'=>'Liste des catégories',
'info3'=>'Liste des catégories'
])

<br>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title d-inline-block text-white">Liste des categories </h4>
                <button class="float-right btn d-inline-block border text-white" id="btn_categorie" style="{{couleur()}}">Ajouter une categorie</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Catégorie</th>
                                <th style="width: 10%">Action(s)</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $categorie)
                            <tr>
                                <td><?= $categorie->id ?></td>
                                <td><?= $categorie->nom?></td>
                                <td>
                                    <button class="btn btn-success btn-xm" id="btn_edit_categorie" data-id="{{  $categorie->id }}" data-nom="{{  $categorie->nom }}" data-description="{{  $categorie->description }}"><i class="fa fa-edit"></i> Modifier</button>
                                    <button class="btn btn-danger btn-xm" id="btn_sup_categorie" data-id="{{  $categorie->id }}"><i class="fa fa-trash"></i> Supprimer</button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@include('dashboard.formations._modal_form_categorie', ['SubmitForm'=>'Ajouter', 'SubmitFormUpdate'=>'Modifier', 'route'=>route('categories-formations.update', 0)])
@include('layouts/_modal', ["route"=>route('categories-formations.destroy', 0), 'nom'=>'cette categorie ?'])

@endsection

@section('js')

<!-- jQuery  -->
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>

<script>
    $(document).on('click', '#btn_categorie', function() {
        var ID = $(this).attr('data-id');
        $('#id').val(ID);
        $('#modal_form_categorie').modal('show');
    });
    $(document).on('click', '#btn_edit_categorie', function() {
        var ID = $(this).attr('data-id');
        var nom = $(this).attr('data-nom');
        var description = $(this).attr('data-description');
        $('#ids').val(ID);
        $('#nom').val(nom);
        $('#description').val(description);

        $('#modal_form_categorie_edit').modal('show');
    });
    $(document).on('click', '#btn_sup_categorie', function() {
        var ID = $(this).attr('data-id');
        $('#id').val(ID);
        $('#modal_sup').modal('show');
    });

</script>
@endsection
