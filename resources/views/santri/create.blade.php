@extends('layout.master')

@section('content')
    
    <div class="container">
        <h1>Create Data santri</h1>
        <form action="/santri/store" method="POST">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
            @csrf
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select><br>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>  
            <textarea class="form-control" name="alamat" cols="30" rows="10"></textarea><br>
        </div>
            <input type="submit" name="submit" class="btn btn-success" value="Save">
        </form>
    </div>

@endsection