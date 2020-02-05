@extends('welcome')
@section('content')
<div class="card text-center">
  <div class="card-header">
    Kategori
  </div>
  <div class="card-body">
    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quo!</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus at doloremque incidunt sapiente aliquid eaque.</p>
    <a href="{{ route('kategori.create')}}" class="btn btn-primary">Tambah Kategori</a>
  </div>
  <br>
<h1>&nbsp;hello this is All Category</h1>
<div class="container">
@foreach($categories as $c)
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $c->name}}</h2>
                <a href="{{ route('kategori.show', $c) }}" class="btn btn-primary">View</a>
                <a href="{{ route('kategori.edit', $c) }}" class="btn btn-success">Edit</a>
                <form class="" action="{{ route('kategori.destroy', $c) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class=" btn btn-danger" >
                        Delete
                    </button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <br>

    @endforeach
</div>



  <div class="card-footer text-muted">
    by Asep Kusnadi
  </div>
</div>
@endsection