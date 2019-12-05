@extends('layouts.app')

@section('content')
    <div id="main" class="site-main">
        <div class="post-slider owl-carousel" data-items="1" data-loop="true" data-center="true" data-mouse-drag="true"
             data-nav="true" data-dots="false" data-autoplay="false" data-autoplay-speed="600"
             data-autoplay-timeout="2000">
            <div class="post-thumbnail" style="background-image:url({{ asset('argon') }}/img/blog/00.jpg)">
                <header class="entry-header">
                    <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Life" rel="category tag">Pacientes</a>
                            </span>
                    </div>
                    <h2 class="entry-title"><a href="blog-single.html">Slide No.1</a></h2>

                </header>
            </div>
            <div class="post-thumbnail" style="background-image:url({{ asset('argon') }}/img/blog/00.jpg)">
                <header class="entry-header">
                    <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Travel" rel="category tag">Pacientes</a>
                            </span>
                    </div>
                    <h2 class="entry-title"><a href="blog-single.html">Slide No.2</a></h2>
                </header>
            </div>
            <div class="post-thumbnail" style="background-image:url({{ asset('argon') }}/img/blog/00.jpg)">
                <header class="entry-header">
                    <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Travel" rel="category tag">Pacientes</a>
                            </span>
                    </div>
                    <h2 class="entry-title"><a href="blog-single.html">Slide No.3</a></h2>
                </header>
            </div>
            <div class="post-thumbnail" style="background-image:url({{ asset('argon') }}/img/blog/00.jpg)">
                <header class="entry-header">
                    <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Travel" rel="category tag">Pacientes</a>
                            </span>
                    </div>
                    <h2 class="entry-title"><a href="blog-single.html">Slide No.4</a></h2>
                </header>
            </div>
            <div class="post-thumbnail" style="background-image:url({{ asset('argon') }}/img/blog/00.jpg)">

                <header class="entry-header">
                    <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Travel" rel="category tag">Pacientes</a>
                            </span>
                    </div>
                    <h2 class="entry-title"><a href="blog-single.html">Slide No.5</a></h2>
                </header>
            </div>
        </div>
        <div class="layout-medium">
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <div class="blog-creative  blog-stream">
                        <article class="hentry post has-post-thumbnail">
                            <div class="post-thumbnail post-img"
                                 style="background-image:url({{ asset('argon') }}/img/blog/02.png)">
                                <a href="blog-single.html">Articulo No.1</a>
                                <header class="entry-header">
                                    <div class="entry-meta">
                                            <span class="entry-date">
                                                <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">Oct , 2019</time>
                                            </span>
                                    </div>
                                </header>
                            </div>
                            <div class="post-thumbnail post-desc">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                            <span class="cat-links">
                                                <a href="#" title="View all posts in Life" rel="category tag">Life</a>
                                            </span>
                                    </div>
                                    <h2 class="entry-title"><a href="blog-single.html">Articulo No.1</a>
                                    </h2>
                                    <p><a href="blog-single.html" class="more-link">Ver Post</a></p>
                                </header>
                            </div>
                        </article>
                        <article class="hentry post has-post-thumbnail">

                            <div class="post-thumbnail post-img"
                                 style="background-image:url({{ asset('argon') }}/img/blog/01.jpg)">
                                <a href="blog-single.html">Articulo No.1</a>
                                <header class="entry-header">
                                    <div class="entry-meta">
                                            <span class="entry-date">
                                                <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">Oct, 2019</time>
                                            </span>
                                    </div>
                                </header>
                            </div>
                            <div class="post-thumbnail post-desc">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                            <span class="cat-links">
                                                <a href="#" title="View all posts in Life" rel="category tag">Pacientes</a>
                                            </span>
                                    </div>
                                    <h2 class="entry-title"><a href="blog-single.html">Articulo No.2</a>
                                    </h2>
                                    <p><a href="blog-single.html" class="more-link">Ver Post</a></p>
                                </header>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="layout-medium">
            <div class="site-title-wrap">
                <h1 class="site-title">
                    <a href="{{'/'}}" rel="home">
                        <img src="{{ asset('argon') }}/img/brand/logoPacientes.png" alt="logo">
                    </a>
                </h1>
                <p class="site-description"> Slogan de Portal de pacientes</p>
            </div>
            <div class="footer-social">

                <div class="textwidget">
                    <a class="social-link facebook" href="#"></a>
                    <a class="social-link twitter" href="#"></a>
                    <a class="social-link instagram" href="#"></a>
                </div>
            </div>
        </div>
        <div class="site-info">
            <div class="layout-medium">
                <div class="textwidget">crado <em>por</em> Educamed</div>
            </div>
        </div>
    </footer>
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="js/jquery-3.1.1.min.js"><\/script>');
        }
    </script>
@endsection
