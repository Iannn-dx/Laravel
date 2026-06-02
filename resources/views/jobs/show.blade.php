<x-layout>
    <x-slot:heading>
        Job
    </x-slot>
    {{-- <h1>From about page!</h1> --}}
    <h2>{{ $job->title }}</h2>
    <p>This job pays {{ $job->salary}} monthly.</p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
