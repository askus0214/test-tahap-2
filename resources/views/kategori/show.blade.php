@extends('welcome')
@section('content')
<br>&nbsp;
<a href="{{ url('kategori-home') }}" class="btn btn-dark">Back</a>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $category->name}}</h2>
                <p class="card-text">{{$category->description}}</p>
                <a href="{{ route('kategori.edit', $category) }}" class="btn btn-success">Edit</a>
                <form class="" action="{{ route('kategori.destroy', $category) }}" method="post">
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

</div>

@endsection