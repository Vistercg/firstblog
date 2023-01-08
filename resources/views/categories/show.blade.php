
@extends('layouts.category_layout')

@section('title', 'FirstBlog - Freelance and life :: ' . $category->title)

@section('page-title')
    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2> {{ $category->title }} <small class="hidden-xs-down hidden-sm-down">Блог и фрилансе, дополнительном заработке и жизни </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">На главную</a></li>
                        <li class="breadcrumb-item active">{{ $category->title }}</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="blog-custom-build">
            @foreach($posts as $post)
                <div class="blog-box wow fadeIn">
                    <div class="post-media">
                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">
                            <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div>
                            <!-- end hover -->
                        </a>
                    </div>
                    <!-- end media -->
                    <div class="blog-meta big-meta text-center">
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="https://vk.com/share.php?url={{ 'posts.single' . $post->slug }}" class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i> <span
                                            class="down-mobile">Поделиться в Вконтакте</span></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                        <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">{{ $post->title }}</a></h4>
                        <p>{!! $post->description !!}</p>
                        <small><a href="{{ route('categories.single', ['slug' => $category->slug]) }}" title="">{{ $category->title }}</a></small>
                        <small><a>{{ $post->getPostDate() }}</a></small>
                        <small><a><i class="fa fa-eye"></i>{{ $post->views }}</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">
            @endforeach

        </div>
    </div>

    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                {{ $posts->links() }}
                {{--                <ul class="pagination justify-content-center">--}}
                {{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                {{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                {{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                {{--                    <li class="page-item">--}}
                {{--                        <a class="page-link" href="#">Next</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->

@endsection
