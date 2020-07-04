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
                      <th>No.</th>
                      <th>Judul</th>
                      <th>Pertanyaan</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Diperbaharui</th>
                      <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($pertanyaans as $tanya)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tanya->judul}}</td>
                    <td>{{$tanya->isi}}</td>
                    <td>{{$tanya->tanggal_dibuat}}</td>
                    <td>{{$tanya->tanggal_diperbaharui}}</td>
                    <td>
                    <form action="{{ url('/jawaban/'.$tanya->id) }}" method="post">
                    @csrf
                    <input type="text" name="isi">
                    <input hidden name="pertanyaan_id" value="{{$tanya->id}}">
                    <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
                    <input hidden name="tanggal_diperbaharui" value="{{\Carbon\Carbon::now()}}">
                    <button type="submit" class="btn btn-success">Masukkan Jawaban</button>
                    </form>
                    <a href="{{url('/jawaban/'.$tanya->id)}}">
                    <button class="btn btn-warning"> Lihat Jawaban</button>
                    </a>
                    </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>

</div>

@endsection