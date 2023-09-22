<x-layout>

    <div class="rounded ml-10 p-6 bg-gray-300 mt-10 w-2/5  md:p-6 md:ml-80">

        <form action="/attendance/{id}" method="POST">
            @csrf
            <div class="ml-4 mt-10 flex md:ml-24">
                <label for="date"> Date Taken:</label>
                <input name="date" type="date" value="{{ $date }}">
            </div>
            <input type="hidden" name="course_id" value="{{ $id }}">

            @foreach($students as $student)
                <section class="ml-14 w-4/6 rounded bg-gray-100 mt-10 md:p-16">
                    <p class="font-bold">{{ $student->name }}</p>
                    <div class="block ">
                        <div class="flex">
                            <label for="absent1-{{ $student->id }}">
                                Absent
                            </label>

                            <input type="radio" name="attendance[{{ $student->id }}]" id="absent1-{{ $student->id }}"
                                   @if(!$student->todays_attendance?->present)
                                       checked
                                   @endif
                                   value="absent">
                        </div>


                        <div class="flex">
                            <label for="present1-{{ $student->id }}">
                                Present
                            </label>
                            <input type="radio" name="attendance[{{ $student->id }}]" id="present1-{{ $student->id }}"

                                   @if($student->todays_attendance?->present)
                                       checked
                                   @endif
                                   value="present">
                        </div>


                    </div>
                </section>
            @endforeach
            <div class="flex">
                <button class="bg-blue-400 rounded px-4 py-2 mt-6 ml-24 :hover bg-red-200"><a href="/get-page/{{ $id }}">Back</a></button>
                <input type="submit" value="submit" class="bg-blue-400 rounded px-4 py-2 ml-10 mt-6">
            </div>

        </form>

    </div>

    @if($errors->any())
        <div class="">
            @foreach($errors->all() as $error)
                <li class="text-red-500 list-none">
                    {{ $error }}
                </li>
            @endforeach
        </div>
    @endif

</x-layout>
