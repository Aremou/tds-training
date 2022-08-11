@extends('layouts.master', ['title'=>'Notre équipe'])
<style>
    #header {
        background-color: #220080;
    }

</style>

@section('intro')
<section id="intro" style="height:120px; background:#fff">
    <div class="intro-container">
    </div>
</section>
@endsection

@section('rechercher')

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <form method="" action="">
            @csrf
            <div class="">
                <label for="nom" class="form-label">Nom et Prénom</label>
                <input type="text" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" id="nom" name="nom">
                {!! $errors->first('nom', '<p class="text-danger">:message</p>') !!}
            </div>
        </form>
    </div>
</div>

@endsection
