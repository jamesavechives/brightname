@extends('layouts.bg')

@section('content')
<div id="middle" class="full_width">

    <div class="container clearfix page">
        <div id="mid_bird"></div>
        <div id="mid_baloon"></div>
        <!-- header slider -->
        <div class="header_slider">
            <div class="banner-container">
                <div class="banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                            <img src="{{url('/photos/slider_111.jpg')}}" alt="" width="940" height="356">                                                                                    
                        </li>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                            <img src="{{url('/photos/slider_12.jpg')}}" alt="" width="940" height="356">                                                        
                        </li>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                            <img src="{{url('/photos/slider_1_3.jpg')}}" alt="" width="940" height="356">
                            
                        </li>
                    </ul>
                </div>
            </div>

            <script>

                $(document).ready(function () {
                    if ($.fn.cssOriginal != undefined)
                        $.fn.css = $.fn.cssOriginal;
                    $('.banner').revolution({
                        delay: 5000,
                        startwidth: 940,
                        startheight: 356,
                        onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off
                        hideThumbs: 0,
                        navigationType: "none", // bullet, thumb, none
                        navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
                        navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
                        navigationHAlign: "center", // Vertical Align top,center,bottom
                        navigationVAlign: "center", // Horizontal Align left,center,right
                        soloArrowLeftHalign: "left",
                        soloArrowLeftValign: "center",
                        soloArrowLeftHOffset: -29,
                        soloArrowLeftVOffset: 0,
                        soloArrowRightHalign: "right",
                        soloArrowRightValign: "center",
                        soloArrowRightHOffset: -29,
                        soloArrowRightVOffset: 0,
                        touchenabled: "on", // Enable Swipe Function : on/off
stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                        stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatichideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                        hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                        hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
                        fullWidth: "off",
                        shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

                    });
                });
            </script>

        </div>
        <!--/ header slider -->        
        
        <div class="content" style="width:100%">
            <div class="boxrow clearfix" style="width:100%">
                <div class="box_2" style="width:100%"> 
                    <div class="box_content" style="background-image: none">
                        <table>
                            <tr ><td colspan="3">
                           <br> <h3>Why use Bright Name?</h3>                                               
                        </tr>
                        <tr><td style="width:20%">
                        <div class="box_thumb left><div class="post-image"><img src="{{url('/photos/aboutus_homepage.jpg')}}" alt="" /></div>  </td>                  
                            </td><td style="width:67%"><div style="text-align:left">
                        <p><span class="text_style1" >Your name defines you. It’s your brand for the rest of your life. When you begin studies in school your teachers and classmates will relate to you through your name, they will get a sense of who you are and what your personality is like through your name and interact with you accordingly. It’s truly remarkable how powerful a name, a chosen identity, can really be. Your personal identity will carry you through the rest of your life… when you begin your career, look for that special someone, 
form business and personal connections; and so on. It’s never to early or too late to show the world who you really are. Bright Name makes it fun and easy to discover your perfect English name. Try us out today!                            </span></p></div></td><td style="width:20%"></td></tr>
                        </table>
                    </div>
                </div>
                <div class="box_bot">
                </div>
            </div>
        </div>
        <div class="bottom_boxes">

            <div class="bootstrap-iso">
                <script type="text/css">
                    .box_circle_photo {
                        background:none;
                        margin-left:10px}
                    .multi-item-carousel{
                        @media all and (transform-3d), (-webkit-transform-3d) { 

                            .carousel-inner > .item.next,
                            .carousel-inner > .item.active.right {
                                left: 0;
                                -webkit-transform: translate3d(50%, 0, 0);
                                transform: translate3d(50%, 0, 0);
                            }
                            .carousel-inner > .item.prev,
                            .carousel-inner > .item.active.left {
                                left: 0;
                                -webkit-transform: translate3d(-50%, 0, 0);
                                transform: translate3d(-50%, 0, 0);
                            }
                        }
                    }

                    body{
                        background: #333;
                        color: #ddd;
                    }

                </script>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel slide multi-item-carousel" id="theCarousel">
                                <div class="carousel-inner" style="right:50px">
                                    <div class="item active" style="width:1000px;">
                                        <div class="item-content col-xs-12"  style="width:500px"><a href="#1">
                                                <div class="box box_circle_photo" style="background-image:"none">
                                                    <div class="ribbon"><span></span><img src="{{url('/upload/10main.jpg')}}" width="103" height="103" alt=""></div>
                                                    <div class="box_content">
                                                        <p>&ldquo; Finding my English name was enjoyable...I am very satisfied with the name choices I was given and with the assistance of my family & friends I now have the best name I could have found for myself. I highly recommend using this site&rdquo;
                                                        </p>
                                                        <p>						<span class="author">&minus; Li Lei</span>
                                                    </div>
                                                    </p></div>
                                            </a></div>
                                    </div>
                                    <div class="item" style="width:1000px;">
                                        <div class="item-content col-xs-6" style="width:500px"><a href="#1">
                                                <div class="box box_circle_photo" style="background-image: none">
                                                    <div class="ribbon"><span></span><img src="{{url('/upload/11main.jpg')}}" width="103" height="103" alt=""></div>
                                                    <div class="box_content">
                                                        <p>&ldquo;Finding a name for my son was so easy. We have chosen the name Nathan, we think it's the perfect English name for our child!&rdquo;
                                                        </p>
                                                        <p>						<span class="author">&minus; Zhang Yu</span>
                                                    </div>
                                                    </p></div> 
                                            </a></div>
                                    </div>
                                    <!--  Example item end -->
                                </div>
                                <a class="left carousel-control" style="background-image: none;right:170px" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" style="background-image: none;right:170px" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function () {
                        // Instantiate the Bootstrap carousel
                        $('.multi-item-carousel').carousel({
                            //  interval: false
                        });
                        $('.multi-item-carousel .item').each(function () {
                            var next = $(this).next();
                            if (!next.length) {
                                next = $(this).siblings(':first');
                            }
                            next.find('.item-content:first-child').clone().appendTo($(this));
                        });
                    });
                </script>
            </div>
        </div>
        <div id="bottom_bee"></div>  
    </div>
</div>
@endsection