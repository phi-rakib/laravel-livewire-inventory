<div class="container my-4">
    
    <x-page-header title="Deposit Category Edit" uriText="Back" uri="{{ route('depositCategories.index') }}" />

    <div class="row my-4">
        <div class="col-6">
            <form wire:submit.prevent="save">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" wire:model="form.name">
                    @error('form.name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>