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
                      <th>Jawaban</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($pertanyaans as $tanya)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tanya->judul}}</td>
                    <td>{{$tanya->isi}}</td>
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
                    <td>
                    <a href="{{url('/pertanyaan/'.$tanya->id)}}">
                    <button title="Lihat Q&A" class="btn btn-primary"><i class="fas fa-eye"></i></button>
                    </a>
                    <a href="{{url('/pertanyaan/'.$tanya->id.'/edit')}}">
                    <button title="Edit Pertanyaan" class="btn btn-info"><i class="fas fa-edit"></i></button>
                    </a>
                    <form method="POST" action="{{url('/pertanyaan/'.$tanya->id)}}">
                    @csrf
                    {{method_field('delete')}}
                    <button title="Detele" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>

</div>

@endsection