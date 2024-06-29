<div class="container my-4">
    @if (session()->has("message"))
        <div class="alert alert-success">
            {{ session("message") }}
        </div>    
    @endif

    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Category Index</h2>
            </div>
            <div class="float-right">
                <a href="{{ route("categories.create") }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" wire:click="delete({{ $category->id }})" wire:confirm="Are you sure that you want to delete this category?">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
