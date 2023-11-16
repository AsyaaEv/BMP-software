<x-header :$page />

<div class="w-full h-screen flex">
    <div class="w-[45%] h-screen bg-slate-100 shadow-xl flex flex-col">
        <div class="w-full h-[30%] flex px-[3rem] pt-[2rem] flex-col">
            <div class="font-bold text-dasar text-6xl mb-4">Bogeng<span class="text-text">Company</span></div>
            <div class="font-bold text-text text-2xl opacity-60">Dapatkan website profesional</div>
            <div class="font-bold text-text text-2xl opacity-60">untuk bisnis anda</div>
        </div>
        <div class="w-full h-[70%] flex justify-center items-center">
            <img src="{{ asset('img/vectorRB.png') }}" alt="" class="w-[30rem] h-[25rem] object-cover">
        </div>
    </div>
    <div class="w-[55%] h-screen">
        <div class="w-full h-[17rem]  flex justify-center items-center flex-col">
            <img src="{{ asset('img/logoB.png') }}" class=" absolute" alt="" id="logoB">
            <div class="font-bold text-text text-4xl text-center  mt-[11rem]">Welcome Back</div>
            <div class="font-semibold opacity-60 text-text text-lg text-center  ">Login to your admin account with email
                and password.</div>
        </div>
        <div class="w-full h-[27.2rem] flex justify-center items-center">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="w-[35rem] h-[23rem] flex flex-col">
                    <label for="" class="font-semibold text-text opacity-60 text-lg mb-2">Username</label>
                    <i class="bi bi-envelope-open-fill absolute translate-y-[2.8rem] translate-x-[1rem] text-3xl text-dasar"
                        id="emailOpen"></i>
                    <i class="bi bi-envelope-fill absolute translate-y-[2.8rem] translate-x-[1rem] text-3xl text-dasar invisible"
                        id="emailTutup"></i>
                    <input type="text"
                        class="w-full h-[3.5rem] rounded-[10px] pl-[3.5rem] border-1 border-slate-400 bg-slate-200 focus:outline-dasar"
                        placeholder="Email Anda" id="inputEmail" name="username">
                    <label for="" class="font-semibold text-text opacity-60 text-lg mb-2 mt-4">Password</label>
                    <i class="bi bi-unlock-fill absolute translate-y-[10rem] translate-x-[1rem] text-3xl text-dasar"
                        id="lockOpen"></i>
                    <i class="bi bi-lock-fill absolute translate-y-[10rem] translate-x-[1rem] text-3xl text-dasar invisible"
                        id="lockTutup"></i>
                    <i class="bi bi-eye-slash  absolute translate-y-[10rem] translate-x-[32rem] text-3xl text-dasar hover:cursor-pointer"
                        id="eyeTutup"></i>
                    <i class="bi bi-eye absolute translate-y-[10rem] translate-x-[32rem] text-3xl text-dasar invisible hover:cursor-pointer"
                        id="eyeOpen"></i>
                    <input type="password"
                        class="w-full h-[3.5rem] rounded-[10px] pl-[3.5rem] border-1 border-slate-400 bg-slate-200 focus:outline-dasar"
                        placeholder="Password Anda" id="inputPassword" name="password">

                    <div class="w-full h-[10rem] flex justify-center items-center">
                        <div
                            class="w-[15rem] h-[4.5rem] rounded-[10px] shadow-lg bg-gradient-to-r from-dasar to-third flex justify-center items-center hover:scale-[1.05] hover:cursor-pointer transition-all">
                            <button type="submit" class="font-bold text-white text-xl">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const emailTutup = document.getElementById('emailTutup');
    const emailBuka = document.getElementById('emailOpen');
    const inputEmail = document.getElementById('inputEmail');

    inputEmail.addEventListener('input', () => {
        if (inputEmail.value == 0) {
            emailBuka.classList.remove('invisible')
            emailTutup.classList.add('invisible')
        } else {
            emailBuka.classList.add('invisible')
            emailTutup.classList.remove('invisible')
        }
    })

    const lockTutup = document.getElementById('lockTutup');
    const lockOpen = document.getElementById('lockOpen');
    const inputPassword = document.getElementById('inputPassword');

    inputPassword.addEventListener('input', () => {
        if (inputPassword.value == 0) {
            lockOpen.classList.remove('invisible')
            lockTutup.classList.add('invisible')
        } else {
            lockOpen.classList.add('invisible')
            lockTutup.classList.remove('invisible')
        }
    })

    const eyeTutup = document.getElementById('eyeTutup');
    const eyeOpen = document.getElementById('eyeOpen');
    eyeTutup.addEventListener('click', () => {
        inputPassword.type = 'text'
        eyeTutup.classList.add('invisible')
        eyeOpen.classList.remove('invisible')
    })
    eyeOpen.addEventListener('click', () => {
        inputPassword.type = 'password'
        eyeTutup.classList.remove('invisible')
        eyeOpen.classList.add('invisible')
    })
</script>
<x-footer />
