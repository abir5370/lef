@extends('admin.include.master')
@section('body')
<div class="main-content-inner font">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{route('supporters.index')}}">Supporter</a>
            </li>
            <li class="active">Add Supporter / Donar Information</li>
        </ul><!-- /.breadcrumb -->
    </div>

    <div class="page-content font">
        <div class="row">
            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form" method="POST" action="{{route('supporters.store')}}"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- Supporter heade tag  --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="title">Head Tag :</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" id="title" placeholder="Tag line"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>
                    {{-- Supporter heade tag --}}
                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="name">Supporter Name :</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="name" placeholder="Supporter Name"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- Supporter Email --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="name">Supporter Email :</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" id="email" placeholder="Supporter email"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- About Supporter --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="description">About Supporter
                            :</label>
                        <div class="col-sm-9">
                            <textarea id="description" name="about_supporter" placeholder="Write about supporter" class="col-xs-12 col-md-11 col-sm-12"
                                style="height: 150px; width: 92%;"></textarea>
                            <span>
                                @error('about_supporter')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- Supporter Social Link --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="link">Supporter Social Link :</label>
                        <div class="col-sm-9">
                            <input type="text" name="social_link" id="link" placeholder="Supporter Social Link"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('social_link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                  {{-- supporter Image --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="image">Supporter Image :</label>
                        <div class="col-sm-9">
                            <div class="col-sm-5">
                                <div class="widget-body">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-md-12">
                                            <label class="ace-file-input ace-file-multiple">
                                                <input type="file"
                                                    id="imageInput" name="image" accept=".jpg, .jpeg, .png,gif"
                                                    onchange="previewImage()" /><span class="ace-file-container"
                                                    data-title="Choose Service Image..."><span class="ace-file-name"
                                                        data-title="No File ..."><i
                                                            class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a
                                                    class="remove" href="#"><i
                                                        class=" ace-icon fa fa-times"></i></a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <span class="help-inline col-xs-12 col-sm-7">
                                <label class="middle" id="imagePreviewLabel">
                                    <img height="145" width="155" src="{{ asset('admin-asset/images/temp.png') }}"
                                        alt="service Image">
                                </label>
                            </span>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Create
                        </button>
                    </div>
                </div>
                </form>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>

 {{-- live image preview  --}}
 <script>
    function previewImage() {
        var input = document.getElementById('imageInput');
        var previewLabel = document.getElementById('imagePreviewLabel');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                previewLabel.innerHTML = '<img src="' + e.target.result +
                    '" alt="Image Preview" style="max-width:155px;max-height:145px;">';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            previewLabel.innerHTML = '<span class="lbl"> Image Preview</span>';
        }
    }
</script>

@endsection
