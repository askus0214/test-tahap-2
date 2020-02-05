@extends('welcome')
@section('content')
<h1>hello this is home</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Saldo</th>
      <th scope="col">Total Pengeluaran</th>
      <th scope="col">Total Pemasukan</th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1 pebruari 2020</th>
      <td>1.000.000</td>
      <td>500.000</td>
      <td>500.000</td>
    </tr>
    <tr>
      <th scope="row">2 pebruari 2020</th>
      <td>1.000.000</td>
      <td>500.000</td>
      <td>500.000</td>
    </tr>
    <tr>
      <th scope="row">3 pebruari 2020</th>
      <td>1.000.000</td>
      <td>500.000</td>
      <td>500.000</td>
    </tr>
  </tbody>
</table>
@endsection