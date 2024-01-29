@extends('admin.include.master')
@section('body')
<div class="main-content-inner font">
    <!-- /.breadcrumb-list -->
    <div class="breadcrumbs-container" style="background-color: #ffceed; padding: 15px; border-radius: 8px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); margin-bottom: 20px;">
        <ul class="breadcrumb-list" style="list-style: none; padding: 0; margin: 0; display: flex; align-items: center;">
            <li class="active bold-text highlighted-item" style="font-weight: bold; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); color: #your-desired-text-color; padding: 10px 20px; border-radius: 8px;">
                Edit About & Contact Information
            </li>
        </ul>
    </div>
    <!-- end breadcrumb --> 

    <div class="page-content font">
        <div class="row">
            <div class="col-xs-12">
                @if(session('success'))
                  <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form" method="POST" action="{{route('widgets.update')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$widget->first()->id}}">
                    {{-- about headline  --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="title">About Headline :</label>

                        <div class="col-sm-9">
                            <input type="text" value="{{$widget->first()->title}}" name="title" id="title" placeholder="About Headline"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                     {{-- about Description  --}}
                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="desp">About Description :</label>

                        <div class="col-sm-9">
                            <textarea id="desp" name="description" 
                            class="col-xs-12 col-md-11 col-sm-12"
                            style="height: 150px; width: 92%;">{{$widget->first()->description}}</textarea>
                            <br> <br>
                            <span>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- about image --}}

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="image">About Image :</label>
                        <div class="col-sm-9">
                            <div class="col-sm-5">
                                <div class="widget-body">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-md-12">
                                            <label class="ace-file-input ace-file-multiple"><input type="file"
                                                    id="imageInput" name="image"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" /><span class="ace-file-container"
                                                    data-title="Choose About Image..."><span class="ace-file-name"
                                                        data-title="No File ..."><i
                                                            class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a
                                                    class="remove" href="#"><i
                                                        class=" ace-icon fa fa-times"></i></a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <span class="help-inline col-xs-12 col-sm-7">
                                <label class="middle" id="imagePreviewLabel">
                                    <img height="145" id="blah" width="155" src="{{asset('images/about/'.$widget->first()->image)}}"
                                        alt="About Image">
                                </label>
                            </span>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    {{-- email  --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="email">Email :</label>

                        <div class="col-sm-9">
                            <input type="email" value="{{$widget->first()->email}}" name="email" id="email" placeholder="email"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- Contact number --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="number">Number :</label>

                        <div class="col-sm-9">
                            <input type="number" value="{{$widget->first()->number}}" name="number" id="number" placeholder="number"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- address --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="address">Address :</label>

                        <div class="col-sm-9">
                            <textarea id="address" name="address" 
                            class="col-xs-12 col-md-11 col-sm-12"
                            style="height: 150px; width: 92%;">{{$widget->first()->address}}</textarea>
                            <br> <br>
                            <span>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- google map link --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="map">Map link :</label>

                        <div class="col-sm-9">
                            <input type="text" value="{{$widget->first()->map_link}}" name="map_link" id="map" placeholder="map link here"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

