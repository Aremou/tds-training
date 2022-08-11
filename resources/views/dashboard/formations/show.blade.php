@extends('layouts/master-dashboard', ['title'=> $formation->nom ])

@section('container')

@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Formations',
'info2'=>'Détail d\'une formation',
'info3'=>'Formation #'.$formation->id
])

<br>

<div class="row">
    <div class="col-sm-12 ">
        <a href="{{ route('root_admin_edit_formation', $formation->id) }}">
            <button class="btn btn-success btn-xm d-inline-block" style="margin-bottom:10px;">Modifier</button>
        </a>
        <button class="btn btn-danger btn-xm d-inline-block" id="btn_delete_formation" data-id={{ $formation->id }} style="margin-bottom:10px;">Supprimer</button>
        <table class="table table-striped table-bordered table-inverse dt-responsive nowrap ">
            <tbody>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td>{{ $formation->nom }}</td>
                </tr>
                <tr>
                    <td>Catégorie</td>
                    <td>{{ $formation->categorie->nom }}</td>
                </tr>
                <tr>
                    <td>Réference</td>
                    <td>{{ $formation->reference }}</td>
                </tr>
                <tr>
                    <td>Niveau</td>
                    <td>{{ $formation->niveau }}</td>
                </tr>
                <tr>
                    <td>Durée</td>
                    <td>{{ $formation->duree }}</td>
                </tr>
                <tr>
                    <td>Lieu</td>
                    <td>{{ $formation->lieu }}</td>
                </tr>
                <tr>
                    <td>Type Formation</td>
                    <td>{{ $formation->type_formation }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{!! $formation->description !!}</td>
                </tr>
                <tr>
                    <td>Objectif</td>
                    <td>{!! $formation->objectif !!}</td>
                </tr>
                <tr>
                    <td>Prérequis</td>
                    <td>{!! $formation->prerequis !!}</td>
                </tr>
                <tr>
                    <td>Public</td>
                    <td>{!! $formation->public !!}</td>
                </tr>
                <tr>
                    <td>Points Forts</td>
                    <td>{!! $formation->points_forts !!}</td>
                </tr>
                <tr>
                    <td>Certification</td>
                    <td>{!! $formation->certification !!}</td>
                </tr>
                <tr>
                    <td>Programme</td>
                    <td>{!! $formation->programme !!}</td>
                </tr>
                <tr>
                    <td>Date d'ajout</td>
                    <td>{{ $formation->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <td>Dernière Modification</td>
                    <td>{{ $formation->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<br><br>

@include('layouts/_modal', ["route"=>route('root_admin_delete_formation', 0), 'nom'=>'cette formation ?'])


@endsection

@section('js')

<!-- jQuery  -->
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>

<script>
    $(document).on('click', '#btn_delete_formation', function() {
        var ID = $(this).attr('data-id');
        $('#id').val(ID);
        $('#modal_sup').modal('show');
    });

</script>

@endsection
