@extends('layouts.bg')

@section('content')
<div id="middle" class="full_width">
    <div class="container clearfix">
        <div id="mid_bird"></div>
        <div id="mid_baloon"></div>
        <div class="content_wrapper" align="middle"> 
                <div class="title_top" align="left"><h1>Names for Babies</h1>
            </div> 
<p><div class="title_top" align="left"><span class="text_style1">Please choose up to three different icons. You will receive three uniquely chosen English names according to the personality icons you choose. It's that easy!</span></p></div>

            <form class="form-horizontal" class="ajax_form contactForm"  role="form" method="POST" action="{{ url('/babynames') }}">
                {{ csrf_field() }} 
                <div class='aligncenter '>
                    <input type="radio" class='inputtext input_middle' name="gender" value="male" checked="yes"><strong style="font-size:24px;color:#673509;font-family: 'Nunito', sans-serif;">male</strong>
                    <input type="radio" class='inputtext input_middle'  name="gender" value="female" ><strong style="font-size:24px;color:#673509;font-family: 'Nunito', sans-serif;">female</strong>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="content" style="margin-top:50px;">
                    <div class="clear"></div>
                    <div class="clearfix staff_list postajax"> 
                        @if (count($chalist) > 0)
                        @foreach ($chalist as $c)
                        <div class="staff_item" style="height:250px" >
                            <div ><img src="/upload/{{ $c->id }}cha.jpg" alt=""></div> 
                            <p><input type="checkbox" class='inputtext input_middle' name="character" value="{{$c->cat}}" ><p>
                        </div>
                        @endforeach 
                        @endif 
                    </div>  
                    <div  align="middle">
                        <div class="clear"></div>
                        <div class="row rowSubmit clearfix aligncenter">
                            <input type="button" id="send_form"  data-toggle="modal" data-target="#myModal1" name="button" title="Submit mesage" value="Find Your English Name" />
                        </div>
                        <div class="bootstrap-iso">
                        <!-- Modal -->
                        <div id="myModal1" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
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
                </div>
            </form> 
            <div class="clear"></div>
        </div>
<script type="text/javascript"> 
    function finalcat(arr){
       arr.sort(); 
       if(arr[0]==arr[1]){
           return arr[0];
       }
       else if(arr[1]==arr[2]){
           return arr[1];
       }
       else{
           return arr[1];
       }
    }
    function findMost(arr) {
    if (!arr.length) return;
    if (arr.length === 1) return 1;
    var res = {};
    // 遍历数组
    for (var i=0,l=arr.length;i<l;i++) {
        if (!res[arr[i]]) {
            res[arr[i]] = 1;
        } else {
            res[arr[i]]++;
        }
    }
    // 遍历 res
    var keys = Object.keys(res);
    var maxNum = 0, maxEle;
    for (var i=0,l = keys.length;i<l;i++) {
        if (res[keys[i]] > maxNum) {
            maxNum = res[keys[i]];
            maxEle = keys[i];
        }
    }
    return maxEle;
}
</script>
<script type="text/javascript">              
$(document).ready(function(){		
         $('input[type=checkbox]').click(function(){
                               $(this).attr('disabled','disabled');
                               if($("input[name='character']:checked").length >= 3)
                               {
                                       $("input[name='character']").attr('disabled','disabled');
                               }
                       });
       });
       $('#myModal1').on('show.bs.modal', function(e) {
           //get data-id attribute of the clicked element
             var modal = $(this);
              var gender = $("input[name='gender']:checked").val();
               var content="";
               if ($("input[name='character']:checked").length < 3) {
                   content="You Must Choose at least 3 Characters for your baby";
                   modal.find(".modal-body label").text(content);  
                   modal.find(".modal-title").text("Opps, Got An Error"); 
                   modal.find("#modal-content").html(""); 
               }
               else{
                    var chk_value =[];    
                    $('input[name="character"]:checked').each(function(){    
                        chk_value.push($(this).val());    
                        }); 
                        var cat=findMost(chk_value);
               $.ajax({
                   type: "GET",
                   data: {gender: gender, cat: cat},
                   url: "/process_baby",
                   dataType: "json",
                   success: function (data) {
                       var cat=data['cat'];
                       var results=data['result'];
                       
                       var names=new Array();
                       var meanings=new Array();
                       var i=0;
                       for(var tmp in results){
                        names[i]=tmp;//“键名”
                        meanings[i]=results[tmp];//“键值'
                        i=i+1;
                        }
                       content="<ui>"+
                               "<li>Your Character Category is "+cat+"</li>"+
                               "<li>Your Gender is "+gender+"</li>"+
                               "<li><strong color='red'>"+names[0]+":"+meanings[0]+"</strong></li>"+
                               "<li><strong>"+names[1]+":"+meanings[1]+"</strong></li>"+
                               "<li><strong>"+names[2]+":"+meanings[2]+"</strong></li><ui>";
                       content=content+"<a href="+"javascript:void(0);"+" onclick="+"window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(document.location.href));return false;"+" title="+"分享到QQ空间"+"><img src="+"{{url('/photos/qz_logo.png')}}"+" alt="+"分享到QQ空间"+" /></a>";
                       
                       modal.find(".modal-body label").text(""); 
                       modal.find("#modal-content").html(content);  
                       modal.find(".modal-title").text("Congratulations! Here are your personalized English name results");  
                       
                   }
               });
           }
           });
        </script>

 <script type="text/javascript">
    
    
</script>
        <div id="bottom_bee"></div>        
    </div>
</div> 
@endsection