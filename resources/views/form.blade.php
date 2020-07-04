@extends('master')

@section('content')

<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajukan Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Pertanyaan">
                  </div>
                    <label for="pertanyaan">Pertanyaan</label>
                    <textarea class="form-control type="text" class="form-control" id="" name="isi" numfmt_parse_currency="pertanyaan"  placeholder="Isi Pertanyaan Di sini" cols="30" rows="10"></textarea>
                    <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
                    <input hidden name="tanggal_diperbaharui" value="{{\Carbon\Carbon::now()}}">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
                </div>
              </form>
            </div>
</div>

@endsection