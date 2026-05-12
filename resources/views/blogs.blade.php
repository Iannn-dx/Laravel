<x-layout>
    <x-slot:heading>
        Blogs Listing
    </x-slot>
    <ul>
        @foreach ($blogs as $blog)
            <li>
                <a href="/blogs{{ $blog['$id'] }}">
                    <h2>{{ $blog['name'] }}</h2>
                </a>
            </li>
            @endforeach
    </ul>
</x-layout>
