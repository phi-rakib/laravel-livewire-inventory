<div class="container my-4">
    <x-session-message />

    <x-page-header title="Accounts Index" uriText="Create" uri="{{ route('accounts.create') }}" />

    <div class="row my-4">
        @php
            $headers = ['Name', 'Account Number', 'Balance', 'Created At'];
            $properties = ['name', 'account_number', 'balance', 'created_at'];
        @endphp
        
        <x-table :headers="$headers" :properties="$properties" :list="$accounts" editRouteName="accounts.edit"/>
    </div>
</div>
