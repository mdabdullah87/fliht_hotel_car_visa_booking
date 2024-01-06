<div class="container w-75">
<div class="mt-2">
    <div class="card">
        <div class="card-header">
        <div>
        <h2>Add Country And Hotel</h2>
        </div>
        </div>
        <div class=" card-body">
                                        <form wire:submit="store">

                                            <div class="p-2 m-2">
                                                <label for="" class="form-label">Country</label>
                                                <input type="text" wire:model="country" class="form-control" placeholder="country">
                                            </div>

                                            <div class="p-2 m-2">
                                                <label for="" class="form-label">Hotel</label>
                                                <input type="text" wire:model="origin" class="form-control" placeholder="hotel">
                                            </div>

                                            <button class="btn btn-primary">Submit</button>

                                        </form>
                                </div>
                            </div>
                        </div>
                    
    </div>