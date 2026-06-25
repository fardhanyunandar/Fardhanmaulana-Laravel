<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 font-sans min-h-screen flex items-center justify-center p-6">

    <div
        class="bg-white max-w-sm w-full rounded-2xl shadow-md overflow-hidden border border-slate-100 transition-all duration-300 hover:shadow-xl">

        <div class="h-64 bg-slate-200 flex items-center justify-center relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZCkmmuxe7NrGaysZ8SpiAepel-xrCnBZ4QA&s"
                alt="">
            <span
                class="absolute top-3 right-3 bg-indigo-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full shadow-sm">
                Produk Pilihan
            </span>
        </div>

        <div class="p-6">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-widest block mb-1">Detail Produk</span>

            <h1 class="text-xl font-bold text-slate-800 leading-tight mb-2">
                {{ $produk['nama_produk'] }}
            </h1>

            <p class="text-sm text-slate-500 mb-6 line-clamp-2">
                Deskripsi singkat produk yang menjelaskan keunggulan, spesifikasi, dan fungsionalitas utama dari item
                ini.
            </p>

            <hr class="border-slate-100 mb-4" />

            <div class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <span class="text-xs text-slate-400 font-medium">Harga</span>
                    <span class="text-xl font-extrabold text-slate-900">
                        {{ $produk['harga'] }}
                    </span>
                </div>

                <button
                    class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl shadow-sm hover:shadow transition-all duration-200">
                    Beli Sekarang
                </button>
            </div>
        </div>
    </div>

</body>

</html>