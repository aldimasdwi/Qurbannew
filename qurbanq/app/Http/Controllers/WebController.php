<?php

namespace App\Http\Controllers;

use App\Models\jumlah;
use App\Models\Kambing;
use App\Models\Sapi;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function barang()
    {
        $sapi = Sapi::all();
        $sa = $sapi->count();

        $kambing = Kambing::all();
        $kam = $kambing->count();

        $hasil = $kam + $sa;

        $jam = Jumlah::where('id',1)->first();
            $hargasapi = $jam->harga;

            $jamm = Jumlah::where('id',2)->first();
            $hargakambing = $jamm->harga;

        return view('admin.componen.barang', compact('kambing', 'sapi', 'hasil','hargasapi','hargakambing'));
    }




    public function ubahkambing(Request $request, $id)
    {
        Kambing::find($id)->update([
            'harga' => $request->harga
        ]);

        return redirect('/barang');
    }

    public function ubahsapi(Request $request, $id)
    {
        Sapi::find($id)->update([
            'harga' => $request->harga
        ]);

        return redirect('/barang');
    }

    public function hapussapi($id)
    {
        Sapi::destroy($id);

        $jam = Jumlah::where('id',1)->first();
            $jumsapi = $jam->jumlah_sapi - 1;
            $jumhewan = $jam->jumlah_hewan - 1;


            Jumlah::where('id', 1)->update([
                'jumlah_sapi' => $jumsapi,
                'jumlah_hewan' => $jumhewan
            ]);


        return redirect('/barang')->with('hapus', 'berhasil dihapus');
    }

    public function hapuskambing($id)
    {
        Kambing::destroy($id);

        $jam = Jumlah::where('id',1)->first();
            $jumhewan = $jam->jumlah_hewan - 1;


            Jumlah::where('id', 1)->update([
                'jumlah_hewan' => $jumhewan
            ]);

            $jam = Jumlah::where('id',2)->first();
            $jumkambing = $jam->jumlah_kambing - 1;


            Jumlah::where('id', 2)->update([
                'jumlah_kambing' => $jumkambing,
            ]);
        return redirect('/barang')->with('hapus', 'berhasil dihapus');
    }

    public function qurban(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        if ($request->name === 'sapi') {
            Sapi::create([
                'name' => $request->name,
                'no_ref' => '#0' . rand(10, 99) . rand(10, 99),
                'waktu' => now()
            ]);

            $jam = Jumlah::where('id',1)->first();
            $jumsapi = $jam->jumlah_sapi + 1;
            $jumhewan = $jam->jumlah_hewan + 1;


            Jumlah::where('id', 1)->update([
                'jumlah_sapi' => $jumsapi,
                'jumlah_hewan' => $jumhewan
            ]);

            return redirect('/barang')->with('sapi', 'kurban sapi sudah di tambahkan');
        } elseif ($request->name === 'kambing') {
            Kambing::create([
                'name' => $request->name,
                'no_ref' => '#0' . rand(10, 99) . rand(10, 99),
                'waktu' => now()
            ]);

            $jam = Jumlah::where('id',1)->first();
            $jumhewan = $jam->jumlah_hewan + 1;


            Jumlah::where('id', 1)->update([
                'jumlah_hewan' => $jumhewan
            ]);

            $jam = Jumlah::where('id',2)->first();
            $jumkambing = $jam->jumlah_kambing + 1;


            Jumlah::where('id', 2)->update([
                'jumlah_kambing' => $jumkambing,
            ]);
            return redirect('/barang')->with('kambing', 'kurban kambing sudah di tambahkan');
        }

        return redirect('/barang')->with('error', 'gagal ditambahkan pilih hewan Qurban');
    }

    public function harga(Request $request){
        if ($request->name === 'kambing') {
            Jumlah::where('id', 2)->update([
                'harga' => $request->harga
            ]);
            return redirect('/barang')->with('harga', 'harga qurban berhasil di ubah');
        } elseif ($request->name === 'sapi'){
            Jumlah::where('id', 1)->update([
                'harga' => $request->harga
            ]);
            return redirect('/barang')->with('harga', 'harga qurban berhasil di ubah');
        }
        return redirect('/barang')->with('error', 'gagal ditambahkan pilih hewan Qurban');
    }

    


}
