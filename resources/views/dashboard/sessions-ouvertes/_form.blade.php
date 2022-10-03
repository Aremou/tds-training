
<div class="form-group">
    <label>Formation</label>
    <select class="form-control" name="formation" id="">
        <option value="{{ old('formation') ?? $session_ouverte->formation_id }}">{{ old('formation') ? old('formation') : ($session_ouverte->formation_id ? $session_ouverte->formation->nom : '') }}</option>
        @foreach ($formations as $formation)
        <option value="{{ $formation->id }}">{{ $formation->nom }}</option>
        @endforeach
    </select>
    {!! $errors->first('formation', '<p class="error">:message</p>') !!}
</div>

<div class="form-group">
    <label>Type Formation</label>
    <select class="form-control" name="type_formation" id="">
        <option value="{{ old('type_formation') ?? $session_ouverte->type_formation }}">{{ old('type_formation') ?? $session_ouverte->type_formation }}</option>
        <option value="Presentiel">Presentiel</option>
        <option value="En ligne">En ligne</option>
        <option value="Hybride">Hybride</option>
    </select>
    {!! $errors->first('type_formation', '<p class="error">:message</p>') !!}
</div>

<div class="form-group">
    <label>Montant</label>
    <input type="text" class=" colorpicker-rgba form-control {{ $errors->has('montant') ? 'is-invalid' : '' }}" value="{{ old('montant') ?? $session_ouverte->montant }}" name="montant">
    {!! $errors->first('montant', '<p class="error">:message</p>') !!}
</div>

<div class="form-group">
    <label>Date début</label>
    <input type="date" class=" form-control {{ $errors->has('date_debut') ? 'is-invalid' : '' }}" value="{{ old('date_debut') ?? $session_ouverte->date_debut }}" name="date_debut">
    {!! $errors->first('date_debut', '<p class="error">:message</p>') !!}
</div>

<div class="form-group">
    <label>Date fin</label>
    <input type="date" class=" form-control {{ $errors->has('date_fin') ? 'is-invalid' : '' }}" value="{{ old('date_fin') ?? $session_ouverte->date_fin }}" name="date_fin">
    {!! $errors->first('date_fin', '<p class="error">:message</p>') !!}
</div>

<div class="form-group">
    <label>Lieu</label>
    <input type="text" class=" colorpicker-rgba form-control {{ $errors->has('lieu') ? 'is-invalid' : '' }}" value="{{ old('lieu') ?? $session_ouverte->lieu }}" name="lieu">
    {!! $errors->first('lieu', '<p class="error">:message</p>') !!}
</div>

<div class="form-group">
    <label>Certification</label>
    <select class="form-control" name="certification" id="">
        <option value="{{ old('certification') ?? $session_ouverte->certification }}">{{ old('certification') ?? $session_ouverte->certification }}</option>
        <option value="Oui">Oui</option>
        <option value="Non">Non</option>
    </select>
    {!! $errors->first('certification', '<p class="error">:message</p>') !!}
</div>

<div class="form-group">
    <label>Examen</label>
    <input type="text" class="form-control {{ $errors->has('examen') ? 'is-invalid' : '' }}" value="{{ old('examen') ?? $session_ouverte->examen }}" name="examen">
    {!! $errors->first('examen', '<p class="error">:message</p>') !!}
</div>

<button type="reset" class="btn btn-secondary btn-lg waves-effect waves-light">
    Annuler
</button>
<button type="submit" class="btn btn-lg pull-right waves-effect waves-light text-white" name="valider" style="{{couleur()}}">
    {{ $SubmitName }}
</button>
