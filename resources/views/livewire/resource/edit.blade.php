<div>
    <div class="flex items-center justify-end gap-6">
        <x-jet-secondary-button wire:click="$toggle('editDialog')" class="text-blue-600">
            Edit
        </x-jet-secondary-button>

        <x-jet-danger-button wire:click="delete">
            Delete
        </x-jet-danger-button>
    </div>

    <x-jet-dialog-modal wire:model="editDialog">
        <form wire:submit.prevent="update" method="post">
            <x-slot name="title">Edit Resource Name</x-slot>
            <x-slot name="content">
                @csrf
                <div class="mb-3 text-left">
                    <label for="name" class="block font-medium text-sm text-gray-700">Resource Name</label>
                    <input type="text" wire:model.defer="name" id="name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                    @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>

            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('editDialog')">
                    Cancel
                </x-jet-secondary-button>

                <x-jet-button wire:click="update">
                    Update
                </x-jet-button>
            </x-slot>
        </form>
    </x-jet-dialog-modal>
</div>
