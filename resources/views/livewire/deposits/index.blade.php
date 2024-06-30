<div class="container my-4">
    
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
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>