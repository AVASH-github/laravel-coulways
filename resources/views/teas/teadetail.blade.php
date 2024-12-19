<x-layout>
    <h1>Tea Details</h1>

    <h2 class="text-4xl bg-blue-500 p-3 rounded-xl mt-4">{{$tea['name']}}</h2>
    <h2 class="text-4xl bg-blue-500 p-3 rounded-xl mt-4">{{$tea['price']}}</h2>

    <a class="bg-orange-500 p-4 m-5 rounded-xl" href="/teas">Go back</a>
</x-layout>