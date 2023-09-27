<x-layout>
    <div class="w-4/6 bg-gray-200 ml-30 rounded px-10 py-6 m-16 md:ml-80 md:w-1/3">
        <h2 class="font-extrabold  md:mb-2">New Student Registration</h2>

        <form method="post" action="/get-student">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="" name="name" placeholder="" class="font-bold-200"> <br> <br>
            <input type="hidden" name="course_id" value="{{$id}}">

            <label for="regNo">Reg No</label>
            <input type="text" id="" name="regNo" placeholder="" class="font-bold-200"> <br> <br>

            <label for="phoneNo">Phone</label>
            <input type="text" id="" name="phoneNo" placeholder="" class="font-bold-200"> <br> <br>

            <label for="email">Email</label>
            <input type="email" id="" name="email" placeholder="" class="font-bold-200"> <br> <br>

            <input type="submit" value="submit" class="ml-10 bg-blue-400 p-2 rounded">

        </form>
    </div>
</x-layout>
