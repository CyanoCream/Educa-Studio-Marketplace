<?php

namespace App\Http\Controllers;
use App\Gambar;
use Validator;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambars = Gambar::all();

        return view('gambar.index', [
            'gambars' => $gambars
        ]);
    }

    public function getGambar()
    {
        $gambars = Gambar::all();

        return $gambars;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($validation->passes())
        {
        $image = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $gambar = new Gambar;
        $gambar->id_produk = $request->id_produk;
        $gambar->gambar = $new_name;
        $gambar->save();

        return response()->json([
            'message'   => 'Image Upload Successfully',
        ]);
        }
        else
        {
        return response()->json([
            'message'   => $validation->errors()->all(),
        ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gambar $gambars)
    {
        return response()->json($gambars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gambar $gambars)
    {
                // condition save gambar upload
                if ($request->hasFile('gambar')) {
                    // get filename with extension
                    $fileNameWithExt = $request->file('gambar')->getClientOriginalName();
                    // get just filename
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // get just extension
                    $extension = $request->file('gambar')->getClientOriginalExtension();
                    // filename to store
                    $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                    // upload image
                    $path = $request->file('gambar')->storeAs('public/images', $fileNameToStore);
                } else {
                    $fileNameToStore = 'noimage.jpg';
                }
        
                // create gambar
                $gambars = new Gambar;
                $gambars->stock_varian = $request->stock_varian;
                $gambars->nama_varian = $request->nama_varian;
                $gambars->gambar = $fileNameToStore;
                $gambars->save();

                return response()->json($gambars);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambar $gambars)
    {
                // delete data gambar
                if ($gambars->gambar != 'noimage.jpg') {
                    // delete image
                    Storage::delete('public/images/' . $gambars->gambar);
                }
                // delete book
                $gambars->delete();
                return response()->json($gambars);
    }

    public function getGambarImg($id)
    {
        $gambars = Gambar::find($id);
        // return json
        return response()->json($gambars->gambar);
    }
}
