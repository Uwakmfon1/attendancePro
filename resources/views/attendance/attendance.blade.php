<x-layout>


    <div class="rounded p-6 bg-gray-100 mt-10 w-3/6 ml-80">

        <form action="/attendance" method="POST">
            @csrf

            <div class="ml-24 mt-10">
                Date Taken: <input name="date" type="date" value="{{$date}}">
            </div>

            @foreach($students as $student)
                <section class="ml-24 w-3/5 p-16 rounded bg-red-400 mt-10">
                    <p class="font-bold">{{ $student->name }}</p>
                    <div class="flex ">
                        {{--                        <input type="hidden" name="name-{{$student->name}}" value="{{ $student->name }}">--}}
                        {{--                        <input type="hidden" name="id-{{$student->name}}" value="{{ $student->id }}">--}}


                        <label for="absent1-{{$student->id}}">
                            Absent
                        </label>
                        <input type="radio" name="attendance[{{$student->id}}]" id="absent1-{{$student->id}}"
                               @if(!$student->todays_attendance->present)
                                   checked
                               @endif
                               value="absent">

                        <label for="present1-{{$student->id}}">
                            Present
                        </label>
                        <input type="radio" name="attendance[{{$student->id}}]" id="present1-{{$student->id}}"
                               @if($student->todays_attendance->present)
                                   checked
                               @endif
                               value="present">
                    </div>
                </section>
            @endforeach

            <input type="submit" value="submit" class="bg-blue-400 rounded px-4 py-2 ml-24 mt-6">
        </form>
        {{--        <form method="post" action="/attendance">--}}
        {{--            @csrf--}}
        {{--            <input type="date" name="date" id="date">--}}
        {{--            @foreach($count as $student)--}}
        {{--                <section class="ml-24 w-3/5 p-16 rounded bg-red-400 mt-10">--}}
        {{--                    <p class="font-bold">{{ $student->name }}</p>--}}
        {{--                    <div class="flex ">--}}
        {{--                        <input type="hidden" name="name" value="{{ $student->name }}">--}}
        {{--                        <input type="hidden" name="id" value="{{ $student->id }}">--}}
        {{--                        --}}
        {{--                        Absent--}}
        {{--                        <input type="radio" name="status" id="absent1" value="absent">--}}
        {{--                        Present--}}
        {{--                        <input type="radio" name="status" id="present1" value="present">--}}
        {{--                    </div>--}}
        {{--                </section>--}}
        {{--            @endforeach--}}
        {{--            <input type="submit" value="submit" class="bg-blue-400 rounded px-4 py-2 ml-24 mt-6">--}}
        {{--        </form>--}}
    </div>


</x-layout>
