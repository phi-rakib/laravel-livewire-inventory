<div class="container my-4">

    <x-session-message />
    
    <x-page-header title="Brand Index" uriText="Create Brand" uri="{{ route('brands.create') }}" />

    <div class="row">
        <div class="col-md-6">
            @php
                $headers = ['Name'];
                $properties = ['name'];
            @endphp
            
            <x-table :headers="$headers" :properties="$properties" :list="$brands" editRouteName="brands.edit"/>
        </div>
    </div>
</div>
