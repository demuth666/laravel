@extends('template')
@section('content')
<div class="activiy-data">
    <form action="{{ route('user.update', ["id" => $user->id]) }}" method="post">
        @method('put')
        @csrf
      <div class="input-container ic1"> 
        <input id="" class="input" type="text" placeholder=" " name="nama" value="{{ $user->nama}}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Nama</label>
      </div>
      <div class="input-container ic2">
        <input id="" class="input" type="text" placeholder=" "  name="nis" value="{{ $user->nis}}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">NIS</label>
      </div>
      <div class="input-container ic3">
        <input id="" class="input" type="text" placeholder=" "  name="kelas" value="{{ $user->kelas}}"/>
        <div class="cut"></div>
        <label for="" class="placeholder">Kelas</label>
      </div>
      <button type="text" class="submit" value="edit">Edit</button>
    </form>
</div>
@endsection