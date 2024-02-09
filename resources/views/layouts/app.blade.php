<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @stack('css')

</head>

<body>

    <!-- Page Container -->
    <div id="page-container" x-data="{ userDropdownOpen: false, mobileSidebarOpen: false, desktopSidebarOpen: true }" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100"
        x-bind:class="{
            'lg:pl-64': desktopSidebarOpen
        }">

        <!-- Page Sidebar -->
        @include('jiny-ui-tailwind:layouts.sidebar')
        <!-- Page Sidebar -->

        <!-- Page Header -->
        @include('jiny-ui-tailwind:layouts.header')
        <!-- END Page Header -->

        <!-- Page Content -->
        <main id="page-content" class="flex flex-auto flex-col max-w-full pt-16">

            <!-- Page Section -->


                @yield('content')

                <!-- ADD YOUR MAIN CONTENT ABOVE -->
            </div>
            <!-- END Page Section -->
        </main>
        <!-- END Page Content -->

        <!-- Page Footer -->
        @include('jiny-ui-tailwind:layouts.footer')
        <!-- END Page Footer -->
    </div>
    <!-- END Page Container -->

    @livewireScripts
    @stack('scripts')
</body>

</html>
