<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HitungGajiController extends Controller
{
    public function hitungGaji(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'jumlah_jam' => 'required|int',
                'tarif' => 'required|int',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => $validator->errors()
                ], 400);
            }
            $gaji = 0;
            if ($request->jumlah_jam > 40) {
                $lembur = $request->jumlah_jam - 40;
                $gaji = (40 * $request->tarif) + ($lembur * ($request->tarif * 1.5));
            } else {
                $gaji = $request->jumlah_jam * $request->tarif;
            }

            return response()->json([
                'status' => 'success',
                'data' => [
                    'gaji' => $gaji
                ]
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
