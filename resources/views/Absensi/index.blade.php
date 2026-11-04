<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kehadiran Mahasiswa</title>
    <!-- Menggunakan Tailwind CSS via CDN untuk styling cepat -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8 font-sans text-sm">

    <div class="max-w-6xl mx-auto bg-white shadow-sm rounded-md border border-gray-200">
        
        <!-- Bagian Atas: DatePicker dan ComboBox -->
        <div class="p-6 border-b border-gray-200 bg-gray-50 rounded-t-md flex flex-wrap gap-6 items-end">
            <div>
                <label for="tanggal" class="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">Tanggal Pertemuan</label>
                <input type="date" id="tanggal" class="border border-gray-300 rounded text-gray-700 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div>
                <label for="matakuliah" class="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">Nama Mata Kuliah</label>
                <select id="matakuliah" class="border border-gray-300 rounded text-gray-700 px-3 py-2 min-w-[250px] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">-- Pilih Mata Kuliah --</option>
                    <option value="pwl">Pemrograman Web Lanjut</option>
                    <option value="basdat">Basis Data</option>
                    <option value="jarkom">Jaringan Komputer</option>
                </select>
            </div>
        </div>

        <!-- Tabel Kehadiran -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="py-4 px-6 font-semibold text-gray-700 w-16">No</th>
                        <th class="py-4 px-6 font-semibold text-gray-700">Mahasiswa</th>
                        <th class="py-4 px-6 font-semibold text-gray-700 w-48">Kehadiran</th>
                        <th class="py-4 px-6 font-semibold text-gray-700 w-64">Status</th>
                    </tr>
                    <!-- Header Radio Button Guide -->
                    <tr class="border-b border-gray-200 bg-gray-50/50">
                        <th colspan="3"></th>
                        <th class="py-2 px-6 text-xs text-gray-500 font-normal">
                            <div class="flex items-center gap-3 ml-1">
                                <span>H</span> <span>A</span> <span>I</span> <span>S</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    <!-- Baris 1: Absen -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-600">1</td>
                        <td class="py-3 px-6">
                            <div class="font-medium text-gray-800">RYAN FEBRIANTO</div>
                            <div class="text-gray-400 text-xs mt-0.5">23110013</div>
                        </td>
                        <td class="py-3 px-6">
                            <span class="inline-block bg-red-100 text-red-500 px-2 py-0.5 rounded text-xs font-medium">Absen</span>
                        </td>
                        <td class="py-3 px-6">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="status_1" value="H" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_1" value="A" class="w-4 h-4 text-blue-600" checked>
                                <input type="radio" name="status_1" value="I" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_1" value="S" class="w-4 h-4 text-blue-600">
                            </div>
                        </td>
                    </tr>

                    <!-- Baris 2: Hadir (Background Biru Pudar) -->
                    <tr class="border-b border-gray-100 bg-blue-50/30 hover:bg-blue-50/50">
                        <td class="py-3 px-6 text-gray-600">2</td>
                        <td class="py-3 px-6">
                            <div class="font-medium text-gray-800">KELIO XENELLY</div>
                            <div class="text-gray-400 text-xs mt-0.5">23110001</div>
                        </td>
                        <td class="py-3 px-6">
                            <span class="inline-block bg-teal-100 text-teal-600 px-2 py-0.5 rounded text-xs font-medium">Hadir</span>
                        </td>
                        <td class="py-3 px-6">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="status_2" value="H" class="w-4 h-4 text-blue-600" checked>
                                <input type="radio" name="status_2" value="A" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_2" value="I" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_2" value="S" class="w-4 h-4 text-blue-600">
                            </div>
                        </td>
                    </tr>

                    <!-- Baris 3: Kosong -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-600">3</td>
                        <td class="py-3 px-6">
                            <div class="font-medium text-gray-800">ALVIN VALENTINO</div>
                            <div class="text-gray-400 text-xs mt-0.5">23110002</div>
                        </td>
                        <td class="py-3 px-6 text-gray-400">-</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="status_3" value="H" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_3" value="A" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_3" value="I" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_3" value="S" class="w-4 h-4 text-blue-600">
                            </div>
                        </td>
                    </tr>

                    <!-- Baris 4: Hadir -->
                    <tr class="border-b border-gray-100 bg-blue-50/30 hover:bg-blue-50/50">
                        <td class="py-3 px-6 text-gray-600">4</td>
                        <td class="py-3 px-6">
                            <div class="font-medium text-gray-800">DHAVID BHERTUS</div>
                            <div class="text-gray-400 text-xs mt-0.5">23110006</div>
                        </td>
                        <td class="py-3 px-6">
                            <span class="inline-block bg-teal-100 text-teal-600 px-2 py-0.5 rounded text-xs font-medium">Hadir</span>
                        </td>
                        <td class="py-3 px-6">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="status_4" value="H" class="w-4 h-4 text-blue-600" checked>
                                <input type="radio" name="status_4" value="A" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_4" value="I" class="w-4 h-4 text-blue-600">
                                <input type="radio" name="status_4" value="S" class="w-4 h-4 text-blue-600">
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</body>
</html>