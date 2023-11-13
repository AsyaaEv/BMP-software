<nav class="w-full h-[6rem] flex justify-between px-[2rem]">
    <div class=" flex justify-between w-full items-center">

        <div class="">
            <div class="font-bold text-text">Bogeng</div>
        </div>
        <div class="midele mt-3 text-sm lg:inline hidden">
            <ul class="p-0 flex gap-3">
                <li class="font-semibold hover:scale-[1.1] transition-all hover:cursor-pointer">
                    <a href="#" class="decoration-transparent text-text">Home</a>
                </li>
                <li class="font-semibold hover:scale-[1.1] transition-all hover:cursor-pointer">
                    <a href="#" class="decoration-transparent text-text">About</a>
                </li>
                <li class="font-semibold hover:scale-[1.1] transition-all hover:cursor-pointer">
                    <a href="#" class="decoration-transparent text-text">Features</a>
                </li>
                <li class="font-semibold hover:scale-[1.1] transition-all hover:cursor-pointer">
                    <a href="#" class="decoration-transparent text-text">Testimony</a>
                </li>
                <li class="font-semibold hover:scale-[1.1] transition-all hover:cursor-pointer">
                    <a href="#" class="decoration-transparent text-text">Product</a>
                </li>
                <li class="font-semibold hover:scale-[1.1] transition-all hover:cursor-pointer">
                    <a href="#" class="decoration-transparent text-text">Contact</a>
                </li>
            </ul>
        </div>
        <div class="w-auto h-full flex justify-center items-center">
            <div
                class="w-[161px] h-[44px] bg-dasar rounded-[27px] flex justify-center items-center shadow-md hover:scale-[1.1] transition-all">
                <div class="text-white font-semibold text-[0.9rem]">Dapatkan Sekarang</div>
            </div>
        </div>
    </div>
    <div class="w-auto h-full flex justify-center items-center">

        <div class="w-auto h-full flex justify-center items-center ml-[1rem] md:hidden ">
            <div class="w-[2rem] h-[2rem] rounded-[50%] bg-slate-200 flex justify-center items-center hover:scale-[1.1] transition-all hover:cursor-pointer"
                id="menu">
                <div class="text-[1.2rem]"><i class="bi bi-list"></i></div>
            </div>
        </div>
    </div>
    <div class="absolute w-auto h-auto bg-dasar mt-[6rem] right-0 mr-[3rem] rounded-[10px] flex px-4 shadow-xl invisible"
        id="navbar">
        <ul class="p-0">
            <li
                class="w-[7rem] font-semibold text-white bg-blue-950/30 rounded-[10px] text-center mt-3 mb-2 shadow-md hover:scale-[1.1] transition-all hover:cursor-pointer">
            </li>
            <li
                class="font-semibold text-white bg-blue-950/30 rounded-[10px] text-center mt-2 mb-2 shadow-md hover:scale-[1.1] transition-all hover:cursor-pointer">
                <a href="#" class="decoration-transparent text-white">Home</a>
            </li>
            <li
                class="font-semibold text-white bg-blue-950/30 rounded-[10px] text-center mt-2 mb-2 shadow-md hover:scale-[1.1] transition-all hover:cursor-pointer">
                <a href="#" class="decoration-transparent text-white">About</a>
            </li>
            <li
                class="font-semibold text-white bg-blue-950/30 rounded-[10px] text-center mt-2 mb-2 shadow-md hover:scale-[1.1] transition-all hover:cursor-pointer">
                <a href="#" class="decoration-transparent text-white">Features</a>
            </li>
            <li
                class="font-semibold text-white bg-blue-950/30 rounded-[10px] text-center mt-2 mb-2 shadow-md hover:scale-[1.1] transition-all hover:cursor-pointer">
                <a href="#" class="decoration-transparent text-white">Testimony</a>
            </li>
            <li
                class="font-semibold text-white bg-blue-950/30 rounded-[10px] text-center mt-2 mb-2 shadow-md hover:scale-[1.1] transition-all hover:cursor-pointer">
                <a href="#" class="decoration-transparent text-white">Product</a>
            </li>
            <li
                class="font-semibold text-white bg-blue-950/30 rounded-[10px] text-center mt-2 shadow-md hover:scale-[1.1] transition-all hover:cursor-pointer">
                <a href="#" class="decoration-transparent text-white">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    const menu = document.getElementById('menu');
    const navbar = document.getElementById('navbar');
    let toggle = 0;

    // navbar.classList.add('invisible')

    menu.addEventListener('click', () => {
        if (toggle == 0) {
            navbar.classList.remove('invisible')
            toggle = 1
        } else {
            navbar.classList.add('invisible')
            toggle = 0
        }
    })
</script>
