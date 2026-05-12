<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot>
    {{-- <h1>From about page!</h1> --}}
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }} : Pays {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>


