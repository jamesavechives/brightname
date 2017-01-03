@extends('layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>更新HAWB(Update HAWB)</strong></div>
                    <form class="form-inline" role="form" method="POST" action="{{ url('/updatehawb') }}">
                        {{ csrf_field() }}
                        <div class="bootstrap-iso">
                            <div class="row" style="width:500px;">
                                <input id="key" type="text" class="form-control" name="key" value="{{ old('key') }}" placeholder="API KEY" required autofocus>
                            
                                <input id="hawb1" type="text" class="form-control" name="hawb" placeholder="HAWB" value="{{ old('hawb') }}" required autofocus>
                               
                                <input  type="text" class="form-control" id="weight1" name="weight" value="{{ old('weight') }}" placeholder="体积重(Volumetric Weight)" autofocus>
                                <input type="text" class="form-control" id="units1" name="units" value="{{ old('units') }}" placeholder="单元数(Number Of Units)" autofocus>
                                
                            </div>
                       <div class="form-group" >
                            <div>
                                <button type="submit" onclick="return checkinput();"  class="btn btn-primary">
                                   更新HAWB(Update HAWB)
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function checkinput(){
    $weight=$("#weight1").val();
    $nums=$("#units1").val();
    if(isPositiveNum($weight)==false)
    {
        alert("重量必须是正整数，单位为克!(Weight Must be an Integer!)");
        return false;
    }
    if(isPositiveNum($nums)==false)
    {
        alert("数量请填写正整数!(Numbers Must be an Integer!)");
        return false;
    }
    
 }
function isPositiveNum(s){//是否为正整数  
    var re = /^[0-9]*[1-9][0-9]*$/ ;  
    return re.test(s)  
}     
    </script>
@endsection
