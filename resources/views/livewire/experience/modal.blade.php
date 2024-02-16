<div>
    <!--create Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createModal">Create Experience </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text"   class="form-control" wire:model="title">
                    @error('title')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Year</label>
                    <input type="text" class="form-control" wire:model="year">
                    @error('year')
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
          <h1 class="modal-title fs-5" id="updateModal">Update Experience </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text"   class="form-control" wire:model="editTitle">

                    <input type="hidden"   class="form-control" wire:model="experience_id">

                    @error('editTitle')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Year</label>
                    <input type="text" class="form-control" wire:model="editYear">
                    @error('editYear')
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
