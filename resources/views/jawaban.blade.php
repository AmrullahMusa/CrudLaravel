@extends('master')

@section('content')
<a href="{{url('/pertanyaan')}}" class="ml-3">
<button class="btn btn-info"> Isi Jawaban Lagi ?</button>
</a>
<div class="card ml-3 mt-3">

@foreach ($jawabans as $jawaban)
<h1>{{$jawaban->isi}}</h1>
@endforeach

</div>

@endsection