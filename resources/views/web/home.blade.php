<x-guest-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Banner --}}
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1 flex flex-col justify-center text-left">
                <div class="text-3xl font-semibold text-gray-700">Library Services</div>
                <div class="text-4xl font-black mt-2"><span class="text-blue-700">Books</span> and <span class="text-blue-700">Learning Resources</span></div>
                <form action="http://catalog.urbe.university/cgi-bin/koha/opac-search.pl" method="get" target="_blank">
                    <div class="mt-8">
                        <input type="search" placeholder="Search the library catalog" name="q" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1">
                        <button type="submit" class="bg-blue-700 text-white rounded-md px-3 py-2 shadow-sm">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <div>
                    <img src="https://source.unsplash.com/featured/?books" alt="" class="w-full h-96 object-cover">
                </div>
            </div>
        </div>

        {{-- Getting Started Guide --}}
        <div class="my-12 py-12 max-w-full mx-auto text-center bg-blue-50 rounded-md">
            <div class="text-3xl font-extrabold">Need help using the library resources?</div>
            <div class="text-lg font-light mt-2">Download our guide below or watch our Getting Started webinars <a href="" class="text-blue-500 hover:underline">here</a>.</div>
            <div class="block mt-4">
                <a href="" class="bg-blue-700 text-white rounded-md px-3 py-2 shadow-sm">Download Guide</a>
            </div>
        </div>

        <div class="my-12 py-12 max-2-full mx-auto">
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-4 text-3xl font-extrabold mx-auto mb-4">How can we assist you?</div>
                <div class="col-span-4 sm:col-span-1 text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                    <div class="text-lg font-bold">Public databases</div>
                    <div class="mt-2">Navigate and search for information using the Open Access databases available to the general public at URBE University</div>
                </div>
                <div class="col-span-4 sm:col-span-1 text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                    <div class="text-lg font-bold">University resources catalog</div>
                    <div class="mt-2">Search through our learning resources catalog, and find books and other materials needed for your courses.</div>
                </div>
                <div class="col-span-4 sm:col-span-1 text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <div class="text-lg font-bold">Private databases</div>
                    <div class="mt-2">Databases of closed access only available to our students and faculty for academic development purposes.</div>
                </div>
                <div class="col-span-4 sm:col-span-1 text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <div class="text-lg font-bold">Academic repository</div>
                    <div class="mt-2">Databases only available to the URBE University community, showcasing an ample catalog of works published by and for our students, faculty and qualified staff members.</div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
