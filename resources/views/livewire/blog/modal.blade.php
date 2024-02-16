<div>

   <!--read more Modal -->
   <div wire:ignore.self class="modal fade" id="contentModal" tabindex="-1" aria-labelledby="contentModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-secondary ">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="contentModal">Read Blog Content </h1>
          <button type="button" wire:click="closeModal" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                <div class="mb-3">
                   <p>{!! $content !!}</p>
                </div>

                <div class="modal-footer">
                    <button type="button" wire:click="closeModal"  data-bs-dismiss="modal" class="btn btn-info">Close</button>
                </div>

        </div>

      </div>
    </div>
  </div>




</div>
