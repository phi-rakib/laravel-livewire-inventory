<div class="container my-4">
    @if (session()->has("message"))
        <div class="alert alert-success">
            {{ session("message") }}
        </div>
    @endif
    
    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Deposit Category Index</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('depositCategories.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($depositCategories as $depositCategory)
                        <tr>
                            <td>{{ $depositCategory->name }}</td>
                            <td>{{ $depositCategory->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>