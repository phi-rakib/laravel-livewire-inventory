<div class="container my-4">
    <x-page-header title="Expense Category Index" uriText="Create Expense Category" uri=""/>

    <x-session-message />

    @php
        $headers = ['Name', 'Created At'];
        $properties = ['name', 'created_at'];
    @endphp
    <x-table :headers="$headers" :properties="$properties" :list="$expenseCategories" editRouteName="" />
</div>