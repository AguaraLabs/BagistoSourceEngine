<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        {{ __('Promote') }}
    </x-slot:title>

    <div class="flex gap-4 justify-between items-center max-sm:flex-wrap">
        <p class="text-xl text-gray-800 dark:text-white font-bold">
            {{ __('Promote') }}
        </p>

        <div class="flex gap-x-2.5 items-center">
            @if(bouncer()->hasPermission('promote.promotes.manage'))
                <a href="{{ route('admin.promote.create') }}">
                    <div class="primary-button">
                        {{ __('Create Promotion') }}
                    </div>
                </a>
            @endif

        </div>
    </div>

    <x-admin::datagrid src="{{ route('admin.promote.index') }}">

    </x-admin::datagrid>

</x-admin::layouts>
