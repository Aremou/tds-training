<div class="form-group">
    <label>Nom</label>
    <input type="text" class=" colorpicker-rgba form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" value="{{ old('nom') ?? $formation->nom }}" name="nom">
    {!! $errors->first('nom', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Référence</label>
    <input type="text" class=" colorpicker-rgba form-control {{ $errors->has('reference') ? 'is-invalid' : '' }}" value="{{ old('reference') ?? $formation->reference }}" name="reference">
    {!! $errors->first('reference', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Catégorie</label>
    <select class="form-control" name="categorie" id="">
        <option value="{{ old('categorie') ?? $formation->categorie_id }}">{{ old('categorie') ? old('categorie') : ($formation->categorie_id ? $formation->categorie->nom : '') }}</option>
        @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
        @endforeach
    </select>
    {!! $errors->first('categorie', '<p class="error">:message</p>') !!}
</div>

{{-- <div class="form-group">
    <label>image</label>
    <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" id="" name="image" @if($SubmitName=="Modifier" ) disabled @endif>
    {!! $errors->first('image', '<p class="error">:message</p>') !!}
</div> --}}
<div class="form-group">
    <label>Niveau</label>
    <select class="form-control" name="niveau" id="">
        <option value="{{ old('niveau') ?? $formation->niveau }}">{{ old('niveau') ?? $formation->niveau }}</option>
        <option value="debutant">debutant</option>
        <option value="intermediaire">intermediaire</option>
        <option value="expert">expert</option>

    </select>
    {!! $errors->first('niveau', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Durée</label>
    <input type="text" class=" colorpicker-rgba form-control {{ $errors->has('duree') ? 'is-invalid' : '' }}" value="{{ old('duree') ?? $formation->duree }}" name="duree">
    {!! $errors->first('duree', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Lieu</label>
    <input type="text" class=" colorpicker-rgba form-control {{ $errors->has('lieu') ? 'is-invalid' : '' }}" value="{{ old('lieu') ?? $formation->lieu }}" name="lieu">
    {!! $errors->first('lieu', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Type Formation</label>
    <select class="form-control" name="type_formation" id="">
        <option value="{{ old('type_formation') ?? $formation->type_formation }}">{{ old('type_formation') ?? $formation->type_formation }}</option>
        <option value="presentiel">presentiel</option>
        <option value="en ligne">en ligne</option>
        <option value="hybride">hybride</option>
    </select>
    {!! $errors->first('type_formation', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="description" id="" cols="30" rows="4" class="elm1 form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description') ?? $formation->description }}</textarea>
    {!! $errors->first('description', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Objectif</label>
    <textarea name="objectif" id="" cols="30" rows="4" class="elm1 form-control {{ $errors->has('objectif') ? 'is-invalid' : '' }}">{{ old('objectif') ?? $formation->objectif }}</textarea>
    {!! $errors->first('objectif', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Prérequis</label>
    <textarea name="prerequis" id="" cols="30" rows="4" class="elm1 form-control {{ $errors->has('prerequis') ? 'is-invalid' : '' }}">{{ old('prerequis') ?? $formation->prerequis }}</textarea>
    {!! $errors->first('prerequis', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Public</label>
    <textarea name="public" id="" cols="30" rows="4" class="elm1 form-control {{ $errors->has('public') ? 'is-invalid' : '' }}">{{ old('public') ?? $formation->public }}</textarea>
    {!! $errors->first('public', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Points Forts</label>
    <textarea name="points_forts" id="" cols="30" rows="4" class="elm1 form-control {{ $errors->has('points_forts') ? 'is-invalid' : '' }}">{{ old('points_forts') ?? $formation->points_forts }}</textarea>
    {!! $errors->first('points_forts', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Certification</label>
    <textarea name="certification" id="" cols="30" rows="4" class="elm1 form-control {{ $errors->has('certification') ? 'is-invalid' : '' }}">{{ old('certification') ?? $formation->certification }}</textarea>
    {!! $errors->first('certification', '<p class="error">:message</p>') !!}
</div>
<div class="form-group">
    <label>Programme</label>
    <textarea name="programme" id="" cols="30" rows="4" class="elm1 form-control {{ $errors->has('programme') ? 'is-invalid' : '' }}">{{ old('programme') ?? $formation->programme }}</textarea>
    {!! $errors->first('programme', '<p class="error">:message</p>') !!}
</div>
<button type="reset" class="btn btn-secondary btn-lg waves-effect waves-light">
    Annuler
</button>
<button type="submit" class="btn btn-lg pull-right waves-effect waves-light text-white" name="valider" style="{{couleur()}}">
    {{ $SubmitName }}
</button>
