<section>
    <div class="w-full h-auto ">
        <div class="w-full h-auto flex flex-col gap-[10px]">
            <div class="text-center text-text font-bold text-3xl">Testimoni</div>
            <div class="text-center text-text opacity-60 font-bold text-lg">Penilaian customer yang telah percaya dengan
                layanan kami</div>
        </div>
        <div
            class="container w-full h-[25rem] gap-3  mt-[3rem] flex mb-4 overflow-auto border-2 justify-center items-center">
            @foreach ($testimonies as $testimony)
                <div
                    class="w-[478px] h-[281px] rounded-[24px] shadow-sm bg-card flex flex-wrap justify-center items-center flex-col  transition-all hover:scale-[1.05] hover:cursor-pointer">
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
                        <div class="font-semibold text-text opacity-60 text-lg">{{ $testimony->he_say }}</div>
                    </div>
                </div>
            @endforeach






        </div>
    </div>
</section>
