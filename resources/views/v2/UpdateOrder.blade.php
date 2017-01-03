@extends('v2.layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>更新订单(Update Order)</strong></div>
                
                    <form class="form-inline" target="_blank" role="form" method="POST" action="{{ url('/v2/updateorder') }}">
                        {{ csrf_field() }}
                        <div class="bootstrap-iso col-xs-12">
                                <input id="key" type="text" class="form-control" name="key"  placeholder="API KEY" required autofocus>
                                <input id="bag_number" type="text" class="form-control" name="bag_number"  placeholder="袋编号(Pack NO.)" autofocus>
                                <input id="client_reference" type="text" class="form-control" name="client_reference" placeholder="客户参考号(Client Reference)"  required autofocus>
                                <input id="client_reference" type="text" class="form-control" name="shipment_client_reference" placeholder="发货客户参考号(Shipment Client Reference)" required autofocus>
                                <input type="radio" name="disposition" value="sale" checked="yes">直接销售(Sale)
                                <input type="radio" name="disposition" value="stock" >进入仓库(Stock)
                                <br>
                                <div class="control-group" id="fields">
                                    <label class="control-label" for="fields">产品内容(Line Items)</label>
                                    <div class="controls"> 
                                        <span role="span" autocomplete="off">
                                            <div class="entry input-group col-xs-12">
                                                <input class="form-control" name="description[]" type="text"  placeholder="产品描述(Item Description)"  autofocus />                            
                                                <input class="form-control" name="qty[]"  type="number" placeholder="数量(Quantity)"    autofocus />
                                                <input class="form-control" name="price[]"  type="number" placeholder="产品价格(Price)"  autofocus />
                                                <input class="form-control" name="weight[]"  type="number" placeholder="产品重量(Weight)"  autofocus />
                                                <input class="form-control" name="parcel_number[]"  type="number" placeholder="包裹编号(Parcel Number)"  autofocus />
                                                <input class="form-control" name="taric_code[]"  type="number" placeholder="TARIC代码(TARIC CODE)"  autofocus />
                                                <div>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-success btn-add" type="button">
                                                        <span class="glyphicon glyphicon-plus">增加产品(Add Product)</span>
                                                    </button>
                                                </span>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            <br><br><br>
                       <div class="form-group" >
                            <div>
                                <button type="submit"   class="btn btn-primary">
                                   更新订单(Update Order)
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
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls span:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
       });
});

</script>
<script type="text/javascript">

function isPositiveNum(s){//是否为正整数  
    var re = /^[0-9]*[1-9][0-9]*$/ ;  
    return re.test(s)  
}     
    </script>
<script type="text/css">
    .entry:not(:first-of-type)
{
    margin-top: 10px;
}

.glyphicon
{
    font-size: 12px;
}
.error
{
    font-color:red;
    font-size:12px
}
</script>
@endsection

