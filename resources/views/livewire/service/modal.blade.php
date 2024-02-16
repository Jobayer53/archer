<div>
    <!--create Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createModal">Create Serial </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="" class="form-label">Serial</label>
                    <input type="number"   class="form-control" wire:model="serial">
                    @error('serial')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" wire:model="title">
                    @error('title')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Short Description</label>
                    <textarea class="form-control"  cols="50" rows="4" wire:model="shortDesp"></textarea>
                    @error('shortDesp')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Create</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>

   <!--update Modal -->
   <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateModal">Update Serial </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label for="" class="form-label">Serial</label>
                    <input type="number" class="form-control" wire:model="editSerial">
                    @error('editSerial')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text"   class="form-control" wire:model="editTitle">
                    {{-- serial id --}}
                        <input type="hidden"   class="form-control" wire:model="service_id">
                    {{-- serial id --}}
                    @error('editTitle')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Short Description</label>
                    <textarea class="form-control"  cols="50" rows="4" wire:model="editShortDesp"></textarea>
                    @error('editShortDesp')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>



</div>
