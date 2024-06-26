<div>
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" wire:model="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="price"">Price</label>
            <input type="text" id="price" class="form-control" wire:model="price">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
