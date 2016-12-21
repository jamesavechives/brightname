@extends('layouts.bg')

@section('content')

                 <div id="middle" class="cols2">
 
    <div class="container clearfix page">
        <div id="mid_bird"></div>
        <div id="mid_baloon"></div>
                <div class="content_wrapper">
            <div class="title_top"><h1>About us</h1>
</div>            <div class="content">
                                <div class="postlist post-detail">
                    <div class="post-item page">
                        <div class="entry clearfix">
                               <div class="post-image"><img src="{{url('/photos/about_us.jpg')}}" alt="" /></div>
<p><span class="text_style1">My name is Nicole and I&#8217;m the CEO and founder of Bright Name. My interest in names came from my husband who does business throughout Asia. He meets many people who have English names that they use to represent themselves while doing business internationally. I became very interested in the names people chose and often wondered why they chose the name they currently have&#8230;after all, a name is for life. From this, I set out to help those, from newborn to adult, to find an English name that best represents who they are and who they want to be. </p>
<p><span class="text_style1">Studies have shown that names do set up certain expectations and can influence people who put a lot of weight on first impressions, and let&#8217;s face it, that is literally everyone. </p>
<p><span class="text_style1">Our system for finding the perfect English name is simple and fun to use. So whether you&#8217;ve just had a baby and really care about the English name you choose for your child or you&#8217;re an adult with the aspirations and determination to build a successful and happy life, if you only have one chance to leave a first impression, leave one that really lasts. Find your Bright Name and let yourself shine!</span></p>
                        </div>
                    </div>
                </div>
                                            </div>            
                            <div class="sidebar">
                                <map name="ScriptHTML">
<area shape="rect" coords="59,112,213,176" href="{{url('/babynames')}}">
<area shape="rect" coords="54,236,208,295" href="{{url('/adultnames')}}">
</map>
                    <div class="widget-container widget_baners first last"><p><img src="{{url('/photos/Top_ad.png')}}" usemap="#ScriptHTML" alt=""></p>
<p><a href="#" data-toggle="modal" data-target="#myModal1"><img src="{{url('/photos/bottom_ad.png')}}" alt=""></a></p></div>                </div><!--/ .sidebar -->
<div class="bootstrap-iso">
                                <!-- Modal -->
                                <div  id="myModal1" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content" align="middle">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Please Enter the following Information</h4>
                                            </div>
                                            <div class="modal-body aligncenter" >
                                                <div class='form-group{{ $errors->has('en_name') ? ' has-error' : '' }} row field_text field_name aligncenter  omega ' style=''>
                                                    <input type='text' style='width:341px;' class='form-control inputtext input_middle' name='en_name' id='cn_name' placeholder='My New English Name'/>
                                                    @if ($errors->has('en_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('en_name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class='form-group{{ $errors->has('email') ? ' has-error' : '' }} row field_text field_name aligncenter  omega ' style=''>
                                                    <input type='email' style='width:341px;' class='form-control inputtext input_middle' name='email' id='cn_name' placeholder='Email Address'/>
                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer" >
                                                <button type="submit" class="btn btn-primary input_middle" >Send Certification</button>
                                                <button type="button" class="btn btn-secondary input_middle"  data-dismiss="modal">Close</button>
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
</div>
                        <div class="clear"></div>
                    </div>
        <div id="bottom_bee"></div> 
    </div> 
</div>
@endsection