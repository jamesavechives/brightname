@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show People</div>
                    <form class="form-horizontal" role="form" >
                        {{ csrf_field() }}
  @if (count($peoplelist) > 0)
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Carear</th>
                        <th>Age</th>
                        <th>Age Unit</th>
                        <th>Gender</th>
                        <th>Operation</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($peoplelist as $people)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $people->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $people->carear }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $people->age }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $people->age_unit }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $people->gender }}</div>
                                </td>
                                <td>
                                    <a href="people/delete/{{ $people->id}}">Delete</a>
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
