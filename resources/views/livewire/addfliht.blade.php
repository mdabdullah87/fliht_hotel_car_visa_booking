
<div class="mt-2 container w-75">
    <div class="card">
        <div class="card-header">
        <div>
        <h2>Add Flihts Origin</h2>
        </div>
        <div>
        @if (session('origin'))
    <div class="alert alert-success">
        {{ session('origin') }}
    </div>
@endif
        </div>
        </div>
        <div class=" card-body">
                                        <form wire:submit="store">

                                        <div class="text-danger">
                                            @error('origin') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="p-2 m-2">
                                                <label for="" class="form-label">Origin</label>
                                                <input type="text" wire:model.blur="origin" class="form-control" placeholder="origin">
                                            </div>

                                            <button class="btn btn-primary">Submit</button>

                                        </form>
                                </div>
                            </div>
                        </div>


                       

