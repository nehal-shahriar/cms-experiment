<div id="about" style="padding-top: 50px;">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Blogs
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addblogs')}}" class="btn btn-success">Add New Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td><img src="{{ asset('images/blogs/'.$blog->image) }}" width="60" /></td>
                                <td>{{ $blog->title }}</td>
                                <td><a class="text-indigo-600 hover-text-indigo-900" target="_blank" href="{{URL::to('/'.$blog->slug)}}">
                                        {{$blog->slug}}
                                    </a>
                                </td>
                                <td>{!! $blog->content !!}</td>
                                <td>{{$blog->created_at}}</td>
                                <td>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$blogs->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>