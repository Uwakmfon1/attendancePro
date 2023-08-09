<x-layout>




    @foreach($count as $student)
        <form class="w-px-500 w-96 ml-96 rounded p-6 p-md-3 bg-red-400 mt-10" action="#" method="">
            <p class="font-bold">{{ $student->name }}</p>
            <div class="flex ">
                <input type="radio" name="present">Absent
                <input type="radio" name="present">Present
            </div>
        </form>
    @endforeach

    <section class="w-96 h-10 bg-blue-200 ml-96">
        <div class="">
            {{ $count->links() }}
        </div>
    </section>


</x-layout>
