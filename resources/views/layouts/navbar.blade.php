<div class="w-full bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px:6 lg:px-8">
        <div class="flex items-center justify-between">
            <div class="">
                {{-- lOGO --}}
                <a href="/">
                    <img src="{{asset('img/urbe-logo.svg')}}" alt="" class="w-24">
                </a>
            </div>

            <div class="hidden md:flex items-center">
                <a href="/" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Home</a>
                <a target="_blank" href="http://catalog.urbe.university/" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Catalog</a>
                <a target="_blank" href="http://dspace.urbe.university/home/" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Repository</a>
                <a href="{{ route('databases') }}" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Databases</a>
                <a href="{{ route('docs') }}" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Training & Docs</a>
                <a href="{{ route('about-us') }}" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">About</a>
                <a href="https://outlook.office365.com/owa/calendar/LibraryInstructionBooking@urbe.university/bookings/" target="_blank" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Remote Faculty Instruction</a>
                <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Contact</a>
            </div>

            <div class="md:hidden">
                {{-- Menu items --}}
                <x-jet-dropdown align="right" width="60">
                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                Menu
                            </button>
                        </span>
                    </x-slot>

                    <x-slot name="content">
                        <div class=" w-60">
                            <x-jet-dropdown-link href="http://catalog.urbe.university/">
                                {{ __('Library Catalog') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="http://dspace.urbe.university/home/">
                                {{ __('Repository') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('databases') }}">
                                {{ __('Databases') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('docs') }}">
                                {{ __('Training & Docs') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('about-us') }}">
                                {{ __('About Us') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link target="_blank" href="https://outlook.office365.com/owa/calendar/LibraryInstructionBooking@urbe.university/bookings/">
                                {{ __('Remote Faculty Instruction') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('contact') }}">
                                {{ __('Contact Us') }}
                            </x-jet-dropdown-link>
                        </div>
                    </x-slot>
                </x-jet-dropdown>
            </div>
        </div>
    </div>
</div>

