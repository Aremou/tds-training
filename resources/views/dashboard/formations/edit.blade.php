@extends('layouts/master-dashboard', ['title'=>'Modifier une formation'])

@section('container')
@include('layouts.partials-dashboard._entete-page', [
'info1'=>'Formations',
'info2'=>'Modifier une formation',
'info3'=>'Formations'
])

<br>

<div class="row">
    <div class="col-10 offset-1">
        <div class="card m-b-30">

            <div class="card-header" style="{{couleur()}}">
                <h4 class="mt-0 header-title text-white">Modification d'une formation </h4>
            </div>
            <div class="card-body">

                <form action="{{ route('root_admin_update_formation', $formation->id) }}" method="POST">
                    @csrf
                    @method('put')

                    @include('dashboard.formations/_form', ['SubmitName'=>"Modifier"])

                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('js')
<script src="{{ asset('dashboard/js/jquery.min.js ') }}"></script>

@endsection
