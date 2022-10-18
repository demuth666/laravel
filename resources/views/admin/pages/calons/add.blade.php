@extends('template')
@section('content')
<div class="activiy-data">
    <form action="{{ route ('calon.store') }}" method="POST"  enctype="multipart/form-data" class="addcalon">
        @csrf
      <div class="input-container ic1"> 
        <input id="" class="input" type="text" placeholder=" " name="nama_ketua" value="{{ old('nama_ketua') }}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Nama Ketua</label>
      </div>
      <div class="input-container ic2">
        <input id="" class="input" type="text" placeholder=" "  name="nama_wakil" value="{{ old('nama_wakil') }}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Nama Wakil</label>
      </div>
      <div class="input-container ic2">
        <input id="" class="inpu" type="file" placeholder=" " value="{{ old('foto_calon') }}"  name="foto_calon"  @error('password') is-invalid @enderror required/>
        @error('foto_calon')
        <p class="text-danger">*format gambar harus sesuai</p>
        @enderror
      </div>
      <div class="input-container ic2">
        <input id="" class="input" type="text" placeholder=" " value="{{ old('visi') }}" name="visi"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Visi</label>
      </div>
      <div class="input-container ic2">
        <input id="" class="input" type="text" placeholder=" " name="misi" value="{{ old('misi') }}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Misi</label>
      </div>
      <button type="text" class="submit" value="tambah">Tambah</button>
    </form>
</div>
@endsection