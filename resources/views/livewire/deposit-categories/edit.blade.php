<div class="container my-4">
    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Edit Deposit Category</h2>
            </div>
            <div class="float-right">
                <a href="route('depositCategories.index')" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

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