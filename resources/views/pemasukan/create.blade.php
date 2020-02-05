@extends('welcome')
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- isi halaman -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Add Pemasukan</h4>

                        <div class="row">
                            <div class="col-12">
                                
                                <div class="col-12">
                                    <form action="{{ route('pemasukan.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                     
                                        <div class="form-group">
                                            <label for="" >Gaji <span class="text-danger">*</span></label>
                                            <input type="text" name="gaji"  class="form-control" value="">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="" >Tunjangan <span class="text-danger">*</span></label>
                                            <input type="text" name="tunjangan"  class="form-control" value="">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="" >Bonus <span class="text-danger">*</span></label>
                                            <input type="text" name="bonus"  class="form-control" value="">
                                           
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
