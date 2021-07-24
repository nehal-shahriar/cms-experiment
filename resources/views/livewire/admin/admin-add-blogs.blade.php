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
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addBlog">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Title</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" wire:keyup="generateSlug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        http://127.0.0.1:8000/
                                    </span>
                                    <input type="text" placeholder="Slug" class="form-control input-md" wire:model="slug">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Content</label>
                                <div class="body-content" wire:ignore>
                                    <trix-editor class="trix-content" x-ref="trix" wire:model.debounce.10000ms="content" wire:key="trix-content-unique-key"></trix-editor>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
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