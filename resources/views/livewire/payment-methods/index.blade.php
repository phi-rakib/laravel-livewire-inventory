<div class="container my-4">
    <x-session-message />

    <x-page-header title="Payment Method Index" uriText="Create Payment Method" uri="{{ route('paymentMethods.create') }}" />

    @php
        $headers = ['Name', 'Created At'];
        $properties = ['name', 'created_at'];
    @endphp

    <x-table :headers="$headers" :properties="$properties" :list="$paymentMethods" editRouteName="paymentMethods.edit"/>
</div>