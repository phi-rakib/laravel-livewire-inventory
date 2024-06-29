<div class="container my-4">
    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Category Edit</h2>
            </div>
            <div class="float-right">
                <a href="{{ route("categories.index") }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

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
