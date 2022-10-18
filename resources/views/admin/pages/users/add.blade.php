@extends('template')
@section('content')
<div class="activiy-data">
    <form action="{{ route ('register.action') }}" method="POST">
        @csrf
      <div class="input-container ic1"> 
        <input id="nama" type="text"
        class="input" @error('nama') is-invalid @enderror" name="nama"
        value="{{ old('nama') }}" required autocomplete="nama" autofocus>

    @error('nama')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nama</label>
      </div>
      <div class="input-container ic2">
        <input id="nis" type="text"
        class="input" @error('nis') is-invalid @enderror" name="nis"
        value="{{ old('nis') }}" required autocomplete="nis" autofocus>

    @error('nis')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div class="cut"></div>
        <label for="lastname" class="placeholder">NIS</label>
      </div>
      <div class="input-container ic3">
        <input id="kelas" type="text"
        class="input" @error('kelas') is-invalid @enderror" name="kelas"
        value="{{ old('kelas') }}" required autocomplete="kelas" autofocus>

    @error('kelas')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Kelas</label>
      </div>
      <div class="input-container ic2">
        <input id="password" type="text"
        class="input" @error('password') is-invalid @enderror" name="password"
        value="{{ old('password') }}" required autocomplete="password" autofocus>

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Password</label>
      </div>
      <button type="text" class="submit" value="tambah">Tambah</button>
    </form>
</div>
@endsection