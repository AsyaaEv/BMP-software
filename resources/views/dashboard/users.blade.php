<h1 class="font-bold text-4xl text-gray-600 ">Petinggi !bogeng</h1>
<h2 class="font-normal text-sm text-gray-500 mb-8">akun petinggi !bogeng ditampilkan disini</h2>

<div class="w-full px-4">
    @foreach ($users as $user)
        <div class=" flex  rounded-sm mb-2 gap-4">
            <div class="">
                <img src="storage/{{ $user->image }}" alt="profile"
                    class="aspect-square object-cover rounded-md overflow-hidden w-28 h-28">
            </div>
            <div class="px-4 py-2">
                <h3 class="m-0 font-bold text-gray-800 text-2xl ">{{ $user->name }}</h3>
                <p class=" text-gray-700 text-sm">{{ $user->email }}</p>
            </div>
        </div>
    @endforeach


</div>
