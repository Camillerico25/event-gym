<div>
    <div class="card container w-50">
     <div class="card-header bg-info">
         <h3>Update Member</h3>
     </div>
     <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='firstname'>
            <label for="firstname">Firstname</label>
            @error('firstname')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>


         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='lastname'>
             <label for="lastname">Lastname</label>
             @error('lastname')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="address" class="form-select" wire:model.defer='address'>
             <option hidden="true">Select address</option>
             <option selected disabled>Select address</option>
             <option value="Bohol">Bohol</option>
             <option value="Cebu">Cebu</option>
             <option value="Davao">Davao</option>
             <option value="Manila">Manila</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='editMember()'>
                Save changes
             </button>
          </div>
     </div>
    </div>
 </div>
