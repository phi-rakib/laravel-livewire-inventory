<div class="container my-4">
    
    <x-page-header title="Brand Edit" uriText="Back" uri="{{ route('brands.index') }}" />

    <div class="row">
        <div class="col-6">
            <form wire:submit.prevent="submit">
                
                <x-input-text name="form.name" label="Name" />

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
