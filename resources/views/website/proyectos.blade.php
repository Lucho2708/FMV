@extends('principal')

@section('menu')
    @include('website.principal.menu')
@endsection

@section('contenido')
    <div class="container">
        <div class="row clearfix">
            <div class="span12">

                <div id="options" class="clearfix">
                    <ul id="filters" class="pagination option-set clearfix" data-option-key="filter">
                        <li>Categories: </li>
                        <li><a href="#filter" data-option-value="*" class="selected">Show All</a></li>
                        <li><a href="#filter" data-option-value=".project1">Category1</a></li>
                        <li><a href="#filter" data-option-value=".project2">Category2</a></li>
                        <li><a href="#filter" data-option-value=".project3">Category3</a></li>
                    </ul>
                </div> <!-- #options -->
                <ul class="thumbnails portfolio" id="container">
                    <li class="span3 element transition project1" data-category="transition">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>project 1</h3>
                            </div>
                            <div class="imgarea">
                                <a href="images/blank.png" class="magnifier" ><img alt="" src="images/project1.jpg"></a>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3 element project3"data-category="metalloid">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>project 2</h3>
                            </div>
                            <div class="imgarea">
                                <a href="images/blank.png" class="magnifier" ><img alt="" src="images/project2.jpg"></a>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3 element post-transition project1"  data-category="post-transition">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>project 3</h3>
                            </div>
                            <div class="imgarea">
                                <a href="images/blank.png" class="magnifier" ><img alt="" src="images/project3.jpg"></a>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Maecenas sit amet augue. Sed blandit lectus eget lectus. Mauris justo. Curabitur nibh lectus, dapibus id, tempor eu.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3 element transition project2" data-category="transition">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>project 4</h3>
                            </div>
                            <div class="imgarea">
                                <a href="images/blank.png" class="magnifier" ><img alt="" src="images/project4.jpg"></a>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Praesent vestibulum molestie lacus. Aenean noy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3 element project3"data-category="metalloid">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>project 1</h3>
                            </div>
                            <div class="imgarea">
                                <a href="images/blank.png" class="magnifier" ><img alt="" src="images/project5.jpg"></a>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3 element post-transition project2"  data-category="post-transition">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>project 2</h3>
                            </div>
                            <div class="imgarea">
                                <a href="images/blank.png" class="magnifier" ><img alt="" src="images/project6.jpg"></a>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.  </p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                    <li class="span3 element transition project1" data-category="transition">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>project 3</h3>
                            </div>
                            <div class="imgarea">
                                <a href="images/blank.png" class="magnifier" ><img alt="" src="images/project7.jpg"></a>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Maecenas sit amet augue. Sed blandit lectus eget lectus. Mauris justo. Curabitur nibh lectus, dapibus id, tempor eu.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                            <img src="images/shadow-thumb.jpg">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection