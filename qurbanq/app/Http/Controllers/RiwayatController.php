<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\jumlah;
use App\Models\Sapi;
use App\Models\Kambing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RiwayatController extends Controller
{
    public function belisapi(Request $request)
    {
        $riwayat = Riwayat::create([
            'name' => $request->name,
            'id_user' => $request->id_user,
            'no_hp' => $request->no_hp,
            'harga' => $request->harga,
            'email' => $request->email,
            'status' => $request->status,
            'sapi' => $request->sapi,
            'no_ref' => '#0' . rand(10, 99) . rand(10, 99),
            'waktu' => now(),
        ]);

        $jumlah = Jumlah::find(1);
        if ($jumlah->jumlah_sapi === 0) {
            return redirect('/user');
        } elseif ($jumlah) {
            $jumlah->jumlah_hewan--;
            $jumlah->jumlah_sapi--;
            $jumlah->jumlah_terjual++;
            $jumlah->save();

            $id = Sapi::inRandomOrder()->value('id');
            Sapi::destroy($id);

            return redirect('/user')->with('ubah', $riwayat);
        }
    }

    public function belikambing(Request $request)
    {

        $riwayat = Riwayat::create([
            'name' => $request->name,
            'id_user' => $request->id_user,
            'no_hp' => $request->no_hp,
            'harga' => $request->harga,
            'email' => $request->email,
            'status' => $request->status,
            'kambing' => $request->kambing,
            'no_ref' => '#0' . rand(10, 99) . rand(10, 99),
            'waktu' => now(),
        ]);

        $jumlah = Jumlah::find(2);
        if ($jumlah) {
            $jumlah->jumlah_kambing -= 1;
            $jumlah->jumlah_terjual += 1;
            $jumlah->save();
        }

        $jumlah = Jumlah::find(1);
        if ($jumlah) {
            $jumlah->jumlah_hewan -= 1;
            $jumlah->save();
        }

        $id = Kambing::inRandomOrder()->value('id');

        Kambing::destroy($id);

        return redirect('/user')->with('ubah', $riwayat);
    }

    public function riwayat()
    {
        $id = Auth::User()->id;
        $riwayat = Riwayat::where('id_user', $id)->get();
        $count = $riwayat->count();

        return view('user.componen.riwayat', compact('riwayat', 'count'));
    }

    public function riwayatt()
    {

        $riwayat = Riwayat::all();
        $count = $riwayat->count();

        return view('admin.componen.user', compact('riwayat', 'count'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $results = Riwayat::where(function ($query) use ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('email', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('no_hp', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('harga', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('status', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('sapi', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('kambing', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('no_ref', 'LIKE', '%' . $searchTerm . '%');
        })->get();

        return redirect('/riwayat')->with('ubah', $results);
    }

    public function searchh(Request $request)
    {
        $searchTerm = $request->input('search');

        $results = Riwayat::where(function ($query) use ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('email', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('no_hp', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('harga', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('status', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('sapi', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('kambing', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('no_ref', 'LIKE', '%' . $searchTerm . '%');
        })->get();

        return redirect('/datauser')->with('ubah', $results);
    }

    public function status(Request $request, $id)
    {
        if ($request->status === 'gagal sapi') {
            Sapi::create([
                'name' => 'Sapi',
                'no_ref' => '#0' . rand(10, 99) . rand(10, 99),
                'waktu' => now()
            ]);

            Riwayat::find($id)->update([
                'status' => 'gagal sapi'
            ]);

            $jam = Jumlah::where('id', 1)->first();
            $jumsapi = $jam->jumlah_sapi + 1;
            $jumhewan = $jam->jumlah_hewan + 1;
            $jumterjual = $jam->jumlah_terjual - 1;

            Jumlah::where('id', 1)->update([
                'jumlah_sapi' => $jumsapi,
                'jumlah_hewan' => $jumhewan,
                'jumlah_terjual' => $jumterjual
            ]);

            Riwayat::destroy($id);

            return redirect('/datauser');
        } elseif ($request->status === 'gagal kambing') {
            Kambing::create([
                'name' => 'kambing',
                'no_ref' => '#0' . rand(10, 99) . rand(10, 99),
                'waktu' => now()
            ]);

            Riwayat::find($id)->update([
                'status' => 'gagal kambing'
            ]);

            $jam = Jumlah::where('id', 1)->first();
            $jumhewan = $jam->jumlah_hewan + 1;

            Jumlah::where('id', 1)->update([
                'jumlah_hewan' => $jumhewan,
            ]);

            $jam = Jumlah::where('id', 2)->first();
            $jumkambing = $jam->jumlah_kambing + 1;
            $jumterjual = $jam->jumlah_terjual - 1;

            Jumlah::where('id', 2)->update([
                'jumlah_kambing' => $jumkambing,
                'jumlah_terjual' => $jumterjual
            ]);

            Riwayat::destroy($id);

            return redirect('/datauser');
        } else {
            Riwayat::find($id)->update([
                'status' => $request->status
            ]);

            return redirect('/datauser');
        }
    }

    public function dipotong(Request $request, $id)
    {
        Riwayat::find($id)->update([
            'dipotong' => $request->dipotong
        ]);
        return redirect('/datauser');
    }

    public function dicaca(Request $request, $id)
    {
        Riwayat::find($id)->update([
            'dicaca' => $request->dicaca
        ]);
        return redirect('/datauser');
    }

    public function dibungkus(Request $request, $id)
    {
        Riwayat::find($id)->update([
            'dibungkus' => $request->dibungkus
        ]);
        return redirect('/datauser');
    }

    public function cek($id)
    {
        $cek = Riwayat::find($id);

        return redirect('/riwayat')->with('ubahh', $cek);
    }
}
