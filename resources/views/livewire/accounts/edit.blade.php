<div class="container my-4">
    <x-page-header title="Account Edit" uriText="Back" uri="{{ route('accounts.index') }}" />

    <div class="row my-4">
        <div class="col-6">
            <form wire:submit.prevent="save">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" wire:model="form.name">
                    @error('form.name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="account number">Account Number</label>
                    <input type="text" id="account_number" class="form-control" wire:model="form.account_number">
                    @error('form.account_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="balance">Balance</label>
                    <input type="number" id="balance" class="form-control" wire:model="form.balance">
                    @error('form.balance')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>