<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add Store</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Store Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='price'>
             <label for="price">price</label>
             @error('price')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="product" class="form-select" wire:model.defer='product'>
             <option hidden="true">Select product</option>
             <option selected disabled>Select product</option>
             <option value="Sweets">Sweets</option>
             <option value="Hardware">Hardware</option>
             <option value="Medical">Medical</option>
             <option value="Foods">Foods</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addStore()'>
                 Add Store
             </button>
          </div>
     </div>
    </div>
 </div>
