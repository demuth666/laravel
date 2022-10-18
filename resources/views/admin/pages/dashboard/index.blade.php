@extends('template')
@section('content')
 <div class="dash-content">
    <div class="overview">
        <div class="title">
            <span class="text">Dashboard admin</span>
        </div>

        <div class="boxes">
            @foreach ($kandidat as $k)
            <div class="box box1">
                <span class="nama">{{ $k->nama_ketua }} & {{ $k->nama_wakil }}</span>
                <img src="{{ url('/foto_calon/' . $k->foto_calon) }}" class="foto_calon"
                alt="...">
                <span class="text">Suara</span>
                <span class="number">{{ $k->suara}}</span>
            </div>
            @endforeach
        </div>
    </div>
  </div>  
  </div>
  
@endsection