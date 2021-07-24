<div class="container blog-content">
    <div class="row">
        <!-- left content -->
        <div class="col-lg-8 pr-5">
            <div class="blog-title">
                <h3>
                    {{$title}}
                </h3>
            </div>
            <div class="blog-texttss">
                <p>
                    On {{$date}}
                </p>
                <diV class="share">
                    <a>
                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                    </a>
                    <diV class="share-links">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="false"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </diV>

                </div>
            </div>
            <div class="blog-image">
                <img src="{{ asset('images/blogs/'.$image) }}" alt="blog image" class="w-100 img-fluid">
            </div>
            <div class="blog-post">
                <p>
                    {!!$content!!}
                </p>
            </div>
            <div class="read">
                <p> 20 people read</p>
            </div>
            <div class="blog-texttss">

                <diV class="share">
                    <a>
                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                    </a>

                    <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>


                </div>
            </div>
        </div>
        <!-- left content ends -->
        <!-- right content -->
        <div class="col-lg-4">
            <div class="blog-list">
                <h3>Up Next</h3>
            </div>
            @foreach($bloglist as $blog)
            <div class="bloglist-item">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/blogs/'.$blog->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}
                        </h5>
                        <div class="card-text">
                            <p>{!! $blog->content !!}<a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$blog->slug)}}"><span class="readMore ">Read more..</span></a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- right content ends -->
    </div>
</div>