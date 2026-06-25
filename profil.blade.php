<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 to-slate-100 font-sans min-h-screen flex items-center justify-center p-6">

    <div
        class="bg-white max-w-sm w-full rounded-3xl shadow-xl border border-slate-100/80 overflow-hidden relative pt-12 pb-8 px-6 text-center">

        <div class="absolute top-0 left-0 right-0 h-24 bg-gradient-to-r from-violet-500 to-indigo-600"></div>

        <div class="relative inline-block z-10 mb-4">
            <div
                class="w-24 h-24 bg-slate-200 rounded-full border-4 border-white shadow-md flex items-center justify-center overflow-hidden mx-auto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzUAfgnseFEsvusJtNRaFeJXuOC0NXpLk8TA&s"
                    alt="">
            </div>
            <span class="absolute bottom-1 right-1 block h-4 w-4 rounded-full ring-2 ring-white bg-green-400"></span>
        </div>

        <h1 class="text-xl font-bold text-slate-800 tracking-tight">
            {{ $biodata['nama'] }}
        </h1>

        <p class="text-xs font-semibold text-indigo-600 uppercase tracking-wider mt-1 mb-6">
            Siswa / Mahasiswa
        </p>

        <div
            class="bg-slate-50 rounded-2xl p-4 border border-slate-100 flex items-center justify-between text-left mb-6">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-indigo-50 text-indigo-600 rounded-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Kelas Aktif</span>
                    <span class="text-sm font-semibold text-slate-700">{{ $biodata['kelas'] }}</span>
                </div>
            </div>

            <span class="bg-indigo-100 text-indigo-700 text-xs px-2.5 py-1 rounded-lg font-medium">
                Terverifikasi
            </span>
        </div>
    </div>

</body>

</html>