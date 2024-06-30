<div class="container my-4">
    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Deposit Create</h2>
            </div>
            <div class="float-right">
                <a href="route('depositCategories.index')" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

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