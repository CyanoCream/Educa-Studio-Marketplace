<?php

namespace App\Http\Controllers;
use App\ Hubungikami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHubungikamiController extends Controller
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
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'nomorponsel' => 'required|string|max:255' ,
            'topik' => 'required|string|max:255' ,
            'pesan' => 'required|string' ,
        ]);

        $hubungikami = new hubungikami($validatedData);
        $hubungikami->save();

        return redirect(route('daftarHubungi_Kami'));
    }

    public function store_akun(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'nomorponsel' => 'required|string|max:255' ,
            'topik' => 'required|string|max:255' ,
            'pesan' => 'required|string' ,
        ]);

        $hubungikami = new hubungikami($validatedData);
        $hubungikami->save();

        return redirect()->back();
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
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'nomorponsel' => 'required|string|max:255' ,
            'topik' => 'required|string|max:255' ,
            'pesan' => 'required|string' ,
        ]);

        $hubungikami = hubungikami::find($hubungikami);

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
    public function destroy($id)
    {
        $hubungikami = hubungikami::find($id)->delete();
        return redirect()->back();
    }
}
