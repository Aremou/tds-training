@extends('layouts/master-dashboard', ['title'=> 'Inscrits Session #' . $session_ouverte->id]);

@section('container')

@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Sessions Ouvertes',
'info2'=>'Liste des inscrits ',
'info3'=>'Session #'.$session_ouverte->id
])

<br>

<div class="row">
    <div class="col-sm-12 ">
        <button class="btn btn-secondary btn-xm" style="margin-bottom: 10px" onClick="imprimer('ig2')"><i class="fa fa-print"></i>
            Imprimer
        </button>
        <div class="card m-b-30">
            <div class="card-body" id="ig2">
                <h3 class="text-center"> Liste des inscrits pour la session #{{ $session_ouverte->id }}</h3>
                <table class="table table-striped table-bordered table-inverse dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nom & Prénoms</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Ville</th>
                            <th>Pays</th>
                            <th>Code Postal</th>
                            <th>Profession</th>
                            <th>Date inscrit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inscriptions as $inscription)
                            <tr>
                                <td>{{ $inscription->civilite . " " . $inscription->nom ." " . $inscription->prenom }}</td>
                                <td>{{ $inscription->telephone }}</td>
                                <td>{{ $inscription->email }}</td>
                                <td>{{ $inscription->ville }}</td>
                                <td>{{ $inscription->pays }}</td>
                                <td>{{ $inscription->code_postal }}</td>
                                <td>{{ $inscription->profession }}</td>
                                <td>{{ $inscription->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<br><br>

@include('layouts/_modal', ["route"=>route('root_admin_delete_session_ouverte', 0), 'nom'=>'cette session déjà ouverte ?'])


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

    function imprimer(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        window.location.reload();

    }

</script>

@endsection
