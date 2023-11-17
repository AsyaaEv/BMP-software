<section>
    <div class="w-full h-auto mb-[6rem] ">
        <div class="w-full h-auto mt-[5rem] flex flex-col gap-[10px]">
            <div class="text-center text-text font-bold text-3xl">Our Product</div>
            <div class="text-center text-text opacity-60 font-bold text-lg">Produk-produk yang di buat oleh Bogeng</div>
        </div>
        <div class="container w-full h-auto  mt-[3rem] flex gap-3 overflow-x-scroll">
            @foreach ($products as $product)
                <div
                    class="w-[23rem] h-[26rem] rounded-[24px] scroll-ml-6 shadow-sm bg-card flex justify-center items-center flex-col">
                    <img src="storage/{{ $product->foto }}" alt=""
                        class="object-fit overflow-hidden w-[20rem] h-[12rem]">
                    <div class="w-full h-auto  px-4 mt-4">
                        <div class="text-text font-bold text-xl">{{ $product->title }}</div>
                        <div class="text-text font-bold text-md opacity-60">{{ $product->excerpt }}</div>
                    </div>
                    <div class="flex gap-3 ">
                        <div class="flex items-center">
                            <i class="bi bi-tag"></i>
                            <p class="font-light text-md text-gray-700">{{ $product->price }}</p>
                        </div>


                    </div>
                    <div class="w-full h-auto  flex justify-center items-center mt-4">
                        <a href="#" class="decoration-transparent">
                            <div
                                class="w-[20rem] h-[4rem] rounded-[27px] bg-white flex justify-center items-center hover:cursor-pointer hover:scale-[1.05] transition-all">
                                <div class=" text-lg font-bold text-dasar">Dapatkan Sekarang</div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</section>
