<div class="modal fade" id="modal_form_categorie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $SubmitForm }} une catégorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('categories-formations.store') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{-- @method($method) --}}
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" placeholder=" Tapez ici" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" name="nom">
                        {!! $errors->first('nom', '<p class="error">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"></textarea>
                        {!! $errors->first('description', '<p class="error">:message</p>') !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary mr-auto px-4" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn pull-right px-4 text-white" name="valid_poste" style="{{couleur()}}">{{ $SubmitForm }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_form_categorie_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier une categorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action={{ $route }} method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" name="cat_id" id="ids">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" placeholder=" Tapez ici" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" name="nom" id="nom">
                        {!! $errors->first('nom', '<p class="error">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"></textarea>
                        {!! $errors->first('description', '<p class="error">:message</p>') !!}
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary mr-auto px-4" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn pull-right px-4 text-white" name="valid_poste" style="{{couleur()}}">{{ $SubmitFormUpdate }}</button>
            </div>
            </form>
        </div>
    </div>
</div>
