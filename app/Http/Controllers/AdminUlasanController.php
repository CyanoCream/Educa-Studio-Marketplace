<?php

namespace App\Http\Controllers;
use App\Ulasan;
use Illuminate\Http\Request;

class AdminUlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ulasans = ulasan::all();

        return view('admin.ulasan.index', [
            'ulasans' => $ulasans
        ]);
    }

    public function getUlasan()
    {
        $ulasans = ulasan::all();

        return $ulasans;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.ulasan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penilaian' => 'required|string|max:255' ,
        ]);

        $ulasan = new ulasan($validatedData);
        $ulasan->save();

        return redirect(route('daftarUlasan'));
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
    public function edit($id)
    {
        $ulasan = ulasan::find($id);
        return view('admin.ulasan.edit', [
            'ulasan' => $ulasan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ulasan)
    {
        $validatedData = $request->validate([
            'penilaian' => 'required|string|max:255' ,
        ]);

        $ulasan = ulasan::find($ulasan);

        $ulasan->penilaian = $request->penilaian;
        $ulasan->save();

        return redirect(route('daftarUlasan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ulasan = Ulasan::find($id)->delete();
        return redirect()->back();
    }
}
