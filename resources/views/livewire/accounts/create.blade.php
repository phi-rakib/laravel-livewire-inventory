<div class="container my-4">
    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Account Create</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('accounts.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

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
    
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>
