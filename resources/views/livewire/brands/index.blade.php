<div class="container my-4">

    <x-session-message />
    
    <x-page-header title="Brand Index" uriText="Create Brand" uri="{{ route('brands.create') }}" />

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
