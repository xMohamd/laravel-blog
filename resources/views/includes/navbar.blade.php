    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg"
                            alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/posts"
                                class="{{ Request::is('posts') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700' }} rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Posts</a>
                            <a href="/posts/trash"
                                class="{{ Request::is('posts/trash') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700' }} hover:text-white rounded-md px-3 py-2 text-sm font-medium">Trash</a>
                            <a href="/posts/create"
                                class="{{ Request::is('posts/create') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700' }} hover:text-white rounded-md px-3 py-2 text-sm font-medium">Add
                                Post</a>
                            <a href="/posts/users"
                                class="{{ Request::is('posts/users') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700' }} hover:text-white rounded-md px-3 py-2 text-sm font-medium">Users</a>

                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <div class="-mr-2 flex md:hidden">
                            <!-- Mobile menu button -->
                            <button type="button"
                                class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <!-- Menu open: "hidden", Menu closed: "block" -->
                                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!-- Menu open: "block", Menu closed: "hidden" -->
                                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="md:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/posts"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Posts</a>
                        <a href="/posts/trash"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Trash</a>
                    </div>
                </div>
    </nav>
