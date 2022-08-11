@extends('layouts.master-dashboard', ['title'=>'Newsletter'])

@section('container')
@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Newsletter',
'info2'=>'Liste des abonné(e)s',
'info3'=>'Liste des abonné(e)s'
])

<br>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title d-inline-block text-white">Liste des abonné(e)s " style="{{couleur()}}">Ajouter une categorie</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>email</th>
                                <th style="width: 10%">Action(s)</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($newsletters_actif as $newsletter_actif)
                            <tr>
                                <td><?= $newsletter_actif->id ?></td>
                                <td><?= $newsletter_actif->email?></td>
                                <td>
                                    <button class="btn btn-danger btn-xm" id="btn_lock_newsletter" data-id="{{  $newsletter_actif->id }}" data-email="{{  $newsletter_actif->email }}"><i class="fa fa-lock"></i> Bloquer</button>
                                    <button class="btn btn-danger btn-xm" id="btn_sup_newsletter" data-id="{{  $newsletter_actif->id }}"><i class="fa fa-trash"></i> Supprimer</button>
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
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title d-inline-block text-white">Liste des abonné(e)s bloqués </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable1" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>email</th>
                                <th style="width: 10%">Action(s)</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($newsletters_bloque as $newsletter_bloque)
                            <tr>
                                <td><?= $newsletter_bloque->id ?></td>
                                <td><?= $newsletter_bloque->email?></td>
                                <td>
                                    <button class="btn btn-success btn-xm" id="btn_unlock_newsletter" data-id="{{  $newsletter_bloque->id }}" data-email="{{  $newsletter_bloque->email }}"><i class="fa fa-unlock"></i> Debloquer</button>
                                    <button class="btn btn-danger btn-xm" id="btn_sup_newsletter" data-id="{{  $newsletter_bloque->id }}"><i class="fa fa-trash"></i> Supprimer</button>
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

<div class="modal fade" id="modal_lock_abonnee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-warning" style="color: yellow"></i> Boite
                    de confirmation </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('root_admin_bloquer_newsletter') }}" method="post">

                @csrf

                <div class="modal-body">
                    <input type="hidden" name="id_abon" id="id_abon_lock">
                    <h5>Voulez-vous vraiment bloquer cet abonné(e)</h5>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary mr-auto px-5" data-dismiss="modal">Non</button>
                    <button type="submit" class="btn btn-primary pull-right px-5" name="oui">Oui</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_unlock_abonnee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-warning" style="color: yellow"></i> Boite
                    de confirmation </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('root_admin_debloquer_newsletter') }}" method="post">

                @csrf

                <div class="modal-body">
                    <input type="hidden" name="id_abon" id="id_abon_unlock">
                    <h5>Voulez-vous vraiment débloquer cet abonné(e)</h5>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary mr-auto px-5" data-dismiss="modal">Non</button>
                    <button type="submit" class="btn btn-primary pull-right px-5" name="oui">Oui</button>
                </div>

            </form>
        </div>
    </div>
</div>


@include('layouts/_modal', ["route"=>route('root_admin_delete_newsletter', 0), 'nom'=>'cet abonné(e) ?'])

@endsection

@section('js')

<!-- jQuery  -->
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>

<script>
    $(document).ready(function() {
        $('#datatable1').DataTable();
    });

    $(document).on('click', '#btn_lock_newsletter', function() {
        var ID = $(this).attr('data-id');
        $('#id_abon_lock').val(ID);
        $('#modal_lock_abonnee').modal('show');
    });

    $(document).on('click', '#btn_unlock_newsletter', function() {
        var ID = $(this).attr('data-id');
        $('#id_abon_unlock').val(ID);
        $('#modal_unlock_abonnee').modal('show');
    });

    $(document).on('click', '#btn_sup_newsletter', function() {
        var ID = $(this).attr('data-id');
        $('#id').val(ID);
        $('#modal_sup').modal('show');
    });

</script>
@endsection
