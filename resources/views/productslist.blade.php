@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Products</div>
                    <form class="form-horizontal" role="form" >
                        {{ csrf_field() }}
  @if (count($productslist) > 0)
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Operation</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($productslist as $product)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $product->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $product->price }}</div>
                                </td>
                                <td>
                                    <a href="product/delete/{{ $product->id}}">Delete</a>
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
