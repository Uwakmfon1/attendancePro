{{--
** how to create the register controller
create a form with the register course
Allow user input

--}}

<x-layout>
    <main
        class="max-w-lg mx-auto mt-10 bg-gray-200 border border-gray-200 p-6 rounded-xl shadow-lg shadow-white-500/50">
        <h1 class="text-center font-bold text-xl">Register A course</h1>

        <form method="post" action="/create-course" class="">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 mt-8 uppercase font-bold text-xs text-gray-700"
                       for="course_title">
                    Enter Course Name
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="course_title"
                       id="course_title"
                       required
                >
                @error('course_title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="block mb-2 mt-6 uppercase font-bold text-xs text-gray-700"
                       for="course_code"
                >
                    Enter Course Title
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="course_code"
                       id="course_code"
                       required
                >
                @error('course_code')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <button type="submit" class="rounded bg-blue-300 p-4 mt-3 hover:bg-blue-400">Submit</button>
            </div>
        </form>
    </main>
</x-layout>
