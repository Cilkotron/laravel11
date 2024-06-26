<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
        <h2 class="font-bold text-lg">{{ $job->title}}</h2>
        <p>This jobs pays is ${{ number_format($job->pay, 2) }} USD/year</p>
        @can('edit', $job)
            <div class="mt-4">
                <x-button href="/jobs/{{ $job->id}}/edit">Edit Job</x-button>
            </div>
        @endcan 
</x-layout>