@extends('layouts/master-dashboard', ['title'=>'Modifier une session'])

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

@endsection

@section('container')
@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Sessions Ouvertes',
'info2'=>'Modifier une session',
'info3'=>'Sessions Ouvertes'
])

<br>

<div class="row">
    <div class="col-10 offset-1">
        <div class="card m-b-30">

            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title text-white">Modification d'une session </h4>
            </div>
            <div class="card-body">

                <form action="{{ route('root_admin_update_session_ouverte', $session_ouverte->id) }}" method="POST">
                    @csrf
                    @method('put')

                    @include('dashboard.sessions-ouvertes/_form', ['SubmitName'=>"Modifier"])

                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('js')
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

<script>
        $( 'select' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );
</script>
@endsection
