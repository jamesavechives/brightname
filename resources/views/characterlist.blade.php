@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Characters</div>
                    <form class="form-horizontal" role="form" >
                        {{ csrf_field() }}
  @if (count($chalist) > 0)
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Operation</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($chalist as $cha)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $cha->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $cha->cat }}</div>
                                </td>
                                <td>
                                    <a href="character/delete/{{ $cha->id}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
                    </form>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
