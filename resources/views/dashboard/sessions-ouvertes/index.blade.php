@extends('layouts.master-dashboard', ['title'=>'Listes des sessions ouvertes'])

@section('container')

@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Sessions Ouvertes',
'info2'=>'Liste des sessions ouvertes',
'info3'=>'Liste des sessions ouvertes'
])

<div class="row">
    <div class="col-md-12 col-sm-12">
        <a href="{{route('root_admin_create_session_ouverte')}}">
            <button class="btn mb-2 text-white" style="{{couleur()}}">Ajouter une session</button>
        </a>
        <div class="card m-b-30">
            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title text-white">Liste des sessions en cours</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Formation</th>
                                <th>Type formation</th>
                                <th>Montant</th>
                                <th>Date début</th>
                                <th>Date fin</th>
                                <th>Date de création</th>
                                <th style="width: 15%;">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($session_ouvertes_en_cours as $session_ouverte_en_cours)
                            <tr>
                                <td><?= $session_ouverte_en_cours->formation->nom ?></td>
                                <td><?= $session_ouverte_en_cours->type_formation ?></td>
                                <td><?= number_format($session_ouverte_en_cours->montant, '0', '.', ' ') ?></td>
                                <td><?= $session_ouverte_en_cours->date_debut ?></td>
                                <td><?= $session_ouverte_en_cours->date_fin ?></td>
                                <td><?= $session_ouverte_en_cours->created_at ?></td>
                                <td>
                                    <a href="{{ route('root_admin_inscrit_session_ouverte', $session_ouverte_en_cours->id) }}">
                                        <button class="btn btn-secondary btn-xm" class="d-inline-block"><i class="fa fa-user"></i></button>
                                    </a>
                                    <a href="{{ route('root_admin_show_session_ouverte', $session_ouverte_en_cours->id) }}">
                                        <button class="btn btn-primary btn-xm" class="d-inline-block"><i class="fa fa-eye"></i></button>
                                    </a>
                                    <a href="{{ route('root_admin_edit_session_ouverte', $session_ouverte_en_cours->id) }}">
                                        <button class="btn btn-success btn-xm" class="d-inline-block"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <button class="btn btn-danger btn-xm" id="btn_session_ouverte" data-id={{ $session_ouverte_en_cours->id }}><i class="fa fa-trash"></i></button>
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

@include('layouts/_modal', ["route"=>route('root_admin_delete_session_ouverte', 0), 'nom'=>'cette session déjà ouverte ?'])

@endsection

@section('js')

<!-- jQuery  -->
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>
<script>
    $(document).on('click', '#btn_session_ouverte', function() {
        var ID = $(this).attr('data-id');
        $('#id').val(ID);
        $('#modal_sup').modal('show');
    });

</script>

@endsection
