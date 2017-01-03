@extends('v2.layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>创建订单(Create Order)</strong></div>
                
                    <form class="form-inline" target="_blank" role="form" method="POST" action="{{ url('/v2/createorder') }}">
                        {{ csrf_field() }}
                        <div class="bootstrap-iso col-xs-12">
                                <input id="key" type="text" class="form-control" name="key"  placeholder="API KEY" required autofocus>
                                <input id="bag_number" type="text" class="form-control" name="bag_number"  placeholder="袋编号(Pack NO.)" autofocus>
                                <input id="client_reference" type="text" class="form-control" name="client_reference" placeholder="客户参考号(Client Reference)"  required autofocus>
                                <input id="client_reference" type="text" class="form-control" name="shipment_client_reference" placeholder="发货客户参考号(Shipment Client Reference)" required autofocus>
                                <input type="radio" name="disposition" value="sale" checked="yes">直接销售(Sale)
                                <input type="radio" name="disposition" value="stock" >进入仓库(Stock)
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
                                <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" placeholder="街道(Street)" required autofocus>
                                <input id="zip_code" type="text" class="form-control" name="zip_code" value="{{ old('zip_code') }}" placeholder="邮编(Zip Code)" required autofocus>
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="城市(City)" required autofocus>
                                <input id="country_code" type="text" class="form-control" name="country_code" value="{{ old('country_code') }}" placeholder="国家代码(Country Code)" required autofocus>
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="电话(Phone)" autofocus>
                                <div class="control-group" id="fields">
                                    <label class="control-label" for="field1">产品内容(Product Items)</label>
                                    <div class="controls">
                                        @if (count($data) > 0)
                                        @foreach ($data as $v)
                                        <span role="span" autocomplete="off">
                                            <div style="background-color: orange">
                                                产品详细信息(Item Detail)
                                            </div>
                                            <div class="entry input-group col-xs-12">
                                                <input class="form-control" name="description[]" value="{{ $v->title }}" type="text"  placeholder="产品描述(Item Description)" required autofocus />                            
                                                <input class="form-control" name="qty[]" value="{{ $v->qty }}"  type="number" placeholder="数量(Quantity)" required autofocus />
                                                <input class="form-control" name="price[]" value="{{ $v->price }}" type="number" placeholder="产品价格(Price)" required autofocus />
                                                <input class="form-control" name="weight[]" value="{{ $v->weight }}" type="number" placeholder="产品重量(Weight)" required autofocus />
                                                <input class="form-control" name="parcel_number[]" value="{{ $v->package_no }}" type="number" placeholder="包裹编号(Parcel Number)" required autofocus />
                                                <input class="form-control" name="taric_code[]" value="{{ $v->taric_code }}" type="number" placeholder="TARIC代码(TARIC CODE)" required autofocus />
                                                <div>
                                                </div>
                                            </div>
                                        </span>
                                        @endforeach 
                                      @endif
                                    </div>
                                </div>
                       <div class="form-group" >
                            <div>
                                <button type="submit"  class="btn btn-primary">
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
