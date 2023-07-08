<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use App\Models\Catatanguru;
use App\Models\Catatanorangtua;
use App\Models\Indikator;
use App\Models\Inti;
use App\Models\Intibaby;
use App\Models\Pembuka;
use App\Models\Pembukababy;
use App\Models\Penutup;
use App\Models\Penutupbaby;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrtuController extends Controller
{
    public function index()
    {
        return view('orangtua.index');
    }

    public function siswa()
    {
        $ortu = Auth::user(); 
        $kindergarten = $ortu->siswa()->where('kelompok', 'kindergarten')->get();
        $playgroup = $ortu->siswa()->where('kelompok', 'playgroup')->get();
        $babycamp = $ortu->siswa()->where('kelompok', 'babycamp')->get();

        return view('orangtua.siswa', compact('kindergarten', 'playgroup', 'babycamp'));

    }

    public function kindergarten(Request $request, Siswa $siswa)
    {
        $tanggal = $request->input('tanggal');

        $arrivals = Indikator::where('kelas', 'kindergarten')
                            ->where('kategori', 'arrival')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $breakfasts = Breakfast::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $pembukas = Pembuka::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $pembukaindikators = Indikator::where('kelas', 'kindergarten')
                            ->where('kategori', 'pembuka')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $intis = Inti::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        $intiindikators = Indikator::where('kelas', 'kindergarten')
                            ->where('kategori', 'inti')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $penutups = Penutup::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)                   
                            ->get();

        $catatangurus = Catatanguru::where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $catatanorangtuas = Catatanorangtua::where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        return view('orangtua.kindergarten',compact('siswa', 'arrivals', 'breakfasts', 'pembukas', 'pembukaindikators', 'intis', 'intiindikators', 'penutups', 'tanggal', 'catatangurus', 'catatanorangtuas'));
    }

    public function playgroup(Request $request, Siswa $siswa)
    {
        $tanggal = $request->input('tanggal');

        $arrivals = Indikator::where('kelas', 'playgroup')
                            ->where('kategori', 'arrival')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $breakfasts = Breakfast::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $pembukas = Pembuka::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $pembukaindikators = Indikator::where('kelas', 'playgroup')
                            ->where('kategori', 'pembuka')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $intis = Inti::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        $intiindikators = Indikator::where('kelas', 'playgroup')
                            ->where('kategori', 'inti')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $penutups = Penutup::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $catatangurus = Catatanguru::where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $catatanorangtuas = Catatanorangtua::where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        return view('orangtua.playgroup',compact('siswa', 'arrivals', 'breakfasts', 'pembukas', 'pembukaindikators', 'intis', 'intiindikators', 'penutups', 'catatangurus', 'catatanorangtuas'));
    }

    public function babycamp(Request $request, Siswa $siswa)
    {
        $tanggal = $request->input('tanggal');

        $breakfasts = Breakfast::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        $pembukababys = Pembukababy::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        $intibabys = Intibaby::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $penutupbabys = Penutupbaby::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $catatangurus = Catatanguru::where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $catatanorangtuas = Catatanorangtua::where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        return view('orangtua.babycamp',compact('siswa', 'breakfasts', 'pembukababys', 'intibabys', 'penutupbabys', 'catatangurus', 'catatanorangtuas'));
    }
}
