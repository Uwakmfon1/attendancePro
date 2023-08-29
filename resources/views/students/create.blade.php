<x-layout>
    <div class="bg-gray-200 rounded px-10 py-6 m-16 w-1/2">
        <h2 class="text-bold-300">New Student Registration</h2>

        <form method="post" action="/get-student">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="" name="name" placeholder="" class="font-bold-200"> <br> <br>
            <input type="hidden" name="course_id" value="{{$id}}">

            <label for="regNo">Reg No</label>
            <input type="text" id="" name="regNo" placeholder="" class="font-bold-200"> <br> <br>

            <label for="phoneNo">Phone number</label>
            <input type="text" id="" name="phoneNo" placeholder="" class="font-bold-200"> <br> <br>

            <label for="email">Email</label>
            <input type="email" id="" name="email" placeholder="" class="font-bold-200"> <br> <br>

            <input type="submit" value="submit">
        </form>

    </div>
</x-layout>
