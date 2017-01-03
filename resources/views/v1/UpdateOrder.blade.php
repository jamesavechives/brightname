@extends('layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>更新订单(Update Order)</strong></div>
                    <form class="form-inline" role="form" method="POST" action="{{ url('/updateorder') }}">
                        {{ csrf_field() }}
                        <div class="bootstrap-iso">
                            <div class="row" style="width:500px;">
                                <input id="key" type="text" class="form-control" name="key" value="{{ old('key') }}" placeholder="API KEY" required autofocus>
                            
                                <input id="client_reference" type="text" class="form-control" name="client_reference" placeholder="客户参考号(Client Reference)" value="{{ old('client_reference') }}" required autofocus>
                               
                                <input id="hawb" type="text" class="form-control" name="hawb" value="{{ old('hawb') }}" placeholder="HAWB" autofocus>
                                <input id="mawb" type="text" class="form-control" name="mawb" value="{{ old('mawb') }}" placeholder="MAWB" autofocus>
                                
                            </div>
                       <div class="form-group" >
                            <div>
                                <button type="submit"  class="btn btn-primary">
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

@endsection
