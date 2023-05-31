<div class="container cardbox">
    <div class="cardbox-header mt-2">
        <h4>Formulaire d'ajout</h4>
    </div>
              <div class="cardbox-body">
                <form method="post" wire:submit.prevent='addUser'>
                    @csrf
                    @method("post")
                    <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label text-bold">De qui s'agit-il?</label>
                      <div class="col-lg-10">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" id="inlineCheckbox1" type="radio" wire:model="status"  value="Agent Immobilier"> Agent Immobilier
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" id="inlineCheckbox2" type="radio"  wire:model="status" value="Agence Immobilière"> Agence Immobilière
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  @if ($status == "Agence Immobilière")
                      <fieldset>
                        <div class="form-group row">
                          <label class="col-lg-2 col-form-label">Nom de l'agence</label>
                          <div class="col-lg-10">
                            <input class="form-control" type="text" wire:model='name'>
                            {{-- <span class="form-text text-muted">Renseignez le nom et prénom.</span> --}}
                          </div>
                        </div>
                      </fieldset>
                  @else
                    <fieldset>
                      <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Nom</label>
                        <div class="col-lg-10">
                          <input class="form-control" type="text" wire:model='nom'>
                          {{-- <span class="form-text text-muted">Renseignez le nom et prénom.</span> --}}
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Prénom</label>
                        <div class="col-lg-10">
                          <input class="form-control" type="text" wire:model='prenom'>
                          {{-- <span class="form-text text-muted">Renseignez le nom et prénom.</span> --}}
                        </div>
                      </div>
                    </fieldset>
                  @endif
                  
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Email</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="email" placeholder="" wire:model='email'>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Téléphone</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="tel" placeholder="" wire:model='phone'>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Adresse</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" placeholder="" wire:model='adresse'>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Photo ou logo</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="file" placeholder="" wire:model='photo'>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row text-white">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                    </div>
                  </fieldset>
                </form>
              </div>
</div>