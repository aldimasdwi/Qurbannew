<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sapi;
use App\Models\Kambing;
use App\Models\jumlah;


class JumlahController extends Controller
{
    public function index (){

            $jam = Jumlah::where('id',1)->first();
            $jumlah_sapi = $jam->jumlah_sapi;
            $jumlah_hewan = $jam->jumlah_hewan;
            $jumlah_terjual = $jam->jumlah_terjual;
            $jumlah_dipotong = $jam->jumlah_dipotong;
            $jumlah_dicaca = $jam->jumlah_dicaca;
            $jumlah_dibungkus = $jam->jumlah_dibungkus;

            $jamm = Jumlah::where('id',2)->first();
            $jumlah_terjuall = $jamm->jumlah_terjual;
            $jumlah_kambingg = $jamm->jumlah_kambing;
            $jumlah_dipotongg = $jamm->jumlah_dipotong;
            $jumlah_dicacaa = $jamm->jumlah_dicaca;
            $jumlah_dibungkuss = $jamm->jumlah_dibungkus;

        return view('admin.componen.index',compact('jumlah_sapi','jumlah_terjual','jumlah_terjuall','jumlah_kambingg','jumlah_hewan','jumlah_dipotong','jumlah_dicaca','jumlah_dibungkus','jumlah_dipotongg','jumlah_dicacaa','jumlah_dibungkuss'));
    }

    public function indexx (){

        $jam = Jumlah::where('id',1)->first();
        $jumlah_sapi = $jam->jumlah_sapi;
        $jumlah_hewan = $jam->jumlah_hewan;
        $jumlah_terjual = $jam->jumlah_terjual;
        $jumlah_dipotong = $jam->jumlah_dipotong;
        $jumlah_dicaca = $jam->jumlah_dicaca;
        $jumlah_dibungkus = $jam->jumlah_dibungkus;
        $hargasapi = $jam->harga;

        $jamm = Jumlah::where('id',2)->first();
        $jumlah_terjuall = $jamm->jumlah_terjual;
        $jumlah_kambingg = $jamm->jumlah_kambing;
        $jumlah_dipotongg = $jamm->jumlah_dipotong;
        $jumlah_dicacaa = $jamm->jumlah_dicaca;
        $hargakambing = $jamm->harga;
        $jumlah_dibungkuss = $jamm->jumlah_dibungkus;

    return view('user.componen.index',compact('jumlah_sapi','jumlah_terjual','jumlah_terjuall','jumlah_kambingg','jumlah_hewan','jumlah_dipotong','jumlah_dicaca','jumlah_dibungkus','jumlah_dipotongg','jumlah_dicacaa','jumlah_dibungkuss','hargasapi','hargakambing'));
}

    public function dipotong(Request $request){
        $jam = Jumlah::where('id',1)->first();
        $id = $jam->id;
        jumlah::find($id)->update([
            'jumlah_dipotong' =>$request->dipotong
        ]);

        return redirect('/admin')->with('ubah', 'berhasil di ubah');
    }



    public function dicaca(Request $request){
        $jam = Jumlah::where('id',1)->first();
        $id = $jam->id;
        jumlah::find($id)->update([
            'jumlah_dicaca' =>$request->dicaca
        ]);

        return redirect('/admin')->with('ubah', 'berhasil di ubah');
    }
    public function dibungkus(Request $request){
        $jam = Jumlah::where('id',1)->first();
        $id = $jam->id;
        jumlah::find($id)->update([
            'jumlah_dibungkus' =>$request->dibungkus
        ]);

        return redirect('/admin')->with('ubah', 'berhasil di ubah');
    }

// ================================

    public function dipotongg(Request $request){
        $jam = Jumlah::where('id',2)->first();
        $id = $jam->id;
        jumlah::find($id)->update([
            'jumlah_dipotong' =>$request->dipotongg
        ]);

        return redirect('/admin')->with('ubah', 'berhasil di ubah');
    }
   

    public function dicacaa(Request $request){
        $jam = Jumlah::where('id',2)->first();
        $id = $jam->id;
        jumlah::find($id)->update([
            'jumlah_dicaca' =>$request->dicacaa
        ]);

        return redirect('/admin')->with('ubah', 'berhasil di ubah');
    }
    public function dibungkuss(Request $request){
        $jam = Jumlah::where('id',2)->first();
        $id = $jam->id;
        jumlah::find($id)->update([
            'jumlah_dibungkus' =>$request->dibungkuss
        ]);

        return redirect('/admin')->with('ubah', 'berhasil di ubah');
    }
}
