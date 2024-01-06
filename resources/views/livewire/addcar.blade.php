<div class="mt-2 container w-75">
    <div class="card">
        <div class="card-header">
        <div>
        <h2>Add Origin for Car</h2>
        </div>
        </div>
        <div class=" card-body">
                                        <form wire:submit="store">

                                            <div class="p-2 m-2">
                                                <label for="" class="form-label">Origin</label>
                                                <input type="text" wire:model="origin" class="form-control" placeholder="origin">
                                            </div>

                                            <button class="btn btn-primary">Submit</button>

                                        </form>
                                </div>
                            </div>
                        </div>