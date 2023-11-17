<section id="product">
    <div class="w-full h-auto mb-[6rem] ">
        <div class="w-full h-auto mt-[5rem] flex flex-col gap-[10px]">
            <div class="text-center text-text font-bold text-3xl">Our Product</div>
            <div class="text-center text-text opacity-60 font-bold text-lg">Produk-produk yang di buat oleh Bogeng</div>
        </div>
        <div class="container w-full h-auto  mt-[3rem] flex gap-4 overflow-x-scroll scrollbar-hide">
            @foreach ($products as $product)
                <div class="flex justify-center items-center flex-col rounded-[24px] p-4 shadow-sm bg-card md:w-1/4">
                    <img src="storage/{{ $product->foto }}" alt=""
                        class="object-fit overflow-hidden w-[20rem] h-[12rem]">
                    <div class="w-full h-auto mt-4">
                        <div class="text-text font-bold text-xl">{{ $product->title }}</div>
                        <div class="text-text font-bold text-md opacity-60">{{ $product->excerpt }}</div>
                    </div>
                    <div class="flex w-full mt-2">
                        <div class="flex gap-2">
                            <i class="bi bi-tags"></i>
                            <p class="text-gray-600 ">Rp. {{ $product->price }}</p>
                        </div>
                    </div>
                    <div class="w-full h-auto  flex justify-center items-center mt-2">
                        <a href="#" class="decoration-transparent w-full">
                            <div
                                class=" px-4 py-2  rounded-md bg-white flex justify-center items-center hover:cursor-pointer hover:scale-[1.05] transition-all">
                                <div class=" text-lg font-bold text-dasar">Dapatkan Sekarang</div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
