<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 max-w-md w-full">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Halaman Mahasiswa</h1>
            <p class="text-sm text-gray-500 mt-1">Informasi data akademik mahasiswa aktif</p>
        </div>

        <hr class="border-gray-100 mb-6" />

        <div class="space-y-4">
            <div class="bg-gray-50 p-4 rounded-xl border border-gray-100 transition-all hover:shadow-inner">
                <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider block mb-1">Nama Lengkap</span>
                <span class="text-base font-medium text-gray-800">{{ $mahasiswa['nama'] }}</span>
            </div>

            <div class="bg-gray-50 p-4 rounded-xl border border-gray-100 transition-all hover:shadow-inner">
                <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider block mb-1">Jurusan</span>
                <span class="text-base font-medium text-gray-800">{{ $mahasiswa['jurusan'] }}</span>
            </div>
        </div>
    </div>

</body>
</html>