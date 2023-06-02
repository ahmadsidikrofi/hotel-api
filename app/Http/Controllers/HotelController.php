<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function showHotel(Request $request)
    {
        $hotel = Hotel::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'List Semua hotel',
            'data' => $hotel
        ], 200);
    }

    public function showById( $id )
    {
        $getHotel_id = Hotel::find($id);
        if ($getHotel_id) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Hotel!',
                'data' => $getHotel_id,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Hotel tidak ditemukan',
                'data' => 'Data kosong'
            ], 401);
        }
    }

    public function tambah_hotel( Request $request )
    {
        $validator = Validator::make($request->all(), [
            'nama_hotel' => 'required',
        ],
            [
                'nama_hotel.required' => 'Masukkan Nama Hotel !',
            ]
        );
        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],401);

        } else {

            $hotel = Hotel::create([
                'nama_hotel' => $request->input('nama_hotel'),
                'title' => $request->input('title'),
                'rating' => $request->input('rating'),
                'fasilitas' => $request->input('fasilitas'),
                'daerah' => $request->input('daerah'),
            ]);

            if ($hotel) {
                return response()->json([
                    'success' => true,
                    'message' => 'hotel Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'hotel Gagal Disimpan!',
                ], 401);
            }
        }
    }
}
