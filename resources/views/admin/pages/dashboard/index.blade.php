@extends('template')
@section('content')
 <div class="dash-content">
    <div class="overview">
        <div class="form-check form-switch">
            {{-- @foreach ($user as $user) --}}
            @if ($user->status == 'mulai')
            <a href="{{ route('off', [$user->status]) }}" class="btn btn-primary"><i class="uil uil-toggle-on"></i></a>
            @else
            <a href="{{ route('on', [$user->status]) }}"
                class="btn btn-danger"><i class="uil uil-toggle-off"></i></a>
            @endif
            {{-- @endforeach --}}
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

