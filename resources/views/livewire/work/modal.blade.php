<div>
    <!--create Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createModal">Create Works </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store">
                <div class="row">
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control"  wire:model="title">
                        @error('title')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="" class="form-label">Client</label>
                        <input type="text"   class="form-control" wire:model="client">
                        @error('client')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="" class="form-label">Date</label>
                        <input type="date"   class="form-control" wire:model="date">
                        @error('date')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Url</label>
                        <input type="text"   class="form-control" wire:model="url">
                        @error('url')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Categories</label>
                        <input type="text" class="form-control"   wire:model="categorie">
                        @error('categorie')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Technologies</label>
                        <input type="text" class="form-control"   wire:model="technologie">
                        @error('technologie')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tags</label>
                        <input type="text" class="form-control"   wire:model="tag">
                        @error('tag')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control"  cols="50" rows="12" wire:model="description"> </textarea>
                        @error('description')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control"   wire:model="image">
                        @error('image')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                        @if ($image)
                        Preview Image: <br>
                            <img style="width: 100px; height:100px;" src="{{ $image->temporaryUrl() }}" alt="">
                        @endif
                    </div>
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
          <h1 class="modal-title fs-5" id="updateModal">Update Works </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update">
                <div class="row">
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="editTitle">
                            {{-- work id --}}
                        <input type="hidden" class="form-control" wire:model="work_id">
                            {{-- work id --}}
                        @error('editTitle')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="" class="form-label">Client</label>
                        <input type="text"   class="form-control" wire:model="editClient">
                        @error('editClient')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="" class="form-label">Date</label>
                        <input type="date"   class="form-control" wire:model="editDate">
                        @error('editDate')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Url</label>
                        <input type="text"   class="form-control" wire:model="editUrl">
                        @error('editUrl')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Categories</label>
                        <input type="text" class="form-control"   wire:model="editCategorie">
                        @error('editCategorie')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Technologies</label>
                        <input type="text" class="form-control"   wire:model="editTechnologie">
                        @error('editTechnologie')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tags</label>
                        <input type="text" class="form-control"   wire:model="editTag">
                        @error('editTag')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control"  cols="50" rows="12" wire:model="editDescription"></textarea>
                        @error('editDescription')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control"   wire:model="editImage">
                        @error('editImage')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                            Old Image:
                            <br>
                            <img style="width: 100px; height:100px;" src="{{asset('uploads/work')}}/{{ $oldImage }}" alt="">
                            <br>
                            @if ($editImage)
                            Preview Image:
                            <br>
                            <img style="width: 100px; height:100px;" src="{{ $editImage->temporaryUrl() }}" alt="">
                            @endif
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>
   <!--read more Modal -->
   <div wire:ignore.self class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="readMoreModal">Read Description </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">




                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea class="form-control bg-dark"  cols="50" rows="5" wire:model="readMoreDesp" readonly></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal"  data-bs-dismiss="modal" class="btn btn-info">Close</button>
                </div>


        </div>

      </div>
    </div>
  </div>
   <!--add image Modal -->
   <div wire:ignore.self class="modal fade" id="addImage" tabindex="-1" aria-labelledby="readMoreModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="readMoreModal">Add Images </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <form  wire:submit.prevent="storeImage">
                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control"   wire:model="images" multiple accept="image/*">
                    <input type="hidden" id="#work_id" wire:model="workId">

                    @if (session()->has('message'))
                        <span class="text-danger">{{ session('message') }}</span>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="submit"   class="btn btn-info">Add</button>
                    <button type="button" wire:click="closeModal"  data-bs-dismiss="modal" class="btn btn-info">Close</button>
                </div>

            </form>

        </div>

      </div>
    </div>
  </div>



</div>
