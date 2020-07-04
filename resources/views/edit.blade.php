@extends('master')

@section('content')

<div class="card ml-3 mt-3">

<form  action="{{url('/pertanyaan/'.$id)}}" method="POST"> 
{{method_field('put')}}
@csrf
<input hidden name="id" value="{{$id}}">
<label for="">Judul Pertanyaan</label>
<input class="form-control" type="text" name="judul" value="{{$pertanyaan->judul}}">
<br>
<label for="">Isi Pertanyaan</label>
<textarea class="form-control type="text" class="form-control" value="{{$pertanyaan->isi}}" id="" name="isi" numfmt_parse_currency="pertanyaan" cols="30" rows="10"></textarea>
<br>
<input hidden class="form-control" type="text" name="tanggal_dibuat" value="{{$pertanyaan->tanggal_dibuat}}">
<br>
<input hidden class="form-control" type="text" name="tanggal_diperbaharui" value="{{\Carbon\Carbon::now()}}">
<br>
<button type="submit" class="btn btn-warning ml-3 mb-3">Update</button>
<a href="/pertanyaan" class="btn btn-info ml-3 mb-3">
Kembali
</a>
</form>

</div>


@endsection