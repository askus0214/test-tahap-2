@extends('welcome')
@section('content')
<h1>Kategori Pengeluaran</h1>
<br>&nbsp;
<a href="{{ route('pengeluaran.create') }}" class="btn btn-primary"> Add Pengeluaran</a>
<br>&nbsp;
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">sewa kost</th>
      <th scope="col">makan</th>
      <th scope="col">pakaian</th>
      <th scope="col">liburan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($outputs as $o)

    <tr>
      <th scope="row">{{ $o-> created_at}}</th>
      <td>{{$o->sewa_kost}}</td>
      <td>{{$o->makan}}</td>
      <td>{{$o->pakaian}}</td>
      <td>{{$o->liburan}}</td>
      <td class="align-middle pull-right">
    <div class="btn-group"> 
      <a href="{{ route('pengeluaran.edit', $o) }}" class="btn btn-success"> Edit</a>
      <form class="" action="{{ route('pengeluaran.destroy', $o) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <button type="submit" class=" btn btn-danger" >
            Delete
        </button>
      </form>
    </div>
    </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection