@extends('layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>订单生成结果(Order Result)</strong></div>
                <div class="clearfix"></div>
                <div>参考号(Reference):<span>{{ $order->reference }}</span></div>
                <form class="form-inline" role="form" method="POST" action="{{ url('/updateorder') }}">
                        {{ csrf_field() }}
                <input type="hidden" name="key" value='{{$key}}' />
                <input type="hidden" name="client_reference" value='{{ $order->client_reference }}' />
                <div>客户参考号(Client Reference):<span>{{ $order->client_reference }}</span></div>
                <div>HAWB:<span><input id='hawb1' name="hawb" value='{{$order->hawb or ''}}' type='text'/></span></div>
                <div>MAWB:<span><input id='mawb1' name="mawb" value='{{$order->mawb or ''}}' type='text'/></div>

                <div><input id="subutton" type='submit' value='更新订单(Set Order)'/></div>
                </form>
                @foreach ($order->labels as $label)
                <div>包裹编号(Parcel Number):<span>{{$label->parcel_number}}</span></div>
                <div>PDF链接(PDF Link):<span><a href="{{$label->pdf_url}}">点击此处(Click Here)</a></span></div>
                <div>跟踪单号(Tracking Code):<span>{{$label->tracking_code}}</span></div>
                @endforeach  
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    if($('#hawb1').val()!=''){
    $('#hawb1').attr("disabled",true); 
    $('#mawb1').attr("disabled",true); 
    $('#subutton').attr("disabled",true); 
    }
})
</script>
@endsection
