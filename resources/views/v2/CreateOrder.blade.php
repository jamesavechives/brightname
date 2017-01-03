@extends('v2.layouts.ve')

@section('content')
<div class="container bootstrap-iso" align="middle">
<div class="panel-heading"><strong>创建订单(Create Order)</strong></div>
<form  target="_blank" role="form" method="POST" action="{{ url('/v2/createorder') }}">
    {{ csrf_field() }}
    <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">API KEY</div><div class="col-md-5" align="left"><input id="key" type="text" class="form-control" name="key" required autofocus></div><div class="col-md-2"></div></div>
    
    <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">袋编号(Pack NO.)</div><div class="col-md-5" align="left"><input id="bag_number" type="text" class="form-control" name="bag_number"  placeholder="" autofocus></div><div class="col-md-2"></div></div>
    <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">客户参考号(Client Reference)</div><div class="col-md-5" align="left"><input id="client_reference" type="text" class="form-control" name="client_reference" placeholder=""  required autofocus></div><div class="col-md-2"></div></div>
    <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">发货客户参考号(Shipment Client Reference)</div><div class="col-md-5" align="left"><input id="client_reference" type="text" class="form-control" name="shipment_client_reference" placeholder="" required autofocus></div><div class="col-md-2"></div></div>
    <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">分配方式(Disposition)</div><div class="col-md-5" align="left">
        <input type="radio" name="disposition" value="sale" checked="yes">直接销售(Sale)
        <input type="radio" name="disposition" value="stock" >进入仓库(Stock)</div><div class="col-md-2"></div></div>
     <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">快递公司(Courier)</div><div class="col-md-5" align="left">
                                <select id="courier" name="courier" value="UPS" class="form-control">
                                    <option value="UPS">UPS</option>
                                    <option value="DPD">DPD</option>
                                    <option value="DHL">DHL</option>
                                    <option value="POSTNL">POSTNL</option>
                                </select>
         </div><div class="col-md-2"></div></div>
    <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">服务(Courier Service)</div><div class="col-md-5" align="left">
                                <select id="courier_service" name="courier_service" value="DDP31_MULTI" class="form-control">
                                    <option value="DDP31_MULTI">DDP31_MULTI</option>
                                    <option value="DDP31">DDP31</option>
                                    <option value="DDP2">DDP2</option>
                                    <option value="DDU">DDU</option>
                                </select>
        </div><div class="col-md-2"></div></div>
<div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">是否登记(Is Registered)</div><div class="col-md-5" align="left">
                                    <input type="radio" name="registered" value="true" checked="yes">已登记(Registered)
                                     <input type="radio" name="registered" value="false" >未登记(Non-Registered)</div><div class="col-md-2"></div></div>
<div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">姓名(Name)</div><div class="col-md-5" align="left">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="" required autofocus></div><div class="col-md-2"></div></div>
<div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">街道(Street)</div><div class="col-md-5" align="left">
        <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" placeholder="" required autofocus></div><div class="col-md-2"></div></div>
<div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">邮编(Zip Code)</div><div class="col-md-5" align="left">
        <input id="zip_code" type="text" class="form-control" name="zip_code" value="{{ old('zip_code') }}" placeholder="" required autofocus></div><div class="col-md-2"></div></div>
<div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">城市(City)</div><div class="col-md-5" align="left">
        <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="" required autofocus></div><div class="col-md-2"></div></div>
<div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">国家代码(Country Code)</div><div class="col-md-5" align="left">
        <input id="country_code" type="text" class="form-control" name="country_code" value="{{ old('country_code') }}" placeholder="" required autofocus></div><div class="col-md-2"></div></div>
<div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">电话(Phone)</div><div class="col-md-5" align="left">
        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="" autofocus></div><div class="col-md-2"></div></div>
                                <br>
                                <div class="control-group" id="fields">
                                    <a href="#" onclick="hidelineitems();">只知道每箱的重量?(Only Know the Weight for label?)</a><br>
                                    <label class="control-label" for="fields">产品内容(Line Items)</label>
                                    <div class="controls"> 
                                        <span role="span" autocomplete="off">
                                            <div class="entry">
                                                <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">产品描述(Item Description)</div><div class="col-md-5" align="left">
                                                <input class="form-control" name="description[]" type="text"  placeholder="" required autofocus /> </div><div class="col-md-2"></div></div>
                                                <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">数量(Quantity)</div><div class="col-md-5" align="left">
                                                <input class="form-control" name="qty[]"  type="number" placeholder=""   required autofocus /></div><div class="col-md-2"></div></div>
                                                <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">产品价格(Price)</div><div class="col-md-5" align="left">
                                                <input class="form-control" name="price[]"  type="number" placeholder="" required autofocus /></div><div class="col-md-2"></div></div>
                                                <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">产品重量(Weight)</div><div class="col-md-5" align="left">
                                                <input class="form-control" name="weight[]"  type="number" placeholder="" required autofocus /></div><div class="col-md-2"></div></div>
                                                <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">包裹编号(Parcel Number)</div><div class="col-md-5" align="left">
                                                <input class="form-control" name="parcel_number[]"  type="number" placeholder="" required autofocus /></div><div class="col-md-2"></div></div>
                                                <div class="row"><div class="col-md-3"></div><div class="col-md-2" align="left">TARIC代码(TARIC CODE)</div><div class="col-md-5" align="left">
                                                <input class="form-control" name="taric_code[]"  type="number" placeholder="" required autofocus /></div><div class="col-md-2"></div></div>
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
                                
                                <div class="control-group" id="label_weight">
                                    
                                </div>
                            
                            <br><br><br>
                       <div class="form-group" >
                            <div class="row">
                                <button type="submit"   class="btn btn-primary">
                                   创建订单(Submit Order)
                                </button>
                            </div>
                       </div>
                         
                       
                        </form>
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
function hidelineitems(){
  $("#fields").html("");
  var html="<a href='#' onclick='showlineitems();'>已经知道每箱的产品信息?(Already Know Line Items?)</a><br>";
  html=html+"<label class='control-label' for='label_weight'>各单重量(Label Weight)</label><div class='controls'> ";
  html=html+"<span role='span' autocomplete='off'><div class='entry'>";
  html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>产品重量(Weight)</div><div class='col-md-5' align='left'>";
  html=html+"<input class='form-control' name='weight[]' value='{{ old('weight[]') }}' type='number' placeholder='' required autofocus />";
  html=html+"</div><div class='col-md-2'></div></div>";
  html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>包裹编号(Parcel Number)</div><div class='col-md-5' align='left'>";
  html=html+"<input class='form-control' name='parcel_number[]' value='{{ old('parcel_number[]') }}' type='number' placeholder='' required autofocus />";
  html=html+"</div><div class='col-md-2'></div></div>";
  html=html+"<div><span class='input-group-btn'><button class='btn btn-success btn-add' type='button'>";
  html=html+"<span class='glyphicon glyphicon-plus'>增加单重(Add Label Weight)</span>";
  html=html+"</button></span></div></div></span></div>";
 $("#label_weight").html(html);
}
function showlineitems(){
    $("#label_weight").html("");
    var html="<a href='#' onclick='hidelineitems();'>只知道每箱的重量?(Only Know the Weight for label?)</a><br><label class='control-label' for='fields'>产品内容(Line Items)</label><div class='controls'><span role='span' autocomplete='off'><div class='entry'>";
    html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>产品描述(Item Description)</div><div class='col-md-5' align='left'>";
    html=html+"<input class='form-control' name='description[]' type='text'  placeholder='' required autofocus /> ";
    html=html+"</div><div class='col-md-2'></div></div>";
    html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>数量(Quantity)</div><div class='col-md-5' align='left'>";
    html=html+"<input class='form-control' name='qty[]'  type='number' placeholder=''   required autofocus />";
    html=html+"</div><div class='col-md-2'></div></div>";
    html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>产品价格(Price)</div><div class='col-md-5' align='left'>";
    html=html+"<input class='form-control' name='price[]'  type='number' placeholder='' required autofocus />";
    html=html+"</div><div class='col-md-2'></div></div>";
    html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>产品重量(Weight)</div><div class='col-md-5' align='left'>";
    html=html+"<input class='form-control' name='weight[]'  type='number' placeholder='' required autofocus />";
    html=html+"</div><div class='col-md-2'></div></div>";
    html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>包裹编号(Parcel Number)</div><div class='col-md-5' align='left'>";
    html=html+"<input class='form-control' name='parcel_number[]'  type='number' placeholder='' required autofocus />";
    html=html+"</div><div class='col-md-2'></div></div>";
    html=html+"<div class='row'><div class='col-md-3'></div><div class='col-md-2' align='left'>TARIC代码(TARIC CODE)</div><div class='col-md-5' align='left'>";
    html=html+"<input class='form-control' name='taric_code[]'  type='number' placeholder='' required autofocus />";
    html=html+"</div><div class='col-md-2'></div></div>";
    html=html+"<div><span class='input-group-btn'><button class='btn btn-success btn-add' type='button'><span class='glyphicon glyphicon-plus'>增加产品(Add Product)</span></button></span></div></div></span></div>";
    $("#fields").html(html);
  
}
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
