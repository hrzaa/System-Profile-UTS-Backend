@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>User Profile</h1>
        </div>
      </div>
    </div>
  </section>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">

                <div class="card-header">
                  <h4>Detail User Profile</h4>
                </div>
              
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr class="text-center">
                        <th colspan="2"><img src="/img/{{ Auth::user()->foto }}" alt="error" width="200px" class="rounded-circle"></th>
                      </tr>
                      <tr>
                        <th style="width: 50%">Nama lengkap</th>
                        <td style="width: 50%">{{ Auth::user()->name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{ Auth::user()->email }}</td>
                      </tr>
                    </thead>
                </table>
                <div class="row">
                    <div class="col mt-2">
                        <a href="/updatePassword50" class="btn btn-warning">Update password</a>
                        @if (Auth::user()->detail_data == null)
                            @if (Auth::user()->is_aktif)
                            <a href="/createData50" class="btn btn-success ">Lengkapi data</a>
                            @else
                            <a href="/createData50" class="btn btn-primary disabled">Lengkapi data</a>
                            <i>Menunggu persetujuan</i>
                            @endif
                        @else
                        <a href="/detailData50" class="btn btn-primary">Detail data</a>
                        @endif
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
