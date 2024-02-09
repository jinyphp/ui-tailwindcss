<nav id="page-sidebar"
    class="flex flex-col fixed top-0 left-0 bottom-0 w-full lg:w-64 h-full bg-[#313947] text-gray-200 z-50 transform transition-transform duration-500 ease-out"
    x-bind:class="{
        '-translate-x-full': !mobileSidebarOpen,
        'translate-x-0': mobileSidebarOpen,
        'lg:-translate-x-full': !desktopSidebarOpen,
        'lg:translate-x-0': desktopSidebarOpen,
    }"
    aria-label="Main Sidebar Navigation">
    <!-- Sidebar Header -->
    <div
        class="h-16 bg-gray-600 bg-opacity-25 flex-none flex items-center justify-between lg:justify-center px-4 w-full">
        <!-- Brand -->
        <a href="/admin"
            class="inline-flex items-center space-x-2 font-bold text-lg tracking-wide text-white-600 hover:text-white-400 text-white hover:opacity-75">

            <span>Admin</span>
        </a>
        <!-- END Brand -->

        <!-- Close Sidebar on Mobile -->
        <div class="lg:hidden">
            <button type="button"
                class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-transparent text-white opacity-75 hover:opacity-100 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:opacity-75"
                x-on:click="mobileSidebarOpen = false">
                <svg class="hi-solid hi-x inline-block w-4 h-4 -mx-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <!-- END Close Sidebar on Mobile -->
    </div>
    <!-- END Sidebar Header -->

    <!-- Sidebar Navigation -->
    <div class="overflow-y-auto">
        <div class="p-4 w-full">
            <ul class="text-gray-300 space-y-1">
                <li>
                    <!-- -->
                    <div>
                        <a href="/admin"
                            class="flex items-center px-3 py-2 hover:bg-gray-800 hover:bg-opacity-50 hover:text-white rounded-t transition ease-out duration-100">
                            {{--@icon("home.svg")--}}
                            <span class="grow text-sm font-medium">Dashboard</span>
                            <!----> <!---->
                        </a>
                    </div>
                    <!---->
                </li>
            </ul>
            <!-- menu tree -->

            @include("jiny-ui-tailwind::layouts.navigation")

            <nav class="pace-ys-1">
                <div class="px-3 pt-5 pb-2 text-xs font-medium uppercase tracking-wider text-gray-400">Account
                </div>
                <a href="javascript:void(0)"
                    class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
                    <span class="flex-none flex items-center opacity-50">
                        <svg class="hi-outline hi-user inline-block w-5 h-5" stroke="currentColor" fill="none"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="py-2 grow">Profile</span>
                </a>
                <a href="javascript:void(0)"
                    class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
                    <span class="flex-none flex items-center opacity-50">
                        <svg class="hi-outline hi-cog inline-block w-5 h-5" stroke="currentColor" fill="none"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    <span class="py-2 grow">Settings</span>
                </a>
                <a href="javascript:void(0)"
                    class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
                    <span class="flex-none flex items-center opacity-50">
                        <svg class="hi-outline hi-lock-open inline-block w-5 h-5 text-red-300" stroke="currentColor"
                            fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span class="py-2 grow">Log out</span>
                </a>
            </nav>
        </div>
    </div>
    <!-- END Sidebar Navigation -->
</nav>
