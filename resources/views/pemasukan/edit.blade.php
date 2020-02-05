@extends('welcome')
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- isi halaman -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Edit Pemasukan</h4>

                        <div class="row">
                            <div class="col-12">
                                
                                <div class="col-12">
                                    <form action="{{ route('pemasukan.update', $inputs) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                                     
                                        <div class="form-group">
                                            <label for="" >Gaji <span class="text-danger">*</span></label>
                                            <input type="text" name="gaji"  class="form-control" value="{{$inputs->gaji}}">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="" >Name <span class="text-danger">*</span></label>
                                            <input type="text" name="tunjangan"  class="form-control" value="{{$inputs->tunjangan}}">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="" >Name <span class="text-danger">*</span></label>
                                            <input type="text" name="bonus"  class="form-control" value="{{$inputs->bonus}}">
                                           
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="submit" value="Simpan" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
        <!-- isi halaman -->
    </div>
</div>
@endsection
