<section id="product">
    <div class="w-full h-auto mb-[6rem] ">
        <div class="w-full h-auto mt-[5rem] flex flex-col gap-[10px]">
            <div class="text-center text-text font-bold text-3xl">Our Product</div>
            <div class="text-center text-text opacity-60 font-bold text-lg">Pilihlah sesuai kebutuhan Anda</div>
        </div>
        <div class="container w-full h-auto  mt-[3rem] flex gap-10 overflow-x-scroll scrollbar-hide">
            @foreach ($products as $product)
                <div class="flex justify-center items-center flex-col rounded-[24px] p-4 shadow-sm bg-card">
                    <img src="storage/{{ $product->foto }}" alt=""
                        class="object-fit overflow-hidden w-[20rem] h-[12rem]">
                    <div class="w-full h-auto mt-4">
                        <div class="text-text font-bold text-xl">{{ $product->title }}</div>
                        <div class="text-text font-bold text-md opacity-60">{{ $product->excerpt }}</div>
                    </div>
                    <div class="w-full h-auto  flex justify-center items-center mt-4">
                        <a href="#" class="decoration-transparent">
                            <div
                                class="w-[20rem] h-[3.5rem] rounded-[27px] bg-white flex justify-center items-center hover:cursor-pointer hover:scale-[1.05] transition-all">
                                <div class=" text-lg font-bold text-dasar">Dapatkan Sekarang</div>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
</section>
