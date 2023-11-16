{{-- Lihat Ini di ProductController --}}
<h1 class="font-bold text-4xl text-gray-600 ">Buat Konsumen Testimoni</h1>
<h2 class="font-normal text-sm text-gray-500 mb-8">Input apa kata konsumen</h2>

<div class="w-full bg-slate-50 ">
    <form action="{{ route('dashboard-testimony-action') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Konsumen</label>
            <input type="text" id="text" name="name_consumer"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Muhammad Ibnu Abdullah" required>
        </div>
        <div class="mb-6">
            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Beri bintang
                (1-5)</label>
            <input type="number" id="number" name="stars"
                class="bg-gray-50 border w-[10%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="4" required>
        </div>
        <div class="mb-6">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apa Kata
                Dia</label>
            <textarea type="text" id="content" name="he_say" rows="3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Masukkan Kalimat pendek disini. . .  </textarea>
        </div>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="file_input_help" id="file_input" type="file" name="image_consumer">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Hanya Format Gambar diizinkan</p>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>
