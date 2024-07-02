<div class="container my-4">
    <x-page-header title="Expense Edit" uriText="Back" uri="{{ route('expenses.index') }}" />

    <x-session-message />

    <div class="row">
        <div class="col-6">
            <form wire:submit.prevent="save">
                <x-input-date name="form.expense_date" label="Date" />

                <x-select name="form.account_id" label="Account" :list="$accounts"/>

                <x-select name="form.expense_category_id" label="Expense Categories" :list="$expenseCategories"/>

                <x-select name="form.payment_method_id" label="Payment Method" :list="$paymentMethods"/>
                
                <x-input-number name="form.amount" label="Amount" />

                <x-input-text name="form.note" label="Note" />

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>