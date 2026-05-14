<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot>
    {{-- <h1>From about page!</h1> --}}
    <div class="space-y-4">
        @foreach ($jobs as $job) 
            <a href="/jobs/{{ $job['id'] }}" class=" block px-4 py-6 border border-gray rouded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name  }}
                </div>
               <div>
                 {{ $job['title'] }} : Pays {{ $job['salary'] }}
               </div>
            </a>
        @endforeach

        <div>
        {{ $jobs->links() }}
        </div>
    </div>
</x-layout>


