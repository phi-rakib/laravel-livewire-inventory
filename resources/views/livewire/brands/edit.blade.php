<div class="container my-4">
    
    <x-page-header title="Brand Edit" uriText="Back" uri="{{ route('brands.index') }}" />

    <div class="row">
        <div class="col-6">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" wire:model="form.name">
                    @error('form.name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
