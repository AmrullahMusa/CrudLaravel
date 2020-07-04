@extends('master')

@section('content')
<a href="{{url('/pertanyaan')}}" class="ml-3">
<button class="btn btn-info mt-3"> Isi Jawaban Lagi ?</button>
</a>
<div class="card ml-3 mt-3">

<h1>Pertanyaan :</h1> 
<br>
<p>Judul : {{$pertanyaan->judul}}</p> 
<p>isi : {{$pertanyaan->isi}}</p> 
<p>Tanggal Dibuat : {{$pertanyaan->tanggal_dibuat}}</p> 
<p>Tanggal Diperbaharui : {{$pertanyaan->tanggal_diperbaharui}}</p>

<h1>Jawaban :</h1> 
<table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Daftar Jawaban</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Diperbaharui</th>
                    </tr>
                  </thead>
                  <tbody>
@foreach ($jawabans as $jawaban)
<tr>
    <td>{{$jawaban->isi}}</td>
    <td>{{$jawaban->tanggal_dibuat}}</td>
    <td>{{$jawaban->tanggal_diperbaharui}}</td>
</tr>
@endforeach
    </tbody>
    </table>
</div>

@endsection