@extends('layouts.backend')
@section('content')
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Menambahkan User</h5>
                <div class="row mb-3">
                    <label for="input49" class="col-sm-3 col-form-label">Masukan Nama Anda</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons-outlined fs-5">vpn_key</i></span>
                            <input type="text" class="form-control" @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus id="input49"
                                placeholder="Masukan nama">
                        </div>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="input51" class="col-sm-3 col-form-label">Alamat Email</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons-outlined fs-5">drafts</i></span>
                            <input type="email" class="form-control" @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" id="input51"
                                placeholder="Email">
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="input52" class="col-sm-3 col-form-label">Kata Sandi</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons-outlined fs-5">vpn_key</i></span>
                            <input type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="input52"placeholder="Masukan kata sandi">
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="input52" class="col-sm-3 col-form-label">Konfirmasi Sandi</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons-outlined fs-5">vpn_key</i></span>
                            <input type="password" class="form-control" @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" id="input52" placeholder="Konfirmasi kata sandi">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input53" class="col-sm-3 col-form-label">Is Admin?</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons-outlined fs-5">format_list_bulleted</i></span>
                            <select class="form-select" name="is_admin" id="input53">
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{-- <div class="row mb-3">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="input54">
                        <label class="form-check-label" for="input54">Check me out</label>
                    </div>
                </div>
            </div> --}}
                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-grd-primary px-4">Tambah</button>
                            <a href="{{ route('user.index') }}" class="btn btn-grd-royal px-4">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
