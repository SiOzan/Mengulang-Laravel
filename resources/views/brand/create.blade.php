@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Menambahkan Nama Brand
                        <a href="{{route('brand.index')}}" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="">Nama Brand</label>
                                <input type="text" class="form-control @error('name_brand') is-invalid @enderror" name="name_brand"></input>
                                @error('name_brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection