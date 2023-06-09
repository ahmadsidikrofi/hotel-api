<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function show_hotel(Request $request)
    {
        $searchValue = $request->input('search');
        $hotels = Hotel::where('title', 'like', '%' . $searchValue . '%')
        ->orWhere('daerah', 'like', '%' . $searchValue . '%')
        ->orWhere('fasilitas', 'like', '%' . $searchValue . '%')
        ->get();
        return view('hotelDashboard', compact('hotels'));
        return response([
            'success' => true,
            'message' => 'List Semua hotel',
            'data' => $hotels
        ], 200);
    }

    // public function store( Request $request )
    // {
    //     $validator = Validator::make($request->all(), [
    //         'nama_hotel'     => 'required',
    //     ],
    //         [
    //             'nama_hotel.required' => 'Masukkan Nama Hotel !',
    //         ]
    //     );
    //     if($validator->fails()) {

    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Silahkan Isi Bidang Yang Kosong',
    //             'data'    => $validator->errors()
    //         ],401);

    //     } else {

    //         $hotel = Hotel::create([
    //             'nama_hotel' => $request->input('nama_hotel'),
    //         ]);

    //         if ($hotel) {
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'hotel Berhasil Disimpan!',
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'hotel Gagal Disimpan!',
    //             ], 401);
    //         }
    //     }
    // }
}
