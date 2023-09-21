<x-layout1>
    <div class="flex md:flex">
        <h2 class="text-lg ml-1/5 m-6 md:text-2xl md:ml-20">Welcome To The Total Attendance Page</h2>
        <button class="h-3/5 bg-blue-400 text-white-400 mt-5 p-2 rounded">
            <a href="/get-page/{{ $id }}" class="mt-7 text-white-500 font-bold-300 pt-0 :hover">Back</a>
        </button>
    </div>


    <table class="hidden md:flex ml-20 m-4">
        <tr>
            <th class="text-red-400" style="border:1px solid black; border-collapse:collapse;padding:1em;">Student
                Name
            </th>
            <th style="border:1px solid black; border-collapse:collapse;padding:1em;">Student REG NO.</th>
            <th style="border:1px solid black; border-collapse:collapse;padding:1em;">No. of Classes</th>
            <th style="border:1px solid black; border-collapse:collapse;padding:1em;">Times Attended</th>
            <th style="border:1px solid black; border-collapse:collapse;padding:1em;">% Attendance</th>
        </tr>

        @foreach($totals as $studentTotal)

            <tr>
                <td class="p-4"
                    style="border:1px solid black; border-collapse:collapse;padding-left:3.5em;">{{ $studentTotal->name }}</td>
                <td style="border:1px solid black; border-collapse:collapse;padding-left:1.5em;">{{ $studentTotal->RegNo }}</td>
                <td style="border:1px solid black; border-collapse:collapse;padding-left:3.5em;">{{ $studentTotal->max_attendance }}</td>
                <td style="border:1px solid black; border-collapse:collapse;padding-left:3.5em;">{{ $studentTotal->student_attendance }}</td>
                <td style="border:1px solid black; border-collapse:collapse;padding-left:3.5em;">{{ $studentTotal->percentage_attendance . "%" }}
                </td>
            </tr>

        @endforeach

    </table>
    @foreach($totals as $studentTotal)

                <div class="md:hidden" style="margin-left:10%;">
                    <div class="flex"><h2 class="font-bold mr-1">Name: </h2> <span>{{ $studentTotal->name }}</span>
                    </div>
                    <div class="flex"><h2 class="font-bold mr-1">Reg NO.:</h2> <span>{{ $studentTotal->RegNo }}</span>
                    </div>
                    <div class="flex"><h2 class="font-bold mr-1">Max Attendance: </h2>
                        <span>{{ $studentTotal->max_attendance }}</span></div>
                    <div class="flex"><h2 class="font-bold mr-1">Student's Attendance: </h2>
                        <span>{{ $studentTotal->student_attendance }}</span></div>
                    <div class="flex"><h2 class="font-bold mr-1">% Attendance: </h2>
                        <span>{{ $studentTotal->percentage_attendance . "%"}}</span></div>
                </div>
        <br>
    @endforeach
</x-layout1>
