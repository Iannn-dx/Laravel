<x-layout>
    <x-slot:heading>
        Job
    </x-slot>
    {{-- <h1>From about page!</h1> --}}
    <h2>{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} monthly.</p>
</x-layout>
