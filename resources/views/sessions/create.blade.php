<x-layout>

    <section>
        <main
            class="max-w-sm p-10 mx-auto mt-20 bg-gray-200 border border-gray-200 p-6 rounded-xl
            shadow-lg shadow-white-500/50 md:max-w-lg">

            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form method="POST" action="/sign-in" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >


                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6 justify-between align-middle">
                    <button type="submit"
                            class="bg-blue-400 ml-20 block text-white rounded py-2 px-4 hover:bg-blue-500
                            md:flex lg:flex"
                    >
                        Log In
                    </button>
                    <a href="/signup">Don't Have An Account Yet?
                        <span class="text-blue-500 underline">
                         Sign Up
                     </span>
                    </a>
                </div>
                @if($errors->any())
                    <div class="">
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 list-none">{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
            </form>
        </main>
    </section>

</x-layout>
