<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1>Items</h1>
                    @foreach($items as $item)
                        <p>{{ $item->itemlisting->name }} ({{ $item->itemListing->price }}) - {{ $item->size }}</p>
                    @endforeach

                    <a href="{{ route('admin.item.create') }}">Create</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
