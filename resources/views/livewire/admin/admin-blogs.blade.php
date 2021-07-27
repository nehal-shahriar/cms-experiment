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
                                <a href="{{route('blog.create')}}" class="btn btn-success">Add New Blogs</a>
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
                                <th>Topic</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td><img src="{{ asset('images/blogs/'.$blog->images) }}" width="60" /></td>
                                <td>{{ $blog->title }}</td>
                                <td><a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$blog->slug)}}">
                                        {{$blog->slug}}
                                    </a>
                                </td>
                                <td>
                                    @foreach($blog->topics as $topic)
                                    <li>{{ $topic->name }} </li>
                                    @endforeach
                                </td>
                                <td>{!! $blog->content !!}</td>
                                <td>{{$blog->created_at}}</td>
                                <td class="flex">
                                    <a href="#"><i class="fa fa-edit fa-2x text-info"></i></a>
                                    <form action="/admin/blogs/{{ $blog->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="border: none;"><i class="fa fa-times fa-2x"></i></button>
                                    </form>
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