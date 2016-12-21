@extends('layouts.bg')

@section('content')

<div id="middle" class="full_width">
    <div class="container clearfix">
        <div id="mid_bird"></div>
        <div id="mid_baloon"></div>
        <div class="content_wrapper"> 

            <div class="title_top">
                <h1>Adult Gallery</h1>  
                @if ($type=="all")
                <div class="filter"> 
                    <a href="{{url('/adultgallery/all')}}"
                       class="current">All</a>
                    <a href="{{url('/adultgallery/female')}}"
                       class=""
                       >Female</a>
                    <a href="{{url('/adultgallery/male')}}"
                       class=""
                       >Male</a>
                </div>
                @elseif($type=="female")
                <div class="filter"> 
                    <a href="{{url('/adultgallery/all')}}"
                       class="">All</a>
                    <a href="{{url('/adultgallery/female')}}"
                       class="current"
                       >Female</a>
                    <a href="{{url('/adultgallery/male')}}"
                       class=""
                       >Male</a>
                </div>
                @else
                <div class="filter"> 
                    <a href="{{url('/adultgallery/all')}}"
                       class="">All</a>
                    <a href="{{url('/adultgallery/female')}}"
                       class=""
                       >Female</a>
                    <a href="{{url('/adultgallery/male')}}"
                       class="current"
                       >Male</a>
                </div>
                @endif
            </div>
            <div class="content">

                <div class="clearfix staff_list postajax"> 
                    @if (count($peoplelist) > 0)
                    @foreach ($peoplelist as $p)
                    <div class="staff_item">
                        <div class="staff_thumb"><img src="/upload/{{ $p->id }}main.jpg" width="201" height="201" alt=""></div>                    
                        <div class="staff_title"><strong>{{ $p->name }}</strong> <br>  
                        </div>
                        <p>{{ $p->description }}<p>
                    </div>
                    @endforeach 
                    @endif
                    <div>

                    </div>
                </div>  
                <div align="middle">
                    <form  enctype="multipart/form-data" class="ajax_form contactForm"  role="form" method="POST" action="{{ url('/adultgallery') }}">
                        {{ csrf_field() }}
                        <div class='form-group{{ $errors->has('name') ? ' has-error' : '' }} row field_text field_name alignleft  omega ' style=''>
                            <input type='text' style='width:341px;' class='form-control inputtext input_middle' name='name' placeholder='My New English Name'/>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                        <div class='form-group{{ $errors->has('pic') ? ' has-error' : '' }} row field_text field_name aligncenter    omega ' style=''>
                            <input type='file' style='width:341px;'  name='pic' class="form-control" required autofocus/>
                            @if ($errors->has('pic'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                        <div class='form-group{{ $errors->has('gender') ? ' has-error' : '' }} row field_text field_name alignleft   omega ' style=''>
                            <input type="radio" class='inputtext input_middle' name="gender" value="male" checked="yes">male
                            <input type="radio" class='inputtext input_middle' name="gender" value="female" >female
                        </div>
                        <div class="clear"></div>
                        <div class='form-group{{ $errors->has('description') ? ' has-error' : '' }} row field_message aligncenter' style=''>
                            <textarea style='width:341px;' class='textarea textarea_middle' name='description' rows='10' placeholder='What do you think of Brightname.cn?'></textarea>
                            @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                        <div class="row rowSubmit clearfix aligncenter">
                            <input type="submit" id="send_form" class="btn btn-default btn-submit" name="submit" title="Submit mesage" value="Post Myself" />
                            <img id="sending_img" src="{{url('/photos/ajax-loader.gif')}}" alt="Sending" style="margin-left:5px; margin-bottom:-5px; display: none; border:0;" />
                        </div>

                    </form>
                </div>
            </div>




            <div class="clear"></div>
        </div>     
        <div id="bottom_bee"></div>        
    </div>
</div> 
@endsection