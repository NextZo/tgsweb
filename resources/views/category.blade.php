@extends('template')
@section('main')
    <div class="page-title">
        <h1 class="font-semibold text-4xl">Kategori</h1>
    </div>
    <div class="all-projects">
        <div
            class="rounded-lg grid grid-cols-2 gap-3 p-6 mb-12 border-2 border-dashed hover:border-transparent hover:shadow-lg transition">
            <div>
                <img src="assets/tshirt.png" alt="" />
            </div>
            <div class="flex flex-col gap-3">
                <h3 class="text-xl font-normal">Kaos Polos</h3>
                <p>
                    Dengan desain yang sederhana, kenyamanan, dan kemudahan perawatannya, baju kaos tetap menjadi
                    pilihan yang populer dan mendapatkan tempat istimewa di dalam lemari pakaian banyak orang.
                </p>
                <a href="/kategori/kaos" class="mt-auto underline text-blue-600 hover:text-blue-800">Lihat Produk</a>
            </div>
        </div>

        <div
            class="rounded-lg grid grid-cols-2 gap-3 p-6 mb-12 border-2 border-dashed hover:border-transparent hover:shadow-lg transition">
            <div>
                <img src="assets/shirt.png" alt="" />
            </div>
            <div class="flex flex-col gap-3">
                <h3 class="text-xl font-normal">Kemeja</h3>
                <p>
                    Kemeja adalah pilihan yang populer dalam dunia fashion karena fleksibilitasnya. Mereka cocok untuk
                    berbagai kesempatan, dari acara formal hingga kasual. Dengan desain yang elegan dan variasi gaya
                    yang luas, kemeja tetap menjadi pilihan yang populer di antara banyak orang yang menghargai
                    penampilan yang terorganisir, profesional, dan klasik.
                </p>
                <a href="/kategori/kemeja" class="mt-auto underline text-blue-600 hover:text-blue-800">Lihat Produk</a>
            </div>
        </div>

        <div
            class="rounded-lg grid grid-cols-2 gap-3 p-6 mb-12 border-2 border-dashed hover:border-transparent hover:shadow-lg transition">
            <div>
                <img src="assets/hoddie.png" alt="" />
            </div>
            <div class="flex flex-col gap-3">
                <h3 class="text-xl font-normal">Hoodie</h3>
                <p>
                    Dengan kenyamanan, gaya kasual, dan fleksibilitasnya, hoodie tetap menjadi pilihan pakaian yang
                    populer di kalangan berbagai kelompok usia. Mereka memberikan kombinasi yang sempurna antara
                    kenyamanan dan gaya, menjadikannya salah satu pilihan yang serbaguna dan populer di dunia fashion.
                </p>
                <a href="/kategori/hoodie" class="mt-auto underline text-blue-600 hover:text-blue-800">Lihat Produk</a>
            </div>
        </div>

        <div
            class="rounded-lg grid grid-cols-2 gap-3 p-6 mb-12 border-2 border-dashed hover:border-transparent hover:shadow-lg transition">
            <div>
                <img src="assets/suit.png" alt="" />
            </div>
            <div class="flex flex-col gap-3">
                <h3 class="text-xl font-normal">Jas</h3>
                <p>
                    Jas adalah simbol kesopanan dan kesuksesan dalam dunia fashion formal. Mereka memberikan tampilan
                    yang terhormat dan elegan, dan sering dianggap sebagai pakaian yang wajib dimiliki dalam lemari
                    pakaian untuk berbagai kesempatan formal. Dengan desain yang klasik dan keanggunannya yang abadi,
                    jas tetap menjadi pilihan yang populer bagi mereka yang menghargai penampilan yang berkelas dan
                    berwibawa.
                </p>
                <a href="/kategori/jas" class="mt-auto underline text-blue-600 hover:text-blue-800">Lihat Produk</a>
            </div>
        </div>

        <div
            class="rounded-lg grid grid-cols-2 gap-3 p-6 mb-12 border-2 border-dashed hover:border-transparent hover:shadow-lg transition">
            <div>
                <img src="assets/sweater.png" alt="" />
            </div>
            <div class="flex flex-col gap-3">
                <h3 class="text-xl font-normal">Sweater</h3>
                <p>
                    Dengan kenyamanannya, kehangatan, dan gaya kasualnya, sweater tetap menjadi pilihan pakaian yang
                    populer dan serbaguna dalam lemari pakaian banyak orang. Mereka memberikan kombinasi yang sempurna
                    antara fungsi dan gaya, menjadikannya pilihan yang nyaman dan bergaya untuk menyesuaikan berbagai
                    situasi dan gaya pribadi.
                </p>
                <a href="/kategori/sweater" class="mt-auto underline text-blue-600 hover:text-blue-800">Lihat Produk</a>
            </div>
        </div>
    </div>
@endsection
