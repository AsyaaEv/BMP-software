<x-header :$page />
<div class="w-full bg-gray-200 px-8 py-2 flex justify-between">
    <h1 class="font-bold text-2xl text-dasar ">!Bogeng Dashboard</h1>
    <div>
        <div class="flex gap-4 justify-center">
            <div class="bg-gray-400 text-black rounded-full px-2 py-2 flex ">
                <i class="bi bi-box-arrow-right"></i>
            </div>
        </div>
    </div>
</div>
<div class="flex">
    <aside class="h-screen w-[20%] bg-gray-200 rounded-md px-4 py-4">
        <ul>
            <a onclick="clickPage('postsies')" class="no-underline text-white">
                <li
                    class="bg-gray-400 rounded-lg flex gap-4 hover:bg-dasar hover:text-white px-4 py-2 items-center mb-2">
                    <i class="bi bi-envelope-paper"></i>
                    <p class="m-0">Post</p>
                </li>
            </a>
            <a onclick="clickPage('products')" class="no-underline text-white ">
                <li
                    class="bg-gray-400 rounded-lg flex gap-4 hover:bg-dasar hover:text-white px-4 py-2 items-center mb-2">
                    <i class="bi bi-cart"></i>
                    <p class="m-0">Product</p>
                </li>
            </a>
            <a onclick="clickPage('users')" class="no-underline text-white ">
                <li
                    class="bg-gray-400 rounded-lg flex gap-4 hover:bg-dasar hover:text-white px-4 py-2 items-center mb-2">
                    <i class="bi bi-person"></i>
                    <p class="m-0">User</p>
                </li>
            </a>
            <a onclick="clickPage('testimoni')" class="no-underline text-white ">
                <li
                    class="bg-gray-400 rounded-lg flex gap-4 hover:bg-dasar hover:text-white px-4 py-2 items-center mb-2">
                    <i class="bi bi-star"></i>
                    <p class="m-0">Testimoni</p>
                </li>
            </a>
        </ul>
    </aside>
    <main id="paging" class="w-[80%] px-4 py-4">

    </main>
</div>
<script>
    async function clickPage(page) {
        const targetContent = document.getElementById('paging');
        try {
            const respone = await fetch(`http://localhost:8000/dashboard/${page}`);
            const pageResult = await respone.text();
            targetContent.innerHTML = pageResult;
        } catch (error) {
            console.log(error)
        }


    }
    async function clickUpdate(id) {
        const targetContent = document.getElementById('paging');
        try {
            const respone = await fetch(`{{ config('app.url') }}:8000/dashboard/products/${id}/update`);
            const pageResult = await respone.text();
            targetContent.innerHTML = pageResult;
        } catch (error) {
            console.log(error)
        }


    }
    async function clickDelete(id) {
        const targetContent = document.getElementById('paging');
        try {
            const respone = await fetch(`{{ config('app.url') }}:8000/dashboard/products/${id}/delete`);
            const
                reload = await fetch(`{{ config('app.url') }}:8000/dashboard/products`);
            const pageResult = await reload.text();
            targetContent.innerHTML = pageResult;
        } catch (error) {
            console.log(error)
        }


    }
    async function clickDeleteTestimony(id) {
        const targetContent = document.getElementById('paging');
        try {
            const respone = await fetch(`{{ config('app.url') }}:8000/dashboard/testimoni/${id}/delete`);
            const
                reload = await fetch(`{{ config('app.url') }}:8000/dashboard/testimoni`);
            const pageResult = await reload.text();
            targetContent.innerHTML = pageResult;
        } catch (error) {
            console.log(error)
        }


    }
</script>
<x-footer />
