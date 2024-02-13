@extends('master')

@section('title', 'Media')
@section('description', 'Stay updated with the latest events and articles related to Kaddah Cleaning through our media page. Get insights, tips, and news about our services.')
@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mb-10 pb-1">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Media</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->
    <div class="page-content">
        <div class="container">
            <section class="element-section text-center mt-10 mb-10 pt-5 pb-2" id="section-elements">
                <h3 class="section-title">MEDIA</h3>
                <p class="text-default section-desc mx-auto">
                    Our Latest Press &amp; Blog
                </p>

                <div class="row elements">
                    
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <a href="{{route('event.index')}}" class="element">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px"
                                height="70px" viewBox="0 -8.5 70 70" enable-background="new 0 -8.5 70 70"
                                xml:space="preserve">
                                <g>
                                    <path d="M43,21.8c2.1,0,3.8-1.7,3.8-3.8c0-2.1-1.7-3.8-3.8-3.8c-2.1,0-3.8,1.7-3.8,3.8C39.2,20.1,40.9,21.8,43,21.8z M43,16.1
                                    c1,0,1.9,0.8,1.9,1.9c0,1-0.8,1.9-1.9,1.9c-1,0-1.9-0.8-1.9-1.9C41.1,16.9,41.9,16.1,43,16.1z" />
                                    <path d="M56.6,38.3h-1.8L46.3,30c-0.4-0.4-1-0.4-1.3,0l-3.5,3.4l-10-10.1c-0.4-0.4-1-0.4-1.4,0L15.2,38.3h-1.8c-0.5,0-1,0.4-1,1
                                    c0,0.5,0.4,1,1,1h2.2H46h8.4h2.2c0.5,0,1-0.4,1-1C57.5,38.7,57.1,38.3,56.6,38.3z M17.9,38.3l12.9-13.1l12.9,13.1H17.9z M46.4,38.3
                                    l-3.6-3.7l2.7-2.6l6.5,6.3H46.4z" />
                                    <path d="M57.5,6.5H12.4c-2.1,0-3.8,1.7-3.8,3.8v32.4c0,2.1,1.7,3.8,3.8,3.8h45.1c2.1,0,3.9-1.7,3.9-3.8V10.3
                                    C61.4,8.2,59.7,6.5,57.5,6.5z M59.5,42.7c0,1.1-0.9,2-1.9,2H12.4c-1.1,0-1.9-0.9-1.9-2V10.3c0-1.1,0.8-2,1.9-2h45.1
                                    c1.1,0,1.9,0.9,1.9,2L59.5,42.7L59.5,42.7z" />
                                </g>
                            </svg>
                            <p>Press</p>
                            <p class="media-p">
                                Operating on a wide, multi-national scale, our image &amp; relationship with public entities and global
                                marketplaces are heavily accounted for. Discover the latest events that we took part in. Expos, trade shows, seminars, and much more... <br>
                                Everything's right here on this blog to quench your thirst for curiosity!
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <a href="{{route('blog.index')}}" class="element">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px"
                                height="70px" viewBox="0 -9 70 70" enable-background="new 0 -9 70 70"
                                xml:space="preserve">
                                <g>
                                    <path d="M55.6,46c-3.5,0-6.3-2.8-6.3-6.3c0-0.4,0-0.8,0.1-1.2c-0.1-1.3-1.1-2.2-2.3-2.2c-1.1,0-2.1,0.8-2.3,1.9
                                        c0.1,0.6,0.2,1.1,0.2,1.6c0,3.5-2.8,6.3-6.3,6.3c-3.5,0-6.3-2.8-6.3-6.3c0-3.5,2.8-6.3,6.3-6.3c2,0,4,1,5.1,2.7l0.1,0.1
                                        c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0c0,0,0.1,0,0.1,0l0.1-0.1c0.7-0.8,1.8-1.3,2.8-1.3c1.1,0,2.2,0.5,2.9,1.4l0.1,0.1c0,0,0.1,0,0.1,0
                                        c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1l0.1-0.1c1.2-1.7,3.1-2.7,5.2-2.7c3.5,0,6.3,2.8,6.3,6.3C61.9,43.2,59.1,46,55.6,46z M38.8,34.9
                                        c-2.7,0-4.9,2.2-4.9,4.8c0,2.7,2.2,4.8,4.9,4.8c2.7,0,4.9-2.2,4.9-4.8c0-0.4,0-0.8-0.1-1.2l0-0.1c0,0,0-0.1-0.1-0.1l0,0
                                        c0,0,0-0.1,0-0.1C42.7,36.2,40.9,34.9,38.8,34.9z M55.6,34.9c-2.7,0-4.9,2.2-4.9,4.8c0,2.7,2.2,4.8,4.9,4.8c2.7,0,4.9-2.2,4.9-4.8
                                        C60.5,37.1,58.3,34.9,55.6,34.9z" />
                                    <path d="M15.3,23.2h36.2v1.5H15.3V23.2z" />
                                    <path d="M15.3,30.2h36.2v1.5H15.3V30.2z" />
                                    <path d="M15.3,37.7h12.2v1.5H15.3V37.7z" />
                                    <path d="M22,20.7l-4-5.3c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.1,0.1v5.2h-1.3v-7.6h1.3l4.2,5.4c0,0,0.1,0.1,0.1,0.1
                                    c0,0,0,0,0,0c0.1,0,0.1-0.1,0.1-0.1v-5.4h1.3v7.6L22,20.7L22,20.7z" />
                                                                        <path d="M26,20.7v-7.6h5.4v1.1h-3.9c-0.1,0-0.1,0.1-0.1,0.1v1.9c0,0.1,0.1,0.1,0.1,0.1h3.5v1h-3.5c-0.1,0-0.1,0.1-0.1,0.1v1.9
                                    c0,0.1,0.1,0.1,0.1,0.1h4.1v1.1H26L26,20.7z" />
                                                                        <path d="M40.3,20.7l-1.9-5.9c0-0.1-0.1-0.1-0.1-0.1l0,0c-0.1,0-0.1,0-0.1,0.1l-1.8,5.9h-1l-2.7-7.6h1.4l1.7,4.9
                                    c0,0.1,0.1,0.1,0.1,0.1c0,0,0,0,0,0c0.1,0,0.1,0,0.1-0.1l1.5-4.9h1.5l1.5,4.9c0,0.1,0.1,0.1,0.1,0.1c0,0,0,0,0,0
                                    c0.1,0,0.1,0,0.1-0.1l1.7-4.9h1.4l-2.7,7.6H40.3z" />
                                                                        <path d="M48.1,20.8c-1.1,0-2.2-0.4-3.1-1.2l0.8-0.9c0.8,0.7,1.7,1,2.4,1c0.4,0,0.7-0.1,1-0.3c0.3-0.2,0.4-0.5,0.4-0.8
                                    c0-0.3-0.1-0.6-0.4-0.8c-0.2-0.2-0.7-0.3-1.3-0.5c-0.9-0.2-1.6-0.5-2-0.8c-0.4-0.3-0.6-0.8-0.6-1.5c0-0.7,0.2-1.2,0.7-1.6
                                    c0.5-0.4,1.2-0.6,1.9-0.6c0.5,0,1,0.1,1.5,0.3c0.4,0.1,0.8,0.3,1.1,0.6L50,14.7c-0.7-0.5-1.4-0.7-2.1-0.7c-0.4,0-0.7,0.1-0.9,0.3
                                    c-0.2,0.2-0.4,0.5-0.4,0.8c0,0.3,0.2,0.6,0.4,0.8c0.2,0.2,0.7,0.3,1.6,0.5c0.7,0.2,1.3,0.4,1.7,0.8c0.4,0.3,0.6,0.8,0.6,1.5
                                    c0,0.7-0.2,1.2-0.7,1.6C49.6,20.6,48.9,20.8,48.1,20.8z" />
                                                                        <path d="M54.6,6H12C9.8,6,8.1,7.7,8.1,9.8v32c0,2.1,1.7,3.8,3.9,3.8h15.9v-2H12c-1,0-1.8-0.8-1.8-1.8v-32C10.2,8.8,11,8,12,8h42.6
                                    c1,0,1.8,0.8,1.8,1.8v19.9h2.1V9.8C58.5,7.7,56.8,6,54.6,6z" />
                                </g>
                            </svg>
                            <p>Blog</p>
                            <p class="media-p">
                                We put our knowledge &amp; hands-on expertise to the benefit of communities &amp; individuals alike through our daily operations. If you're yet to profit from collaborating
                                with us, feel free to browse on to road some helpful insights and to discover some practical cleaning
                                skills that we feel could add value to your daily cleaning experience.
                            </p>
                        </a>
                    </div>
                    
                </div>
            </section>
            <!-- End of Element Section -->
        </div>
    </div>
</main>
<!-- End of Main -->

@endsection