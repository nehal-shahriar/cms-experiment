@extends('layouts.base')

@section('content')
<div id="about" style="padding-top: 50px;">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Create New Blog
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.blogs')}}" class="btn btn-success">All Blogs</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('blog.store') }}" method="POST">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Title</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Title" class="form-control input-md" id="title" name="title">
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        http://127.0.0.1:8000/
                                    </span><input type="text" placeholder="Slug" class="form-control input-md" id="slug" name="slug">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Blog Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" name="image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Select Options</label>
                                <select class="form-control topics" name="topics[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    @foreach($topics as $topic)
                                    <option value="{{$topic->id}}">{{$topic->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Content</label>
                                <div class="body-content">
                                    <input id="content" type="hidden" name="content">
                                    <trix-editor input="content"></trix-editor>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- @section('scripts')
<script>
    $('#title').change(function(e) {
        $.get("{{ route('blogs.checkSlug')}}", {
                'title': $(this).val()
            },
            function(data) {
                $('#slug').val(data.slug);
            }
        );
    });
</script>
@endsection -->
@endsection