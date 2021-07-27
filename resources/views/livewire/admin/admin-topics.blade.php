<div id="about" style="padding-top: 50px;">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Topics
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addtopics')}}" class="btn btn-success">Add New Topics</a>
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
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($topics as $topic)
                            <tr>
                                <td>{{ $topic->id }}</td>
                                <td>{{ $topic->name }}</td>
                                <td><a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$topic->slug)}}">
                                        {{$topic->slug}}
                                    </a>
                                </td>
                                <td>{{$topic->created_at}}</td>
                                <td>
                                    <a href="{{route('admin.edittopic',['topic_slug'=>$topic->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" onclick="confirm('Are your sure, your want to delete this topic?') || event.stopImmediatePropagation()" wire:click.prevent="deletetopic({{$topic->id}})"><i class="fa fa-times fa-2x"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$topics->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>