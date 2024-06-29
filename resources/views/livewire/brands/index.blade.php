<div class="container my-4">
    <div class="row my-4">
        <div class="col-md-12">
            <div class="float-left">
                <h2>Brand Index</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('brands.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td>
                                <a href="{{ route("brands.edit", $brand->id)}}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" wire:click="delete({{ $brand->id }})" wire:confirm="Are you sure that you want to delete this brand?">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
