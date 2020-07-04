@extends('master')

@section('content')
<a href="{{url('/pertanyaan')}}" class="ml-3">
<button class="btn btn-info mt-3"> Isi Jawaban Lagi ?</button>
</a>
<div class="card ml-3 mt-3">

<table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Daftar Jawaban</th>
                      <th>Tanggal Dibuat</th>
                    </tr>
                  </thead>
                  <tbody>
@foreach ($jawabans as $jawaban)
<tr>
    <td>{{$jawaban->isi}}</td>
    <td>{{$jawaban->tanggal_dibuat}}</td>
</tr>
@endforeach
    </tbody>
    </table>
</div>

@endsection