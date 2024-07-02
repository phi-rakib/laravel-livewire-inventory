<div class="container my-4">

    <x-page-header title="Category Create" uriText="Back" uri="{{ route('categories.index') }}" />

    <div class="row my-4">
        <div class="col-6">
            <form wire:submit.prevent="submit">

                <x-input-text name="form.name" label="Name" />
    
                <button class="btn btn-success">Create</button>  
            </form>      
        </div>      
    </div>
</div>
