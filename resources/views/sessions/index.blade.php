<x-layout>
    <section class="m-10">
        <x-hellocard>
            <div>
                <h2 class="text-2xl font-bold">Welcome To the Courses Page</h2>
                <p>These are a list of your courses</p>
            </div>
        </x-hellocard>
        @auth
            @foreach($courses as $courseCode)
                <ol class="px-10">

                    <li class="hover:text-blue-700">
                        <a href="/get-page/{{ $courseCode['id'] }}">{{ $courseCode['course_code'] }} --- {{ $courseCode['course_title'] }}</a>
                    </li>
                </ol>
            @endforeach
        @endauth
        <br><br>
        <div class="px-10">


            <a href="/register-courses" class="mt-15 hover:text-white-500 bg-blue-500 rounded py-2 px-1">
                REGISTER NEW  COURSES
            </a>
        </div>
    </section>
</x-layout>
