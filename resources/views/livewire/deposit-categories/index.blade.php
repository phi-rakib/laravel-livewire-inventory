<div class="container my-4">
    <x-session-message />

    <x-page-header title="Deposit Category Index" uriText="Create Deposit Category" uri="{{ route('depositCategories.create') }}" />

    <div class="row my-4">
        <div class="col-6">
            @php
                $headers = ['Name', 'Created At'];
                $properties = ['name', 'created_at'];
            @endphp
            
            <x-table :headers="$headers" :properties="$properties" :list="$depositCategories" editRouteName="depositCategories.edit"/>
        </div>
    </div>
</div>