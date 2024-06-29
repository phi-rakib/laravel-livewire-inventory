<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="float-left">
                <h2>Product Create</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" wire:model="form.name">
                    @error('form.name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="price"">Price</label>
                    <input type="text" id="price" class="form-control" wire:model="form.price">
                    @error('form.price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>
