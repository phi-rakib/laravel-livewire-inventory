<div class="container my-4">

    <x-session-message />
    
    <x-page-header title="Deposit Edit" uriText="Back" uri="{{ route('deposits.index') }}" />

    <div class="row my-4">
        <div class="col-6">
            <form wire:submit="save">
                <x-input-date name="form.deposit_date" label="Date" />
                
                <x-select name="form.account_id" label="Account" :list="$accounts" />

                <x-select name="form.deposit_category_id" label="Deposit Category" :list="$depositCategories" />

                <x-input-number name="form.amount" label="Amount" />

                <x-input-text name="form.note" label="Note" />

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>