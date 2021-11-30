<div>
    <div class="grid grid-cols-4 gap-10 mb-20">

        @forelse ($issues as $issue)
        <div class="col-span-4 sm:col-span-2 md:col-span-1">
            <a href="{{ asset($issue->url) }}" target="_blank" class="gap-2 text-center">
                <img src="{{asset($issue->thumbnail)}}" alt="{{$issue->name}}" class="sm:w-full h-auto shadow-lg">
                <div class="mt-4 font-semibold">
                    {{$issue->name}}
                </div>
            </a>
        </div>
        @empty

        @endforelse
    </div>
</div>
