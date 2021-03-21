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
                    <h1>Events</h1>
                    @foreach($events as $event)
                        <p>{{ $event->artist }} - {{ $event->name }} ({{ $event->location }} @ {{ $event->time }}) [{{ $event->description}}]</p>
                        <img src="/storage/{{ $event->image }}"> 
                    @endforeach

                    <a href="/admin/event/create">Create</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
