<div class="container w-75">
<div>
    <div class="card">
        <div class="card-header">
            <div>
                <!--Bootstrap Modal-->
                <div class="float-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New
                    </button>
                    <!-- Modal -->
                    <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
   <!--Form start With Model--->

   <div class="mt-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <form wire:submit="store">

                                                    <div class="p-2 m-2">
                                                        <label for="" class="form-label">Country</label>
                                                        <input type="text" wire:model="country" class="form-control" placeholder="country">
                                                    </div>

                                                    <div class="p-2 m-2">
                                                        <label for="" class="form-label">Hotel</label>
                                                        <input type="text" wire:model="hotel" class="form-control" placeholder="hotel">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                       <button class="btn btn-primary">Submit</button>
                            </form>
                <!--Model form End-->   
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2>All Countrys And Hotels</h2>
            </div>

        </div>

        <div class="card-body">
            <div>
               @if($c != 0)
               <table class="table">
                    <thead class="t-head">
                        <tr>
                            <th>SL</th>
                            <th>Country</th>
                            <th>Hotel</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="t-body">

                        @forelse ($hotels as $key => $fliht)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $fliht->country }}</td>
                            <td>{{ $fliht->hotel }}</td>
                            <td><a class="btn btn-primary btn-sm" href="">Edit</a>
                                <a class="btn btn-danger btn-sm" href="">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <p>No users</p>
                        @endforelse
                    </tbody>
                </table>
               @else
                
               <div class="d-flex justify-content-center text-danger">
                    <h4>Data Not Found!</h4>

                    </div>

               @endif
            </div>
        </div>
    </div>
</div>

    </div>