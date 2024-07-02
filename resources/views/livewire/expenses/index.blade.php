<div class="container my-4">
    <x-session-message />

    <x-page-header title="Expense Index" uriText="Create Expense" uri="{{ route('expenses.create') }}" />

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Expense Category</th>
                        <th>Account</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($expenses as $expense)
                        <tr>
                            <td>{{ $expense->expense_date }}</td>
                            <td>{{ $expense->expenseCategory->name }}</td>
                            <td>{{ $expense->account->name }}</td>
                            <td>{{ $expense->amount }}</td>
                            <td>{{ $expense->paymentMethod->name }}</td>
                            <td>
                                <a href="{{route('expenses.edit', $expense->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>