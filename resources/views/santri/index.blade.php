@extends('layout.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/santri/create">Add Data</a>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>JURUSAN</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach($santri as $w)
                <tr>
                    <td>{{$w->id}}</td>
                    <td>{{$w->nama}}</td>
                    <td>{{$w->nim}}</td>
                    <td>{{$w->jurusan}}</td>
                    <td></td>
                    <td>{{$w->alamat}}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic example">    
                        <a class="btn btn-warning" href="/santri/{{$w->id}}/edit">Edit</a>
                            <form action="/santri/{{$w->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" name="submit" value="Delete" onclick="confirm('Sure?')">
                            </form>
                    </div>
                    </td>
                </tr>
        @endforeach
    </table>
        </div>
@endsection