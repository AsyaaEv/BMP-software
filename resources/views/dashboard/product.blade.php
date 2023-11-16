{{-- Lihat Ini di ProductController --}}
<h1 class="font-bold text-4xl text-gray-600 ">Semua Product</h1>
<h2 class="font-normal text-sm text-gray-500 mb-8">Semua Postingan ditampilkan disini</h2>

<a onclick="clickPage('products/create')"
    class="px-4 py-2 rounded-md bg-green-700 flex items-center hover:bg-green-500 text-white no-underline w-[13rem] mb-4 "><i
        class="bi bi-plus-square mr-3"></i>Buat Produk</a>

<div class="w-full px-4">
    @foreach ($products as $product)
        <div class=" flex  rounded-sm mb-2 gap-4">
            <div class="">
                <img src="storage/{{ $product->foto }}" alt="profile"
                    class="aspect-square object-cover rounded-md overflow-hidden w-28 h-28">
            </div>
            <div class="px-4 py-2">
                <h3 class="m-0 font-bold text-gray-800 text-2xl ">{{ $product->title }}</h3>
                <p class=" text-gray-700 text-sm">{{ $product->excerpt }}</p>
                <div class="flex text-gray-700 gap-4">
                    <div class="bg-gray-50 rounded flex"><i class="bi bi-tag mr-3"></i>Rp. {{ $product->price }}</div>
                    <div class="bg-gray-50 rounded flex"><i
                            class="bi bi-person-circle mr-3"></i>{{ $product->user->name }}</div>
                </div>
                <div class="flex gap-2 mt-2 text-white no-underline">
                    <a onclick="clickUpdate({{ $product->id }})"
                        class="bg-blue-500 rounded-full px-4 py-2 flex items-center text-white no-underline">
                        <i class=" bi bi-pencil mr-3"></i>Update</a>
                    <a onclick="clickDelete({{ $product->id }})"
                        class="bg-red-500 rounded-full px-4 py-2  flex items-center text-white no-underline"><i
                            class="bi bi-trash mr-3"></i>delete</a>
                </div>
            </div>
        </div>
    @endforeach


</div>
