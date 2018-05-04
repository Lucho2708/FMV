@extends('principal')

@section('menu')
    @include('website.principal.menu')
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="images/img-1.png" alt="">
                                <h5>Global</h5>
                                <h3>Research</h3>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="images/img-2.png" alt="">
                                <h5>Communication</h5>
                                <h3>resources</h3>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="images/img-3.png" alt="">
                                <h5>Confidentiality</h5>
                                <h3>guarantee</h3>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Maecenas sit amet augue. Sed blandit lectus eget lectus. Mauris justo. Curabitur nibh lectus, dapibus id, tempor eu.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="images/img-4.png" alt="">
                                <h5>Network</h5>
                                <h3>Solutions</h3>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Praesent vestibulum molestie lacus. Aenean noy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row divider2">
            <div class="span4">
                <h2>services list</h2>
                <ul class="list">
                    <li><a href="#">Mauris fermentum dic</a></li>
                    <li><a href="#">Tum magna Sed laoreet</a></li>
                    <li><a href="#">Aliquam leorUt tellus</a></li>
                    <li><a href="#">Dolor dapibus eget</a></li>
                    <li><a href="#">Elementum vel cursus</a></li>
                    <li><a href="#">Eleifend elit Aenean risiurna</a></li>
                    <li><a href="#">Aliquam erat volutpat</a></li>
                    <li><a href="#">Duis ac turpis. Integer</a></li>
                    <li><a href="#">Rutrum ante eu lacus</a></li>
                    <li><a href="#">Ut tellus dolor, dapibus </a></li>
                    <li><a href="#">Eget, elementum vel cursus</a></li>
                </ul>
                <a href="#" class="link">details</a>
            </div>

            <div class="span8">
                <h2>services overview</h2>
                <div class="clearfix">
                    <img src="images/img6.jpg" alt="" class="img-radius alignleft">
                    <h5 class="indent-3">Ger rutrum ante eu</h5>
                    <p class="lead">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>
                </div>
                <p><strong>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</strong></p>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.  Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. <a href="#">Donec accumsan malesuada orci.</a> Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. ulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.  </p>
            </div>

        </div>

    </div>
@endsection