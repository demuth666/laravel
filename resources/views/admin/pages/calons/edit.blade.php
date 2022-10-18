@extends('template')
@section('content')
<div class="activiy-data">
    <form action="{{ route('calon.update', $calon->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="input-container ic1"> 
        <input id="" class="input" type="text" placeholder=" " name="nama_ketua" value="{{ $calon->nama_ketua }}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Nama Ketua</label>
      </div>
      <div class="input-container ic2">
        <input id="" class="input" type="text" placeholder=" "  name="nama_wakil" value="{{ $calon->nama_wakil }}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Nama Wakil</label>
      </div>
      <div class="input-container ic2">
        <input id="" class="inpu" type="file" placeholder=" " name="foto_calon" value="{{ $calon->foto_calon }}"/>
      </div>    
      <div class="input-container ic2">
        <input id="" class="input" type="text" placeholder=" " name="visi" value="{{ $calon->visi }}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Visi</label>
      </div>
      <div class="input-container ic2">
        <input id="" class="input" type="text" placeholder=" " name="misi" value="{{ $calon->misi }}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Misi</label>
      </div>
      <button type="text" class="submit" value="tambah">Edit</button>
    </form>
</div>
@endsection