<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();

        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function getUser()
    {
        $users = user::all();

        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.user.create');
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
            'name' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'role' => 'required|string|max:255' ,
            'password' => 'required|string|max:255' ,
        ]);

        $user = new user($validatedData);
        $user->save();

        return redirect(route('daftarUser'));
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
        $user = user::find($id);
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'role' => 'required|string|max:255' ,
            'password' => 'required|string|max:255' ,
        ]);

        $user = user::find($user);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->save();

        return redirect(route('daftarUser'));
    }

    public function useredit($id)
    {
        $user = user::find($id);
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userupdate(Request $request, $user)
    {
        // dd($request);
    // condition save gambar upload
    if ($request->hasFile('foto')) {
        // get filename with extension
        $fileNameWithExt = $request->file('foto')->getClientOriginalName();
        // get just filename
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // get just extension
        $extension = $request->file('foto')->getClientOriginalExtension();
        // filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        // upload image
        $path = $request->file('foto')->storeAs('images', $fileNameToStore);
    } else {
        $fileNameToStore = 'noimage.jpg';
    }


        $user = user::find($user);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->panggilan = $request->panggilan;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->alamat = $request->alamat;
        $user->provinsi = $request->provinsi;
        $user->kota =$request->kota;
        $user->kecamatan = $request->kecamatan;
        $user->notelp = $request->notelp;
        $user->foto = $fileNameToStore;
        $user->save();
        // dd($request);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id)->delete();
        return redirect()->back();
    }
}
