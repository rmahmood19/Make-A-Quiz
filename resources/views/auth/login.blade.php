<x-layout>
    <h1 class="text-6xl md:text-9xl text-center mx-auto font-bold text-transparent bg-clip-text
         bg-gradient-to-r from-green-500 to-blue-800">Make a Quiz</h1>

        <div class="flex justify-center">
            <form action="{{route('login')}}" method="POST"
                  class="bg-gradient-to-r from-green-500 to-blue-800 w-96 rounded py-8 px-4">
                @csrf

                    <h3 class="text-gray-200 text-center text-4xl">Login</h3>


                                <input type="email" name="email" class="block px-2 py-2 my-2 rounded w-full" placeholder="Email" value="" />



                    <input type="password" name="password" class="block px-2 py-2 my-2 rounded w-full" placeholder="Password" value="" />
                <div class="text-center">
                    <button type="submit" class=" w-32 rounded bg-gray-100 text-green-900 text-2xl py-2">Login</button>

                </div>
            </form>
        </div>
</x-layout>
