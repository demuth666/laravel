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
                <a href="{{ route ('register')}}">
                <i class="uil uil-plus"></i>
                <span class="button-text">Tambah</span>
                </a>
              </div>
          </div>
            <table class="content-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>voting</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->nis}}</td>
                    <td>{{$user->kelas}}</td>
                    <td>
                      @if ($user->voting == 'true')
                          <span class="sudah">Sudah Voting</span>
                      @else
                          <span class="belum">Belum Voting</span>
                      @endif
                  </td>
                    <td>{{$user->role}}</td>
                    <td nowrap="nowrap">
                      <a href="/users/{{$user->id}}/edit"><i class="uil uil-edit edit"></i></a>
                      @if ($user->id_calon == null)
                          <a href="" class="btn btn-primary disabled"><i class="uil uil-history-alt"></i></a>
                      @else
                          <a href="{{ route('admin.resetPemilih', [$user->id, $user->id_calon]) }}"
                              class="btn btn-primary"><i class="uil uil-history-alt"></i></a>
                      @endif
                      <a href="{{ route('user.delete', $user->id) }}"
                        onclick="return confirm('yakin ingin menghapus data?');"
                          class="sampah"><i class="uil uil-trash-alt"></i></a>
                        </td>
                  </tr>
                  @endforeach
                </tbody>
              </table> >
    </div>
</div>
@endsection

