<?php
namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    // Mengambil catatan dan menampilkan halaman Diary
    public function index()
    {
        // Catatan terbaru ditampilkan lebih dulu
        $diaries = Diary::orderBy('tanggal', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        // Mengirim data diaries ke View
        return view('diary.index', compact('diaries'));
    }

    // Menyimpan catatan baru dari form
    public function store(Request $request)
    {
        // Memastikan data yang dikirim sudah benar
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Menyimpan catatan ke database
        Diary::create($data);

        // Kembali ke halaman Diary
        return redirect()->route('diary.index')
            ->with('success', 'Catatan berhasil disimpan!');
    }

    // Menampilkan form untuk mengedit catatan
    public function edit(Diary $diary)
    {
        return view('diary.edit', compact('diary'));
    }

    // Memperbarui catatan yang dipilih
    public function update(Request $request, Diary $diary)
    {
        // Validasi input dari form edit
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Memperbarui data di database
        $diary->update($data);

        return redirect()->route('diary.index')
            ->with('success', 'Catatan berhasil diperbarui!');
    }

    // Menghapus catatan dari database
    public function destroy(Diary $diary)
    {
        $diary->delete();

        return redirect()->route('diary.index')
            ->with('success', 'Catatan berhasil dihapus!');
    }
}
