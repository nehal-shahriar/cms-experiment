<section id="first-blog">
    <div class="blog-one container">
        <!-- *************************Change************************* -->
        <div class="text-center">
            <div class="blogList-title">
                <h3>Lorem Ipsum Dolor Sit Amet
                </h3>
            </div>
            <div class="paragraph-text">
                <p>Lorem ipsum dolor sit amet, cipsum dolor sit amet. Lorem ipsum <span class="readMore">Continue Reading </span> </p>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-lg-9">
                <!-- ***change******** -->
                <div class="card-img ">
                    <!-- change -->
                    <img src="images/blog1.png" alt="Card image cap">
                </div>
            </div>
            <div class="col-lg-3 pl-5">
                <div class="list-tags mt-5 mb-5">
                    <h3> Topics </h3>
                </div>
                <div class=" row tag-lists mt-5">
                    <div class="col-lg-6 ">
                        <div class="tags ">
                            <a href="# ">#innovate</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="tag-circle ">
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                        </div>
                    </div>
                </div>
                <div class="row tag-lists mt-2">
                    <div class="col-lg-6 ">
                        <div class="tags ">
                            <a href="# ">#build</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="tag-circle ">
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                        </div>
                    </div>
                </div>
                <div class="row tag-lists mt-2">
                    <div class="col-lg-6 ">
                        <div class="tags ">
                            <a href="# ">#impact</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="tag-circle ">
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                        </div>
                    </div>
                </div>
                <div class="row tag-lists mt-2">
                    <div class="col-lg-6 ">
                        <div class="tags ">
                            <a href="# ">#update</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="tag-circle ">
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                            <i class="fa fa-circle " aria-hidden="true "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********************change*************************************** -->
    </div>
</section>
<!-- First Blog Ends -->
<!-- blog lists starts -->
<section id="blog-list" style="padding-bottom: 50px;">
    <div class="container blogList">
        @foreach($bloglist as $blog)
        <div class="card ">
            <div class="row pt-5 ">
                <div class="col-lg-4 pt-5 ">
                    <div class="blog-image  mt-3 ">
                        <img src="{{asset('images/blogs/'.$blog->images)}}" alt="{{$blog->title}}" class="img-fluid w-100 ">
                    </div>
                </div>
                <div class="col-lg-8 p-5">
                    <div class="blog-text ">
                        <h5>{{$blog->title}}
                        </h5>
                        <p>
                            {!! $blog->content !!}...<a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$blog->slug)}}">
                                <span class="readMore ">Continue Reading </span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach  
    </div>
</section>