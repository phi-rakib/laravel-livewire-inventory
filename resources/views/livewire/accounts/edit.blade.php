<div class="container my-4">
    <x-page-header title="Account Edit" uriText="Back" uri="{{ route('accounts.index') }}" />

    <div class="row my-4">
        <div class="col-6">
            <form wire:submit.prevent="save">
                <x-input-text name="form.name" label="Name" />

                <x-input-text name="form.account_number" label="Account Number" />

                <x-input-text name="form.balance" label="Balance" />

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>