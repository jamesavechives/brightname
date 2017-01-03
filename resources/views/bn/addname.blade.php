@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Name</div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addname') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input type="radio" name="gender" value="male" checked="yes">male
                                <input type="radio" name="gender" value="female" >female
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('cat') ? ' has-error' : '' }}">
                            <label for="age_unit" class="col-md-4 control-label">Chracter Category</label>

                            <div class="col-md-6">
                                <select id="age_unit" name="cat" value="1" class="form-control">
                                    <option value="1">First Category</option>
                                    <option value="2">Second Category</option>
                                    <option value="3">Third Category</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group{{ $errors->has('meaning') ? ' has-error' : '' }}'>
                            <label for="meaning" class="col-md-4 control-label">Name Meaning</label>
                            <div class="col-md-6">
                <textarea style='width:341px;'  name='meaning' rows='10' placeholder='The meaning of the name...'></textarea>
             @if ($errors->has('meaning'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meaning') }}</strong>
                                    </span>
           @endif
                            </div>
            </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
