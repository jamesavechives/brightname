@extends('v1.layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>HAWB更新结果(HAWB Result)</strong></div>
                <div class="clearfix"></div>
                <div>HAWB ID:<span>{{ $hawb->id }}</span></div>
                <div>客户 ID(Client ID):<span>{{ $hawb->client_id }}</span></div>
                <div>MAWB ID:<span>{{ $hawb->mawb_id }}</span></div>
                <div>地面服务商 ID(Ground Handler):<span>{{ $hawb->ground_handler_id }}</span></div>
                <div>催料员 ID(Expeditor ID):<span>{{ $hawb->expeditor_id }}</span></div>
                <div>仓库 ID(Warehouse ID):<span>{{ $hawb->warehouse_id }}</span></div>
                <div>用量报告 ID(Usage Report ID):<span>{{ $hawb->usage_report_id }}</span></div>
                <div>状态(State):<span>{{ $hawb->state }}</span></div>
                <div>编码(Number):<span>{{ $hawb->number }}</span></div>
                <div>体积重(Volumetric Weight):<span>{{ $hawb->volumetric_weight }}</span></div>
                <div>单元数(Number Of Units):<span>{{ $hawb->number_of_units }}</span></div>
                <div>创建时间(Created At):<span>{{ $hawb->created_at }}</span></div>
                <div>更新时间(Updated At):<span>{{ $hawb->updated_at }}</span></div>
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
