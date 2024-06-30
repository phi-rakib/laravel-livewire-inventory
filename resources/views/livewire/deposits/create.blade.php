<div class="container my-4">

    <x-page-header title="Deposit Create" uriText="Back" uri="{{ route('deposits.index') }}" />

    <div class="row my-4">
        <div class="col-6">
            <form wire:submit="save">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" wire:model="form.deposit_date">
                    @error('form.deposit_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="account">Account</label>
                    <select id="account_id" class="form-control" wire:model="form.account_id">
                        <option value="">Select Account</option>
                        @foreach ($accounts as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('form.account_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deposit category">Deposit Category</label>
                    <select id="deposit_category_id" class="form-control" wire:model="form.deposit_category_id">
                        <option value="">Select Deposit Category</option>
                        @foreach ($depositCategories as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('form.deposit_category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" class="form-control" wire:model="form.amount">

                    @error('form.amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="note">Note</label>
                    <input type="text" class="form-control" id="note" wire:model="form.note">
                    @error('form.note')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>