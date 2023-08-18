<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class EkskulController extends Controller
{
    public function index(){
        return view('ekskul');
    }

    public function getDataFromApi()
    {
        // Panggil API atau gunakan data dari Postman
        // Proses data jika diperlukan
    
        $data = []; // Data yang akan ditampilkan di view
    
        return view('ekskul', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $ekskul = new Ekskul();
        $ekskul->title = $request->input('title');
        $ekskul->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'uploads/' . time() . '_' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();
            
            // Simpan gambar ke penyimpanan
            Storage::disk('public')->put($imagePath, file_get_contents($image));

            $ekskul->image = $imagePath;
        }

        $ekskul->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Menambahkan Ekskul!',
            'data' => $ekskul
        ], 201);
    }

    public function list()
    {
        $ekskuls = Ekskul::all();

        return response()->json([
            'success' => true,
            'message' => 'List Semua Ekskul!',
            'data' => $ekskuls,
        ], 200);
    }
}

