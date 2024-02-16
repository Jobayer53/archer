<div>
     <!--create Modal -->
    <div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createModal">Create Clients Comment </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text"   class="form-control" wire:model="name">
                    @error('name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Profession</label>
                    <input type="text" class="form-control" wire:model="profession">
                    @error('profession')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Comment</label>
                    <textarea class="form-control"  cols="50" rows="4" wire:model="comment"></textarea>
                    @error('comment')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" wire:model="image">
                    @error('image')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                    @if ($image)
                        <img style="width: 100px; height:100px;"  src="{{ $image->temporaryUrl() }}" alt="">
                    @endif
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
              <h1 class="modal-title fs-5" id="updateModal">Update Client Comment </h1>
              <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text"   class="form-control" wire:model="editName">

                        <input type="hidden"   class="form-control" wire:model="client_id">

                        @error('editName')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Profession</label>
                        <input type="text" class="form-control" wire:model="editProfession">
                        @error('editProfession')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Comment</label>
                        <textarea class="form-control"  cols="50" rows="4" wire:model="editComment"></textarea>
                        @error('editComment')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    @if ($oldImage)
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" wire:model="editImage">

                            Old Image:
                                <br>
                                <img style="width: 100px; height:100px;" src="{{asset('uploads/client')}}/{{ $oldImage }}" alt="">
                                <br>
                            Preview Image:
                            @if ($editImage)
                                <img style="width: 100px; height:100px;"  src="{{ $editImage->temporaryUrl() }}" alt="">
                            @endif
                        </div>
                    @endif



                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                      </div>
                </form>
            </div>

          </div>
        </div>
      </div>




</div>
