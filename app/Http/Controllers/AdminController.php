<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Calons;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        $kandidat = Calons::all();
        $admin = admin::all();
        return view('admin.pages.dashboard.index', [
            'kandidat' => $kandidat,
        ]);
    }

    public function calon()
    {

        $kandidat = Calons::all();

        return view('admin/pages/calons/index', compact('kandidat'));
    }

    public function addCalon()
    {
        return view('admin/pages/calons/add');
    }

    public function storeCalon(Request $request)
    {

        $calon = Calons::all();

        $this->validate($request, [
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'foto_calon' => 'required | image | mimes:png,jpg,jpeg | max:2045', 
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $image = $request->file('foto_calon');
        $nama_foto = $calon->count() + 1 . '.png';
        $tujuan_upload = 'foto_calon';
        $image->move($tujuan_upload, $nama_foto);
      

        Calons::create([
            'id' => $calon->count() + 1,
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'foto_calon' => $nama_foto,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect('/calons');

        //     $this->validate($request, [
        //     'nama_ketua' => 'required',
        //     'nama_wakil' => 'required',
        //     'foto_calon' => 'required | image | mimes:png,jpg,jpeg | max:2045', 
        //     'visi' => 'required',
        //     'misi' => 'required',
        // ]);

        // $new_photo = '';

        
        // if($request->file('foto_calon')){
        // $extension = $request->file('foto_calon')->getClientOriginalExtension();
        // $new_photo = $request->nama_ketua.'-'.now()->timestamp.'.'.$extension;
        // $request->file('foto_calon')->storeAs('photo', $new_photo);
        // }
        // $calon['image'] = $new_photo;
        // $calon =  Calons::create([
        //     // 'id' => $calon->count() + 1,
        //     'nama_ketua' => $request->nama_ketua,
        //     'nama_wakil' => $request->nama_wakil,
        //     'foto_calon' => $new_photo,
        //     'visi' => $request->visi,
        //     'misi' => $request->misi,
        // ]);

        // return redirect('/calons');
        
    }

    public function editCalon($id)
    {
        $calon = Calons::find($id);
        return view('admin/pages/calons/edit', compact(['calon']));
    }

    public function updateCalon(Request $request, $id)
    {
        // $calon = calons::find($id);
        // $calon->update($request->except(['_token']));
        // return redirect('/calons');

        $calon = Calons::findOrFail($id);

        
        $request->validate([
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        
        $post = Calons::find($id);
        if($request->hasFile('foto_calon')){
            $request->validate([
                'foto_calon' => 'required | image | mimes:png,jpg,jpeg | max:2045', 
            ]);
            
            $image = $request->file('foto_calon');
            $nama_foto = $calon->count() + 1 . '.png';
            $tujuan_upload = 'foto_calon';
            $image->move($tujuan_upload, $nama_foto);
            $post->foto_calon = $nama_foto;
        }
           $post->nama_ketua = $request->nama_ketua;
           $post->nama_wakil = $request->nama_wakil;
           $post->visi = $request->visi;
           $post->misi = $request->misi;
        $post->save();
    
        return redirect('/calons');
    }

    public function deleteCalon($id)
    {
        $table = Calons::where('id', $id)->delete();
        Calons::where('id', $id_calon)->decrement('suara');

        $image_path = 'foto_calon/' . $id . '.jpg';
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        return redirect('/calons');
    }

    public function resetPemilih($id, $id_calon)
    {

        Voting::where('id_user', $id)->delete();
        Calons::where('id', $id_calon)->decrement('suara');

        User::where('id', $id)->update([
            'voting' => "false",
            'id_calon' => NULL
        ]);

        return redirect()->back()->with('success', 'Pemilih Berhasil Direset');
    }
}
