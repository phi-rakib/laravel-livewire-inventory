<div class="container my-4">

    <x-page-header title="Deposit Category Create" uriText="Back" uri="{{ route('depositCategories.index') }}" />

    <div class="row-my-4">
        <div class="col-6">
            <form wire:submit.prevent="save">

                <x-input-text name="form.name" label="Name" />

                <button type="submit" class="btn btn-success">Create</button>
                
            </form>
        </div>
    </div>
</div>