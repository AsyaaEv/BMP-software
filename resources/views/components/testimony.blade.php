<section id="testimony">
    <div class="container h-auto mb-10 ">
        <div class="w-full h-auto flex flex-col gap-[10px]">
            <div class="text-center text-text font-bold text-3xl">Testimoni</div>
            <div class="text-center text-text opacity-60 font-bold text-lg">Penilaian customer yang telah percaya dengan
                layanan kami</div>
        </div>
        <div class="container h-80 items-center w-full  mt-[3rem] flex gap-10 overflow-x-scroll scrollbar-hide">
            @foreach ($testimonies as $testimony)
                <div
                    class="w-1/3 p-3 border rounded-3xl shadow-sm bg-card hover:bg-bg transition-all hover:scale-[1.05] hover:cursor-pointer">
                    <div class="w-full h-auto flex items-center gap-[10px] px-8 mb-4">
                        <img src="storage/{{ $testimony->image_consumer }}" alt=""
                            class="w-[57px] h-[57px] rounded-[50%] object-cover">
                        <div class="font-bold text-text text-xl">{{ $testimony->name_consumer }}</div>
                    </div>
                    <div class="w-full h-auto px-8 mb-2">
                        @for ($star = 0; $star < $testimony->stars; $star++)
                            <i class="bi bi-star-fill text-2xl text-dasar"></i>
                        @endfor
                    </div>
                    <div class="w-full h-auto px-8">
                        <div class="font-semibold text-text text-md ">{{ $testimony->he_say }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
