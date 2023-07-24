<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-500">
            <h1 class="text-center font-bold font-xl">Register!</h1>

            <form method="POST" action="/signup" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input
                        class="border border-gray-400 p2 w-full"
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        required>

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">UserName</label>
                    <input
                        class="border border-gray-400 p2 w-full"
                        type="text"
                        id="username"
                        name="username"
                        value="{{ old('username') }}"
                        required
                    >

                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input
                        class="border border-gray-400 p2 w-full"
                        type="email"
                        id="email"
                        name="email"
                        {{--                    value="{{ old('email') }}"--}}
                        required
                    >


                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input
                        class="border border-gray-400 p2 w-full"
                        type="password"
                        id="password"
                        name="password"
                        required
                    >

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        class="bg-blue-400 rounded text-white py-2 px-4 hover:bg-blue-500"
                        type="submit"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
