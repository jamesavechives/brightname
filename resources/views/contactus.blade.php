@extends('layouts.bg')

@section('content')
<div id="middle" class="full_width">

    <div class="container clearfix">
        <div id="mid_bird"></div>
        <div id="mid_baloon"></div>
        <div class="content_wrapper">
            <div class="title_top"><h1>Contact Us</h1>
            </div>            <div class="content withborder">
                <div class="box_sprite">
                    <div class="box_sprite_inner clearfix">
                        <div class="inner_content">
                            <div class="col_left">
                                <div class="add-comment contact-form" id="addcomments"><div class="add-comment-title"> <h3 id="header_message"></h3></div> <div id="form_messages" class="submit_message" ></div>
                                    <div class="contact_form">
                                        <form id="contactForm" action="" method="post" class="ajax_form contactForm" name="contactForm">
                                            {{ csrf_field() }} 
                                            <input id="this_form_id" type="hidden" value="0" />
                                            <div class='form-group{{ $errors->has('name') ? ' has-error' : '' }} row field_text field_name alignleft   omega ' style=''>
                                                <input type='text' style='width:341px;' class='inputtext input_middle' name='k_name' id='name_content' placeholder='Name'/>
                                                @if ($errors->has('k_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('k_name') }}</strong>
                                                </span>
                                                @endif
                                            </div><div class="clear"></div>
                                            <div class='row field_text field_name alignleft   omega ' style=''>
                                                <input type='text' style='width:341px;' class='inputtext input_middle kiddoturf_email' id='email_content' name='k_email' placeholder='Email'/>
                                                @if ($errors->has('k_email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('k_email') }}</strong>
                                                </span>
                                                @endif
                                            </div><div class="clear"></div>
                                            <div class='row field_message ' style=''>
                                                <textarea style='width:341px;' class='textarea textarea_middle' id='message_content' name='k_message' rows='10' placeholder='Your Message...'></textarea>
                                                @if ($errors->has('k_email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('k_message') }}</strong>
                                                </span>
                                                @endif
                                            </div><div class="clear"></div>
                                            <div class="row rowSubmit clearfix"><a class="link-reset" href="#" onclick="resetFields(this, event)">reset all fields</a><a href="#" id="sending" class="btn btn-default btn-send2" style="display: none;"><span>Sending ...</span></a>
                                                <input type="button" id="send_form" class="btn btn-default btn-submit" name="sendout" title="Submit mesage" value="Send message" />
                                                <img id="sending_img" src="http://171.88c.myftpupload.com/wp-content/themes/kiddo-turf-parent/images/ajax-loader.gif" alt="Sending" style="margin-left:5px; margin-bottom:-5px; display: none; border:0;" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                                            $('#send_form').on('click',function(e){
                                                                if($('#name_content').val()==""){
                                                                    alert("name can not be empty!");
                                                                    return;
                                                                }
                                                                if($('#email_content').val()==""){
                                                                    alert("email can not be empty!");
                                                                    return;
                                                                }
                                                                if($('#message_content').val()==""){
                                                                    alert("message can not be empty!");
                                                                    return;
                                                                }
                                                                var kname=$('#name_content').val();
                                                                var kemail=$('#email_content').val();
                                                                var kmsg=$('#message_content').val();
                                    $.ajax({
                                        type: "GET",
                                        data: {name: kname, email: kemail,msg:kmsg},
                                        url: "/sendmail",
                                        dataType: "json",
                                        success: function (data) {
                                            
                                        }
                                    });
                                    
                                
                                                            });
                            </script>
                            <div class="col_right">
                                <h2>Contact Info</h2>
                                <div class="subtitle"></div>
                                <div class="contact_info">
                                    <div class="row address"></div>
                                    <div class="row mail"><em>General Information:</em> <a href="mailto:info@brightname.cn">info@brightname.cn</a></div>
                                    <div class="row mail"><em>Advertising and Media:</em> <a href="mailto:media@brightname.cn">media@brightname.cn</a></div>
                                    </p></div>
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