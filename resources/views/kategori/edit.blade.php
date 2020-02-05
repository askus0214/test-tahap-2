@extends('welcome')
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- isi halaman -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Edit Category</h4>

                        <div class="row">
                            <div class="col-12">
                                
                                <div class="col-12">
                                    <form action="{{ route('kategori.update', $categories) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                                     
                                        <div class="form-group">
                                            <label for="" >Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name"  class="form-control" value="{{$categories->name}}">
                                           
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="" class="">Description</label>
                                                    <textarea id="elm2" name="description" class="form-control my-editor">{!!$categories->description!!}</textarea>
                                            <script>
                                                var editor_config = {
                                                    path_absolute : "/",
                                                    selector: "textarea.my-editor",
                                                    plugins: [
                                                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                                                    "insertdatetime media nonbreaking save table contextmenu directionality",
                                                    "emoticons template paste textcolor colorpicker textpattern"
                                                    ],
                                                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                                                    relative_urls: false,
                                                    file_browser_callback : function(field_name, url, type, win) {
                                                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                                    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                                                    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                                                    if (type == 'image') {
                                                        cmsURL = cmsURL + "&type=Images";
                                                    } else {
                                                        cmsURL = cmsURL + "&type=Files";
                                                    }

                                                    tinyMCE.activeEditor.windowManager.open({
                                                        file : cmsURL,
                                                        title : 'Filemanager',
                                                        width : x * 0.8,
                                                        height : y * 0.8,
                                                        resizable : "yes",
                                                        close_previous : "no"
                                                    });
                                                    }
                                                };

                                                tinymce.init(editor_config);
                                            </script>   
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
