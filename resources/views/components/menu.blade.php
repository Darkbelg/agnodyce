<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-red-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <span class="block h-8 w-auto text-white">Agnodyce</span>
{{--                    <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">--}}
{{--                    <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">--}}
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{route('video')}}" class="{{ request()->is('/') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('video') ? 'aria-current="page"' : '' }}>Videos</a>

                        <a href="{{route('channel')}}" class="{{ request()->is('channels') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('channels') ? 'aria-current="page"' : '' }}>Channels</a>

                        <a href="{{route('playlist')}}" class="{{ request()->is('playlist') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('playlist') ? 'aria-current="page"' : '' }}>Playlists</a>

{{--                        <a href="{{route('faq')}}" class="{{ request()->is('faq') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('faq') ? 'aria-current="page"' : '' }}>FAQ</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{route('video')}}" class="{{ request()->is('/') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('video') ? 'aria-current="page"' : '' }}>Videos</a>

            <a href="{{route('channel')}}" class="{{ request()->is('channels') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('channels') ? 'aria-current="page"' : '' }}>Channels</a>

            <a href="{{route('playlist')}}" class="{{ request()->is('playlist') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('playlist') ? 'aria-current="page"' : '' }}>Playlists</a>

{{--            <a href="{{route('faq')}}" class="{{ request()->is('faq') ? 'menu-btn-active' : 'menu-btn' }}" {{ request()->is('faq') ? 'aria-current="page"' : '' }}>FAQ</a>--}}
        </div>
    </div>
</nav>

