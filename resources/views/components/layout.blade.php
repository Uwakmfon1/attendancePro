<!doctype html>
<title>Attendance App</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer src="{{ asset('assets/js/index.js') }}"></script>

<body style="font-family: Open Sans, sans-serif">
<section>
        <nav class="h-20 bg-gray-100 shadow-lg shadow-white-500/50 md:flex md:justify-between md:items-center">
            <h2 class="uppercase text-3xl font-bold text-blue-400 p-6">wbmyx</h2>


        <div class="hidden mt-8 md:mt-0 items-center md:flex">

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownId" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                </ul>
            </div>

        @auth
                <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</span>
                <form method="GET" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit" class="text-blue-500 hover:bg-blue-500 hover:text-white py-1 px-2 rounded">Log Out</button>
                </form>
            @else
                <a href="/signup" class="text-xs font-bold uppercase">Register</a>
                <a href="/sign-in" class="ml-6 text-xs font-bold uppercase">Login</a>
            @endauth

        </div>
    </nav>

    <div> {{ $slot }} </div>

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-8 mt-80">
        &copycopyright @dev_hodu 2023
    </footer>
</section>
</body>
