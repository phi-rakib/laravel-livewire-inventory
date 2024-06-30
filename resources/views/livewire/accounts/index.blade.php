<div class="container my-4">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Accounts Index</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('accounts.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>

    <div class="row my-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Account Number</th>
                    <th>Balance</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->account_number }}</td>
                        <td>{{ $account->balance }}</td>
                        <td>{{ $account->created_at }}</td>
                        <td>
                            <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger" 
                            wire:confirm="Are you sure that you want to delete this account?"
                            wire:click="delete({{ $account->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach    
            </tbody>   
        </table>
    </div>
</div>
