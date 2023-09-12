<x-layout>
    <div class="py-8 px-10">
    @foreach($course as $item)
        <h2 class="font-bold">Welcome To The Attendance page For {{ $item->course_code }} --- {{ $item->course_title }}</h2>
    @endforeach


        <h1 class="py-10">You Have {{ $students->count() }} students taking this course </h1>
        <p class="py-10"> They are:
            @foreach($students as $student)
                <strong class="hover:text-blue-400 w-15">
                    <ul>
                        <li>
                            <a href="#" class="flex space-x-8 ">
                               <span>{{ $student->name }}</span>
                                <span>{{ $student->RegNo }}</span>
                            </a>
                        </li>
                    </ul>
                </strong>
            @endforeach
        </p>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    @if (isset($previous_record))
                        <a href="{{ url($previous_record->url) }}">
                            <div> Previous</div>
                            <p>{{ $previous_record->title }}</p>
                        </a>
                    @endif
                </div>
                <div class="col-6">
                    @if (isset($next_record))
                        <a href="{{ url($next_record->url) }}">
                            <div>Next</div>
                            <p>{{ $next_record->title }}</p>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <br>
        <div class="flex width-64 space-x-8">
            <button class="bg-blue-500 p-2 rounded hover:text-white-400"><a href="/get-student/{{$id}}">Add Students</a></button>
            <button class="bg-blue-500 p-2 rounded hover:text-white-400"><a href="/get-page/{{$id}}/take-attendance">Take Attendance</a></button>
        </div> <br>
    <div>
        <button class="bg-blue-500 p-2 rounded hover:text-white-400"><a href="/get-total/{{$id}}">Total Attendance</a></button>
    </div>
    </div>

</x-layout>
