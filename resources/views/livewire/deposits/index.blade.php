<div class="container my-4">
    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Deposit Index</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('deposits.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>

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