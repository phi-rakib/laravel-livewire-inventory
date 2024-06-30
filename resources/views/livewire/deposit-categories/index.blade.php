<div class="container my-4">
    @if (session()->has("message"))
        <div class="alert alert-success">
            {{ session("message") }}
        </div>
    @endif

    <x-page-header title="Deposit Category Index" uriText="Create Deposit Category" uri="{{ route('depositCategories.create') }}" />

    <div class="row my-4">
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($depositCategories as $depositCategory)
                        <tr>
                            <td>{{ $depositCategory->name }}</td>
                            <td>{{ $depositCategory->created_at }}</td>
                            <td>
                                <a href="{{ route('depositCategories.edit', $depositCategory)}}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" 
                                wire:confirm="Are you sure that you want to delete this deposit category?"
                                wire:click="delete({{ $depositCategory->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>