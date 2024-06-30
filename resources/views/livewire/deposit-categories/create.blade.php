<div class="container my-4">

    <x-page-header title="Deposit Category Create" uriText="Back" uri="{{ route('depositCategories.index') }}" />

    <div class="row-my-4">
        <div class="col-6">
            <form wire:submit.prevent="save">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" wire:model="form.name">
                </div>

                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>