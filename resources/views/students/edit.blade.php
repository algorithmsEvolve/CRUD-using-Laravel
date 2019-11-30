@extends('layout/main')

@section('title', 'Tachibana Rui - Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
            <form method="post" action="{{url('/students/'.$student->id)}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="Masukkan Nama" value='{{$student->nama}}'>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp"
                        placeholder="Masukkan NRP" value='{{$student->nrp}}'>
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email"
                        value='{{$student->email}}'>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan"
                        value='{{$student->jurusan}}'>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>

            </form>
        </div>
    </div>
</div>
@endsection