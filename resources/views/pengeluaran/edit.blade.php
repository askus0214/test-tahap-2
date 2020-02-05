@extends('welcome')
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- isi halaman -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Edit Pengeluaran</h4>

                        <div class="row">
                            <div class="col-12">
                                
                                <div class="col-12">
                                    <form action="{{ route('pengeluaran.update', $outputs) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                                     
                                        <div class="form-group">
                                            <label for="" >Sewa Kost <span class="text-danger">*</span></label>
                                            <input type="text" name="sewa_kost"  class="form-control" value="{{$outputs->sewa_kost}}">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="" >Makan <span class="text-danger">*</span></label>
                                            <input type="text" name="makan"  class="form-control" value="{{$outputs->makan}}">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="" >Pakaian <span class="text-danger">*</span></label>
                                            <input type="text" name="pakaian"  class="form-control" value="{{$outputs->pakaian}}">
                                           
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="" >Liburan <span class="text-danger">*</span></label>
                                            <input type="text" name="liburan"  class="form-control" value="{{$outputs->liburan}}">
                                           
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
