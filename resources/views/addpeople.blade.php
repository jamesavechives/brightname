@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add People</div>
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/addpeople') }}">
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
                        <div class="form-group{{ $errors->has('carear') ? ' has-error' : '' }}">
                            <label for="carear" class="col-md-4 control-label">Carear</label>

                            <div class="col-md-6">
                                <input id="carear" type="text" class="form-control" name="carear" value="{{ old('carear') }}" required autofocus>

                                @if ($errors->has('carear'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('carear') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age_unit') ? ' has-error' : '' }}">
                            <label for="age_unit" class="col-md-4 control-label">Age Unit</label>

                            <div class="col-md-6">
                                <select id="age_unit" name="age_unit" value="years" class="form-control">
                                    <option value="years">years</option>
                                    <option value="months">months</option>
                                    <option value="days">days</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age_group') ? ' has-error' : '' }}">
                            <label for="age_group" class="col-md-4 control-label">Age Group</label>

                            <div class="col-md-6">
                                <input type="radio" name="age_group" value="adult" checked="yes">adult
                                <input type="radio" name="age_group" value="baby" >baby  
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input type="radio" name="gender" value="male" checked="yes">male
                                <input type="radio" name="gender" value="female" >female
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pic') ? ' has-error' : '' }}">
                            <label for="pic" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="pic" type="file" class="form-control" name="pic"  required autofocus>

                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control" name="description" value="{{ old('description') }}" required autofocus>
                                </textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
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
