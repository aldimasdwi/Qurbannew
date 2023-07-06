<?php

namespace App\Http\Controllers;

use App\Models\Sapi;
use Illuminate\Http\Request;

class SapiController extends Controller
{
    public function sapi(Request $request)
    {
        $data = Sapi::create([
            'name' => 'Sapi',
            'harga' => $request->harga
        ]);

        return Response()->json(['data' => $data, 'pesan' => 'Sapi sudah di tambahkan']);
    }

    public function hapus()
    {
        $randomOrder = Sapi::inRandomOrder()->first();

        if ($randomOrder) {
            $randomOrder->id;
            $randomOrder->delete();
            return response()->json(['message' => ' berhasil dihapus']);
        }

        return response()->json(['message' => 'Tidak ada data tersedia'], 404);
    }



    public function all()
    {
        $data = Sapi::all();
        $count = $data->count();

        return response()->json([
            'message' => 'Semua kambing',
            'total' => $count,
            'data' => $data
        ]);
    }

}
