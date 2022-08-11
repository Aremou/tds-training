@extends('layouts/master-dashboard', ['title'=> 'Session' . $session_ouverte->id]);

@section('container')

@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Sessions Ouvertes',
'info2'=>'Détail d\'une session ',
'info3'=>'Session #'.$session_ouverte->id
])

<br>

<div class="row">
    <div class="col-sm-12 ">
        <a href="{{ route('root_admin_inscrit_session_ouverte', $session_ouverte->id) }}">
            <button class="btn btn-secondary btn-xm d-inline-block" style="margin-bottom:10px;">Inscrits</button>
        </a>
        <a href="{{ route('root_admin_edit_session_ouverte', $session_ouverte->id) }}">
            <button class="btn btn-success btn-xm d-inline-block" style="margin-bottom:10px;">Modifier</button>
        </a>
        <button class="btn btn-danger btn-xm d-inline-block" id="btn_delete_session" data-id={{ $session_ouverte->id }} style="margin-bottom:10px;">Supprimer</button>
        <button class="btn btn-danger btn-xm d-inline-block" id="btn_cloturer_session" data-id={{ $session_ouverte->id }} style="margin-bottom:10px;" @if($session_ouverte->statut == "terminer") disabled @endif >Clôturer</button>
        <table class="table table-striped table-bordered table-inverse dt-responsive nowrap ">
            <tbody>
                </tr>
                <tr>
                    <td>Formation</td>
                    <td>{{ $session_ouverte->formation->nom }}</td>
                </tr>
                <tr>
                    <td>Type formation</td>
                    <td>{{ $session_ouverte->type_formation }}</td>
                </tr>
                <tr>
                    <td>Montant</td>
                    <td>{{ number_format($session_ouverte->montant, '0', '.', ' ') }}</td>
                </tr>
                <tr>
                    <td>Date début</td>
                    <td>{{ $session_ouverte->date_debut }}</td>
                </tr>
                <tr>
                    <td>Date fin</td>
                    <td>{{ $session_ouverte->date_fin }}</td>
                </tr>
                <tr>
                    <td>Statut</td>
                    <td>{{ $session_ouverte->statut }}</td>
                </tr>
                <tr>
                    <td>Date de création</td>
                    <td>{{ $session_ouverte->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <td>Dernière Modification</td>
                    <td>{{ $session_ouverte->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<br><br>

@include('layouts/_modal', ["route"=>route('root_admin_delete_session_ouverte', 0), 'nom'=>'cette session déjà ouverte ?'])

<div class="modal fade" id="ModalCloturerSession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-warning" style="color: yellow"></i> Boite
                    de confirmation </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('root_admin_cloturer_session_ouverte', $session_ouverte->id) }}" method="post">

                @csrf

                <div class="modal-body">
                    <input type="hidden" name="id_session" id="id_session">
                    <h5>Voulez-vous vraiment cluturer cette session ?</h5>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary mr-auto px-5" data-dismiss="modal">Non</button>
                    <button type="submit" class="btn btn-primary pull-right px-5" name="oui">Oui</button>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection

@section('js')

<!-- jQuery  -->
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>

<script>
    $(document).on('click', '#btn_delete_session', function() {
        var ID = $(this).attr('data-id');
        $('#id').val(ID);
        $('#modal_sup').modal('show');
    });
    $(document).on('click', '#btn_cloturer_session', function() {
        var ID = $(this).attr('data-id');
        $('#id_session').val(ID);
        $('#ModalCloturerSession').modal('show');
    });


</script>

@endsection
