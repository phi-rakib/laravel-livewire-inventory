<div class="container my-4">
    <x-session-message />

    <x-page-header title="Category Index" uriText="Create Category" uri="{{ route('categories.create') }}" />

    <div class="row">
        <div class="col-12">
            @php
                $headers = ['Name'];
                $properties = ['name'];
            @endphp
            
            <x-table :headers="$headers" :properties="$properties" :list="$categories" editRouteName="categories.edit"/>
        </div>
    </div>
</div>
