@extends('welcome')
@section('content')
<h1>Kategori Pemasukan</h1>
<br>&nbsp;
<a href="{{ route('pemasukan.create') }}" class="btn btn-primary"> Add Pemasukan</a>
<br>&nbsp;
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Gaji</th>
      <th scope="col">Tunjangan</th>
      <th scope="col">Bonus</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($inputs as $i)

    <tr>
      <th scope="row">{{ $i-> created_at}}</th>
      <td>{{$i->gaji}}</td>
      <td>{{$i->tunjangan}}</td>
      <td>{{$i->bonus}}</td>
      <td class="align-middle pull-right">
    <div class="btn-group"> 
      <a href="{{ route('pemasukan.edit', $i) }}" class="btn btn-success"> Edit</a>
      <form class="" action="{{ route('pemasukan.destroy', $i) }}" method="post">
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