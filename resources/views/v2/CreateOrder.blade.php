@extends('layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>创建订单(Create Order)</strong></div>
                
                    <form class="form-inline" target="_blank" role="form" method="POST" action="{{ url('/createorder') }}">
                        {{ csrf_field() }}
                        <div class="bootstrap-iso">
                            <div class="row" style="width:500px;">
                                <input id="key" type="text" class="form-control" name="key" value="{{ old('key') }}" placeholder="API KEY" required autofocus>
                                <input id="bag_number" type="text" class="form-control" name="bag_number" value="{{ old('bag_number') }}" placeholder="袋编号(Pack NO.)" autofocus>
                                <input id="client_reference" type="text" class="form-control" name="client_reference" placeholder="客户参考号(Client Reference)" value="{{ old('client_reference') }}" required autofocus>
                               
                                <input type="radio" name="disposition" value="sale" checked="yes">直接销售(Sale)
                                <input type="radio" name="disposition" value="stock" >进入仓库(Stock)
                                <input id="hawb" type="text" class="form-control" name="hawb" value="{{ old('hawb') }}" placeholder="HAWB" autofocus>
                                <input id="mawb" type="text" class="form-control" name="mawb" value="{{ old('mawb') }}" placeholder="MAWB" autofocus>
                                <div class="control-group" id="fields">
                                    <label class="control-label" for="field1">产品内容(Product Items)</label>
                                    <div class="controls"> 
                                        <span role="span" autocomplete="off">
                                            <div class="entry input-group col-xs-12">
                                                <input class="form-control" name="description[]" type="text" value="{{ old('description[]') }}" placeholder="产品描述(Item Description)" required autofocus />                            
                                                <input class="form-control" name="qty[]"  type="number" placeholder="数量(Quantity)"   required autofocus />
                                                <input class="form-control" name="price[]" value="{{ old('price[]') }}" type="number" placeholder="产品价格(Price)" required autofocus />
                                                <input class="form-control" name="weight[]" value="{{ old('weight[]') }}" type="number" placeholder="产品重量(Weight)" required autofocus />
                                                <input class="form-control" name="parcel_number[]" value="{{ old('parcel_number[]') }}" type="number" placeholder="包裹编号(Parcel Number)" required autofocus />
                                                <input class="form-control" name="taric_code[]" value="{{ old('taric_code[]') }}" type="number" placeholder="TARIC代码(TARIC CODE)" required autofocus />
                                                <input class="form-control" name="ecommerce_url[]" value="{{ old('ecommerce_url[]') }}" type="text" placeholder="电商网址(Item Link)"  autofocus />
                                                <input class="form-control" name="ecommerce_reference[]" value="{{ old('ecommerce_reference[]') }}" type="text" placeholder="电商参考号(Ecommerce Reference)"  autofocus />
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
                                
                                <div>
                                <select id="courier" name="courier" value="UPS" class="form-control">
                                    <option value="UPS">快递公司(Courier)-UPS</option>
                                    <option value="DPD">快递公司(Courier)-DPD</option>
                                    <option value="DHL">快递公司(Courier)-DHL</option>
                                    <option value="POSTNL">快递公司(Courier)-POSTNL</option>
                                </select>
                                </div>
                                <div>
                                <select id="courier_service" name="courier_service" value="DDP31_MULTI" class="form-control">
                                    <option value="DDP31_MULTI">服务(Courier Service)-DDP31_MULTI</option>
                                    <option value="DDP31">服务(Courier Service)-DDP31</option>
                                    <option value="DDP2">服务(Courier Service)-DDP2</option>
                                    <option value="DDU">服务(Courier Service)-DDU</option>
                                </select>
                                </div>
                                <input type="radio" name="registered" value="true" checked="yes">已登记(Registered)
                                <input type="radio" name="registered" value="false" >未登记(Non-Registered)
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="姓名(Name)" required autofocus>
                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" placeholder="公司(Company)" required autofocus>
                                <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" placeholder="街道(Street)" required autofocus>
                                <input id="zip_code" type="text" class="form-control" name="zip_code" value="{{ old('zip_code') }}" placeholder="邮编(Zip Code)" required autofocus>
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="城市(City)" required autofocus>
                                <input id="country_code" type="text" class="form-control" name="country_code" value="{{ old('country_code') }}" placeholder="国家代码(Country Code)" required autofocus>
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="电话(Phone)" autofocus>
                            </div>
                       <div class="form-group" >
                            <div>
                                <button type="submit"   class="btn btn-primary">
                                   创建订单(Submit Order)
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

function checkinput(){
    var j=0;
    $("input[name='qty[]']").each(  
function(){
   
    if(!isPositiveNum($(this).val())){
            alert("数量请输入正整数(Quantity Must Be an Integer!)"); 
            j=j+1;
    }
} );
$("input[name='price[]']").each(  
function(){  
    if(!isPositiveNum($(this).val())){
            alert("价格请输入整数(分)不需要带单位(Price should be a Number(Unit Cent)!)"); 
            j=j+1;
    }
} );
$("input[name='weight[]']").each(  
function(){  
    if(!isPositiveNum($(this).val())){
            alert("重量请输入整数(克)不需要带单位(Weight should be a Number(Unit gram)!)"); 
            j=j+1;
    }
} );
 if(j>0){
     return false;
 }
 }
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
