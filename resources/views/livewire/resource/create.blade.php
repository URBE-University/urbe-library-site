<div>
    <x-jet-button wire:click="$toggle('createDialog')">
        New
    </x-jet-button>

    <x-jet-dialog-modal wire:model="createDialog">
        <form wire:submit.prevent="create" method="post">
            <x-slot name="title">Add a new resource</x-slot>
            <x-slot name="content">
                @csrf
                <div class="mb-3">
                    <label for="type" class="block font-medium text-sm text-gray-700">Pick a resource type</label>
                    <select wire:model="type" id="type" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                        <option value="null">Select an option</option>
                        <option value="file">File</option>
                        <option value="newsletter">Newsletter</option>
                        <option value="link">Link</option>
                    </select>
                    @error('type') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="block font-medium text-sm text-gray-700">Resource Name</label>
                    <input type="text" wire:model="name" id="name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                    @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>

                @if ($type == 'file' || $type == 'newsletter')
                    <div class="mb-3">
                        <label for="file" class="block font-medium text-sm text-gray-700">Upload file</label>
                        <input type="file" wire:model="resource" id="file" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                        @error('resource') <span class="text-red-600">{{ $message }}</span> @enderror
                    </div>
                @endif

                @if ($type == 'link')
                    <div class="mb-3">
                        <label for="link" class="block font-medium text-sm text-gray-700">Paste link</label>
                        <input type="url" placeholder="https://" wire:model="resource" id="link" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                        @error('resource') <span class="text-red-600">{{ $message }}</span> @enderror
                    </div>
                @endif

            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('createDialog')">
                    Cancel
                </x-jet-secondary-button>

                <x-jet-button wire:click="save">
                    Create
                </x-jet-button>
            </x-slot>
        </form>
    </x-jet-dialog-modal>
</div>
