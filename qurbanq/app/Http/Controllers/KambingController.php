<?php

namespace App\Http\Controllers;

use App\Models\Kambing;
use Illuminate\Http\Request;

class KambingController extends Controller
{
    public function kambing(Request $request)
    {
        $data = Kambing::create([
            'name' => 'Kambing',
            'harga' => $request->harga
        ]);

        return Response()->json(['data' => $data, 'pesan' => 'kambing sudah di tambahkan']);
    }

    public function hapus()
    {
        $randomOrder = Kambing::inRandomOrder()->first();

        if ($randomOrder) {
            $randomOrder->id;
            $randomOrder->delete();
            return response()->json(['message' => ' berhasil dihapus']);
        }

        return response()->json(['message' => 'Tidak ada data tersedia'], 404);
    }



    public function all()
    {
        $data = Kambing::all();
        $count = $data->count();

        return response()->json([
            'message' => 'Semua kambing',
            'total' => $count,
            'data' => $data
        ]);
    }

}
