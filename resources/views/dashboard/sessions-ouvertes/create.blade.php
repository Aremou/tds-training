@extends('layouts.master-dashboard', ['title'=>'Ouvrir une session'])


@section('style')
{{-- <link href="{{asset('css/bootstrap.min.css ') }}" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

@endsection

@section('container')

@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Sessions Ouvertes',
'info2'=>'Ajouter une session ouverte',
'info3'=>'Sessions Ouvertes'
])

<br>

<div class="row">
    <!-- end col -->

    <div class="col-md-8 offset-md-2">
        <div class="card m-b-30">

            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title text-white">Enregistrement d'une session </h4>

            </div>
            <div class="card-body">
                <form action="{{ route('root_admin_store_session_ouverte') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    @include('dashboard.sessions-ouvertes/_form', ['SubmitName'=>'Ajouter'])

                </form>
            </div>
        </div>

    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('js')

<!-- jQuery  -->
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>
{{-- <script src="{{asset('js/bootstrap.min.js ') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

<script>
        $( 'select' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );
</script>
@endsection
