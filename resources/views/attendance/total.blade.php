<x-layout1>
    <div class="flex">
        <h2 class="text-2xl font-bold-300 m-6">Welcome To Total Attendance Page</h2>
        <a href="/get-page/{{ $id }}" class="mt-8 font-bold-300  :hover text-blue-500">Go Back</a>
    </div>


    <table class="border-collapse border border-slate-400 m-4"
           style="border:1px solid black; border-collapse:collapse;">
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


</x-layout1>
