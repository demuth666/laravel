@extends('template')
@section('content')
<div class="activity">
    <div class="title">
        <i class="uil uil-clock-three"></i>
        <span class="text">Recent Activity</span>
    </div>

    <div class="activity-data">
            <div class="button">
              <div class="content">
                <a href="{{ route ('calon.add')}}">
                <i class="uil uil-plus"></i>
                <span class="button-text">Tambah</span>
                </a>
              </div>
            </div>
            <table class="content-table">
                <thead>
                  <tr>
                    <th>Foto calon</th>
                    <th>Nama Ketua</th>
                    <th>Nama Wakil</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($kandidat as $calon)
                  <tr>
                    <td nowrap="nowrap">
                      <a href="{{ url('/foto_calon/' . $calon->foto_calon) }}" data-lightbox="example-1">
                          <img id="zoom-img" class="img-fluid mb-3"
                              src="{{ url('/foto_calon/' . $calon->foto_calon) }}" width="50">
                      </a>
                  </td>
                    <td>{{$calon->nama_ketua}}</td>
                    <td>{{$calon->nama_wakil}}</td>
                    <td>{{$calon->visi}}</td>
                    <td>{{$calon->misi}}</td>
                    <td><a href="/calons/{{$calon->id}}/edit"><i class="uil uil-edit edit"></i></a>
                        <form action="{{ route('calon.destroy', $calon->id) }}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btnsampah"
                          onclick="return confirm('yakin ingin menghapus data?');"><i class="uil uil-trash sampah"></i></button>
                        </form>
                        </td>
                  </tr>
                  @endforeach
                </tbody>
              </table> >
    </div>
</div>
@endsection