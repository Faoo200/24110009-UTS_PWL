<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Pastikan model Mahasiswa terhubung ke table_mahasiswa
use App\Models\Absensi;   // Model Absensi

class AbsensiController extends Controller
{
    // Menampilkan halaman tabel absensi
    public function index(Request $request)
    {
        // Parameter filter tanggal (default: hari ini)
        $selectedDate = $request->input('tanggal', date('Y-m-d'));

        // Mengambil data dari table_mahasiswa
        $mahasiswa = Mahasiswa::all();

        return view('Absensi.index', compact('mahasiswa', 'selectedDate'));
    }

    // Menyimpan atau memperbarui data absensi
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'absensi' => 'required|array', // Array: [mahasiswa_id => status]
        ]);

        $tanggal = $request->tanggal;

        foreach ($request->absensi as $mahasiswaId => $status) {
            Absensi::updateOrCreate(
                [
                    'mahasiswa_id' => $mahasiswaId,
                    'tanggal' => $tanggal,
                ],
                [
                    'status' => $status, // 'H', 'A', 'I', atau 'S'
                ]
            );
        }

        return redirect()->back()->with('success', 'Data absensi berhasil disimpan!');
    }
}