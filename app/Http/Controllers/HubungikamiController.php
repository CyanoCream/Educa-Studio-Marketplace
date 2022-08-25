<?php

namespace App\Http\Controllers;
use App\ Hubungikami;
use Illuminate\Http\Request;

class HubungikamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hubungikamis = hubungikami::all();
        return view('admin.hubungi_kami.index',[
            'hubungikamis' => $hubungikamis
        ]);
    }

    public function getHubungiKami()
    {
        $hubungikamis = hubungikami::all();

        return $hubungikamis;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hubungi_kami.create');
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
            'id_pelanggan' => 'required|integer' ,
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'nomorponsel' => 'required|string|max:255' ,
            'topik' => 'required|string|max:255' ,
            'pesan' => 'required|string|max:255' ,
        ]);

        $hubungikami = new hubungikami($validatedData);
        $hubungikami->save();

        return redirect(route('daftarHubungi_Kami'));
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
        $hubungikami = hubungikami::find($id);
        return view('admin.hubungi_kami.edit', [
            'hubungikami' => $hubungikami
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hubungikami)
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer' ,
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'nomorponsel' => 'required|string|max:255' ,
            'topik' => 'required|string|max:255' ,
            'pesan' => 'required|string|max:255' ,
        ]);

        $hubungikami = hubungikami::find($hubungikami);

        $hubungikami->id_pelanggan = $request->id_pelanggan;
        $hubungikami->nama = $request->nama;
        $hubungikami->email = $request->email;
        $hubungikami->nomorponsel = $request->nomorponsel;
        $hubungikami->topik = $request->topik;
        $hubungikami->pesan = $request->pesan;
        $hubungikami->save();

        return redirect(route('daftarHubungi_Kami'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($hubungikami)
    {
        $hubungikami->delete();
        return redirect(route('daftarHubungi_Kami'));
    }
}
