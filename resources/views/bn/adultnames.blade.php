@extends('layouts.bg')

@section('content')
<div id="middle" class="full_width">

    <div class="container clearfix page">
        <div id="mid_bird"></div>
        <div id="mid_baloon"></div>
   
      <script type='text/javascript' src='{{url('/js/customers/bihua.js')}}'></script>
        <div class="content_wrapper">
            <div class="title_top"><h1>Names for Adults</h1>
            </div>            
            <div class="content">
                <div class="postlist post-detail">
                    <div class="entry clearfix">
                        <p><span class="text_style1">Our one of a kind database will analyze your Chinese name and match it with three uniquely chosen English names instantly.  It&#8217;s that easy!</span></p>
                    </div>
                    <div class="post-item page" align="middle">

                        <form   class="ajax_form contactForm"  role="form" method="POST" action="{{ url('/adultnames') }}">
                            {{ csrf_field() }}
                            
                            <div class=" aligncenter">
                                <div class='form-group{{ $errors->has('cn_name') ? ' has-error' : '' }} row field_text field_name aligncenter  omega ' style=''>
                                    <input type='text' style='width:341px;' class='form-control inputtext input_middle' name='cn_name' id='cn_name' placeholder='My Chinese First Name'/>
                                    @if ($errors->has('cn_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cn_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class='aligncenter' style=''>
                                    <input type="radio" class='inputtext input_middle' name="gender" value="male" checked="yes"><strong style="font-size:24px;color:#673509;font-family: 'Nunito', sans-serif;">male</strong>
                                    <input type="radio" class='inputtext input_middle' name="gender" value="female" ><strong style="font-size:24px;color:#673509;font-family: 'Nunito', sans-serif;">female</strong>
                                </div>
                                <div class="row rowSubmit clearfix aligncenter" >     
                                    <input type="button" id="send_form"  data-toggle="modal" data-target="#myModal1" name="submit" title="Submit mesage" value="Find Your English Name" />
                                    
                                </div>
                                <div class="bootstrap-iso">
                                <!-- Modal -->
                                <div  id="myModal1" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body" >
                                                <label  class="control-label" id="label_detail"></label>
                                                <div class="left" id="modal-content"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<script type="text/javascript">
    $('#myModal1').on('show.bs.modal', function(e) {
    //get data-id attribute of the clicked element
      var modal = $(this);
       var gender = $("input[name='gender']:checked").val();
        var cnName = $("#cn_name").val();
        var content="";
        if (cnName == '') {
            content="You Must Enter Your Chinese Name";
            modal.find(".modal-body label").text(content);  
            modal.find(".modal-title").text("Opps, Got An Error");  
        }
        else{
        var bihua = test(cnName);
        if(bihua==0){
            content="You Must Enter a correct Chinese Name";
            modal.find(".modal-body label").text(content);  
            modal.find(".modal-title").text("Opps, Got An Error");  
        }
        else if(bihua>50){
            content="A Chinese Name Should not contains such lots of bihua";
            modal.find(".modal-body label").text(content);  
            modal.find(".modal-title").text("Opps, Got An Error");
        }
        else{
        $.ajax({
            type: "GET",
            data: {gender: gender, bihua: bihua},
            url: "/process_adult",
            dataType: "json",
            success: function (data) {
                var bihua=data['bihua'];
                var cat=data['cat'];
                var names=data['result'];
                content="<ui><li>Your Chinse name counts "+bihua+"</li>"+
                        "<li>Your Character Category is "+cat+"</li>"+
                        "<li>Your Gender is "+gender+"</li>"+
                        "<li><strong color='red'>"+names[0]+"</strong></li>"+
                        "<li><strong>"+names[1]+"</strong></li>"+
                        "<li><strong>"+names[2]+"</strong></li><ui>";
                modal.find(".modal-body label").text(""); 
                modal.find("#modal-content").html(content);  
                modal.find(".modal-title").text("Got your English Names!");  
            }
        });
    }
    }
     
      
});
    
</script>
                <div id="comments" class="comment-list clearfix">


                </div><!-- #comments -->
            </div>            
            <div class="clear"></div>
        </div>
        <div id="bottom_bee"></div> 
    </div> 
</div>


@endsection