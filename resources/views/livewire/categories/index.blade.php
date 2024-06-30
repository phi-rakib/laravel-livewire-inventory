<div class="container my-4">
    <x-session-message />

    <x-page-header title="Category Index" uriText="Create Category" uri="{{ route('categories.create') }}" />

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
                                <a href="{{ route("categories.edit", $category->id) }}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" wire:click="delete({{ $category->id }})" wire:confirm="Are you sure that you want to delete this category?">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
