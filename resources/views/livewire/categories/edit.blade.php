<div class="container my-4">
    
    <x-page-header title="Category Edit" uriText="Back" uri="{{ route('categories.index') }}" />

    <div class="row my-4">
        <div class="col-6">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" wire:model="form.name">
                </div>

                <button class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
