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
        $hubungi_kamis = hubungi_kami::all();
        return view('admin.hubungi_kami.index', [
            'hubungi_kamis' => $hubungi_kamis
        ]);
    }

    public function getHubungiKami()
    {
        $hubungi_kamis = hubungi_kami::all();

        return $hubungi_kamis;
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
        $validatedData = validator($request->all(), [
            'id_pelanggan' => 'required|string|max:255' ,
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'nomorponsel' => 'required|string|max:255' ,
            'topik' => 'required|string|max:255' ,
            'pesan' => 'required|string|max:255' ,
        ])->validate();

        $hubungi_kami = new hubungi_kami($validatedData);
        $hubungi_kami->save();

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
        return view('admin.hubungi_kami.edit', [
            'hubungi_kami' => $hubungi_kami
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HubungiKami $hubungi_kami)
    {
        $validatedData = validator($request->all(), [
            'id_pelanggan' => 'required|string|max:255' ,
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'nomorponsel' => 'required|string|max:255' ,
            'topik' => 'required|string|max:255' ,
            'pesan' => 'required|string|max:255' ,
        ])->validate();

        $hubungi_kami = new hubungi_kami($validatedData);
        $hubungi_kami->save();

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
        $hubungi_kami->delete();
        return redirect(route('daftarHubungi_Kami'));
    }
}
