@extends('welcome')
@section('content')
<br>
<h1>&nbsp;hello this is List input and output</h1>
<div class="container">
    <a href="{{ route('pemasukan.index') }}" class="btn btn-dark"> Cek Pemasukan</a>

    <a href="{{ route('pengeluaran.index') }}" class="btn btn-warning"> Cek Pengeluaran</a>
</div>

@endsection