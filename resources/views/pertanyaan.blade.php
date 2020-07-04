@extends('master')

@section('content')
<div class="ml3 mt=3">
<h1> Daftar Pertanyaan <h1>
<a href="/pertanyaan/create" class="btn btn-primary ml-3 mb-3">
Buat Pertanyaan Baru
</a>

<table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Nama</th>
                      <th>Judul</th>
                      <th>Pertanyaan</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($pertanyaan as $key => $tanya)
                    <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$tanya->nama}}</td>
                    <td>{{$tanya->judul}}</td>
                    <td>{{$tanya->pertanyaan}}</td>
                    <td><a href="/jawaban/{{$tanya->id}}" class="btn btn-sm btn-info"><i class="far fa-comments"></i></a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>

</div>

@endsection