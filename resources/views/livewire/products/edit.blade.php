<div class="container my-4">
    
    <x-page-header title="Product Edit" uriText="Back" uri="{{ route('products.index') }}" />
    
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
                
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category_id" class="form-control" wire:model="form.category_id">
                        @foreach ($categories as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('form.category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <select id="brand_id" class="form-control" wire:model="form.brand_id">
                        @foreach ($brands as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('form.brand_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
