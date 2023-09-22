<!doctype html>
<title>Attendance App</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer src="{{ asset('assets/js/index.js') }}"></script>

<body style="font-family: Open Sans, sans-serif">
<section>
    <nav class="flex h-20 bg-gray-100 justify-evenly shadow-lg shadow-white-500/50 md:flex md:justify-between md:items-center">
        <h2 class="uppercase text-lg font-bold text-blue-400 py-7 px-2 md:text-3xl">wbmyx</h2>


        <div class="mt-1 md:mt-0 flex items-center">
                <span class="text-xs font-bold uppercase"> {{ auth()->user()->name }}</span>
                <form method="GET" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit" class="text-blue-500 hover:bg-blue-500 hover:text-white py-1 px-2 rounded">Log Out</button>
                </form>
        </div>
    </nav>

    <div> {{ $slot }} </div>

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-8 mt-60">
        &copycopyright @dev_hodu 2023
    </footer>
</section>
</body>
