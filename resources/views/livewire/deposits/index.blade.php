<div class="container my-4">

    <x-session-message />
    
    <x-page-header title="Deposit Index" uriText="Create Deposit" uri="{{ route('deposits.create') }}" />

    <div class="row my-4">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Account</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($deposits as $deposit)
                        <tr>
                            <td>{{ $deposit->deposit_date }}</td>
                            <td>{{ $deposit->account->name }}</td>
                            <td>{{ $deposit->depositCategory->name }}</td>
                            <td>{{ $deposit->amount }}</td>
                            <td>
                                <a href="{{ route('deposits.edit', $deposit->id) }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>