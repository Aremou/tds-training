@extends('layouts.master-dashboard', ['title'=>'Listes des actualités'])

@section('container')

@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Formations',
'info2'=>'Liste des formations',
'info3'=>'Liste des formations'
])

<div class="row">
    <div class="col-md-12 col-sm-12">
        <a href="{{route('root_admin_create_formation')}}">
            <button class="btn mb-2 text-white" style="{{couleur()}}">Ajouter une formation</button>
        </a>
        <div class="card m-b-30">
            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title text-white">Liste des formations</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Catégorie</th>
                                <th>Réference</th>
                                <th>Niveau</th>
                                <th>Durée</th>
                                <th>Date Ajout</th>
                                <th style="width: 15%;">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($formations as $formation)
                            <tr>
                                <td><?= $formation->nom ?></td>
                                <td><?= $formation->categorie->nom ?></td>
                                <td><?= $formation->reference ?></td>
                                <td><?= $formation->niveau ?></td>
                                <td><?= $formation->duree ?></td>
                                <td><?= $formation->created_at ?></td>
                                <td>
                                    <a href="{{ route('root_admin_show_formation', $formation->id) }}">
                                        <button class="btn btn-primary btn-xm" class="d-inline-block"><i class="fa fa-eye"></i></button>
                                    </a>
                                    <a href="{{ route('root_admin_edit_formation', $formation->id) }}">
                                        <button class="btn btn-success btn-xm" class="d-inline-block"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <button class="btn btn-danger btn-xm" id="btn_formation" data-id={{ $formation->id }}><i class="fa fa-trash"></i></button>
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

@include('layouts/_modal', ["route"=>route('root_admin_delete_formation', 0), 'nom'=>'cette formation ?'])

@endsection

@section('js')

<!-- jQuery  -->
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>
<script>
    $(document).on('click', '#btn_formation', function() {
        var ID = $(this).attr('data-id');
        $('#id').val(ID);
        $('#modal_sup').modal('show');
    });

</script>

@endsection
