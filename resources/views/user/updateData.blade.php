@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                      <h4 class="card-header">Form Update Data Profile
                      <a href="{{ 'profile50' }}" class="btn btn-danger float-right">Back</a>
                      </h4>
                    </div>
                <div class="card-body">
                  <form action="/updateDataProses50" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Alamat" name="alamat" required value="{{ Auth::user()->detail_data->alamat }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir" required value="{{ Auth::user()->detail_data->tempat_lahir }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir" required value="{{ Auth::user()->detail_data->tanggal_lahir }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="id_agama" required>
                          <option selected disabled>Pilih agama</option>
                          @foreach ($agamas as $agama)
                          <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="input-group mb-3">
                      <input type="number" class="form-control" placeholder="Umur" name="umur" required value="{{ Auth::user()->detail_data->umur }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8">
                        <div class="icheck-primary">
                          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                          <label for="agreeTerms">
                          I agree to the <a href="#">terms</a>
                          </label>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>

              </div>
            </div>
          </div>
    </div>
  </div>
@endsection
