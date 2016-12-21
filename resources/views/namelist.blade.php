@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Names</div>

                        <div class="bootstrap-iso">

  @if (count($namelist) > 0)
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Cat</th>
                        <th>Meaning</th>
                        <th>Operation</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($namelist as $name)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $name->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $name->gender }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $name->cat }}</div>
                                </td>
                                <td class="table-text">
                                    <div><a href="#" data-toggle="modal" data-name_meaning="{{ $name->meaning}}"   data-target="#myModal1">{{ substr($name->meaning,0,10) }}...</a></div>
                                </td>
                                <td>
                                    <a href="name/delete/{{ $name->id}}">Delete</a> |
                                    <a href="#" data-toggle="modal" data-target="#myModal2" data-name_id="{{$name->id}}" data-name_name="{{$name->name}}" data-name_gender="{{$name->gender}}" data-name_cat="{{$name->cat}}" data-name_meaning="{{ $name->meaning}}">Edit</a>
                                </td>
                            </tr>


                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
  {{$namelist->links()}}
    @endif
<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Name Meaning</h4>
      </div>
      <div class="modal-body">
          <label  class="control-label" id="label_meaning"></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Name</h4>
      </div>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/updatename') }}">
          {{ csrf_field() }}
      <div class="modal-body">
          <input type="hidden" name="nameid" id="nameid">
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
                                <input type="radio" name="gender" id="gender1" value="male" checked="yes">male
                                <input type="radio" name="gender" id="gender2" value="female" >female
                            </div>
          </div>
                        
            <div class="form-group{{ $errors->has('cat') ? ' has-error' : '' }}">
                            <label for="cat" class="col-md-4 control-label">Chracter Category</label>

                            <div class="col-md-6">
                                <select id="cat" name="cat" value="1" class="form-control">
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
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
     </form>
    </div>

  </div>
</div>
<script type="text/javascript">
    //triggered when modal is about to be shown
$('#myModal1').on('show.bs.modal', function(e) {
    //get data-id attribute of the clicked element
      var nameMeaning = $(e.relatedTarget).data('name_meaning');
      var modal = $(this);
      modal.find(".modal-body label").text(nameMeaning);
});

$('#myModal2').on('show.bs.modal', function(e) {
    //get data-id attribute of the clicked element
      var nameId = $(e.relatedTarget).data('name_id');
      var nameName = $(e.relatedTarget).data('name_name');
      var nameGender = $(e.relatedTarget).data('name_gender');
      var nameCat = $(e.relatedTarget).data('name_cat');
      var nameMeaning = $(e.relatedTarget).data('name_meaning');
      var modal = $(this);
      modal.find(".modal-body textarea").text(nameMeaning);
      $('#name').val(nameName);
      $('#cat').val(nameCat);
      $('#nameid').val(nameId);
      if(nameGender=="male"){
       //   $('#gender1').attr("checked", this.checked);
       $("input[type='radio'][name='gender']").get(0).checked=true; 
      }
      else{
      //    $('#gender2').attr("checked", this.checked);
      $("input[type='radio'][name='gender']").get(1).checked=true; 
      }
});

</script>
            </div>
                
<!--                <a  href="{{ url('/importnames') }}">Import Names</a>-->
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
