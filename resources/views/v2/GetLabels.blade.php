@extends('v2.layouts.ve')

@section('content')
<div class="container" align="middle">
    <div class="row">
        <div class="" >
            <div class="panel panel-default">
                <div class="panel-heading"><strong>获取运单(Get Labels)</strong></div>
                    <form class="form-inline" role="form" method="POST" action="{{ url('/v2/getlabels') }}">
                        {{ csrf_field() }}
                        <div class="bootstrap-iso col-xs-12"> 
                                <input id="key" type="text" class="form-control" name="key" value="{{ old('key') }}" placeholder="API KEY" required autofocus>
                            <input id="client_reference" type="text" class="form-control" name="client_reference" placeholder="客户参考号(Client Reference)"  required autofocus>
                                
                       <div class="form-group" >
                            <div>
                                <button type="submit"  class="btn btn-primary">
                                   获取运单(Get Labels)
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
