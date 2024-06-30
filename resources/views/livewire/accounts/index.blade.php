<div class="container my-4">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <x-page-header title="Accounts Index" uriText="Create" uri="{{ route('accounts.create') }}" />

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
