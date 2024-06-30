<div class="container my-4">
    
    <x-page-header title="Product Edit" uriText="Back" uri="{{ route('products.index') }}" />
    
    <div class="row">
        <div class="col-md-6">
            <form wire:submit.prevent="submit">
                <x-input-text name="form.name" label="Name" />

                <x-input-number name="form.price" label="Price" />
        
                <x-select name="form.category_id" label="Category" :list="$categories" />

                <x-select name="form.brand_id" label="Brand" :list="$brands" />
        
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
