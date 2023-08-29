<x-layout>
    <h2>Welcome To My World</h2>
    @foreach($students as $student)
        <ul>
            <li>{{ $student->name }}</li>
        </ul>
    @endforeach
</x-layout>
