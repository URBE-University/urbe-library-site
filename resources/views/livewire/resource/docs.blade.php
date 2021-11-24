<div>
    <input type="search" placeholder="Search resources..." wire:model="query" class="w-full sm:w-1/3 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1">

    <ul class="my-12">
        @forelse ($resources as $resource)
        <li class="flex items-center justify-between border-b py-2 hover:bg-gray-100">
            @if ($resource->type == 'file')
                <a href="{{ asset($resource->url) }}" class="flex items-center gap-8 w-full" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <div class="text-sm text-black">{{ $resource->name }}</div>
                </a>
            @else
                <a href="{{ $resource->url }}" class="flex items-center gap-8 w-full" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    <div class="text-sm text-black">{{ $resource->name }}</div>
                </a>
            @endif
        </li>
        @empty

        @endforelse
    </ul>
</div>
