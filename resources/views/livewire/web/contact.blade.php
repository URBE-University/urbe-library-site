<div>
    <form wire:submit.prevent="submit" method="POST" class="max-w-3xl mx-auto mt-12">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-medium text-sm text-gray-700">Full Name <span class="text-red-600">*</span></label>
            <input type="text" placeholder="John Smith" wire:model="name" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
            @error('name') <span class="text-red-600 text-sm">{{$message}}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="phone" class="block font-medium text-sm text-gray-700">Phone Number (optional)</label>
            <input type="tel" placeholder="7862901234" wire:model="phone" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
        </div>
        <div class="mb-4">
            <label for="email" class="block font-medium text-sm text-gray-700">URBE E-mail <span class="text-red-600">*</span></label>
            <input type="email" placeholder="john.smith@urbe.university" wire:model="email" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
            @error('email') <span class="text-red-600 text-sm">{{$message}}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="message" class="block font-medium text-sm text-gray-700">How can we assist you? <span class="text-red-600">*</span></label>
            <textarea wire:model="message" cols="30" rows="10" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"></textarea>
            @error('message') <span class="text-red-600 text-sm">{{$message}}</span> @enderror
        </div>
        <div class="text-right">
            <x-jet-button wire:click="submit">
                Send Inquiry
            </x-jet-button>
        </div>
    </form>
</div>
