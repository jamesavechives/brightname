@extends('v2.layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>包装发货(Wrap Shipment)</strong></div>
                    <form class="form-inline" role="form" method="POST" action="{{ url('/v2/wrapshipment') }}">
                        {{ csrf_field() }}
                        <div class="bootstrap-iso  col-xs-12">
                                <input id="key" type="text" class="form-control" name="key" value="{{ old('key') }}" placeholder="API KEY" required autofocus>
                            <input id="client_reference" type="text" class="form-control" name="shipment_client_reference" placeholder="货运参考号(Shipment Client Reference)"  required autofocus>
                                
                       <div class="form-group" >
                            <div>
                                <button type="submit"  class="btn btn-primary">
                                   包装发货(Wrap Shipment)
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
@endsection
