@extends('layouts.ve')

@section('content')
<div class="container">		
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title" style="padding:12px 0px;font-size:25px;"><strong>导入产品列表(Import Items)</strong>
                       </h3>
                    
		  </div>
                    
		    
		 
		  <div class="panel-body">

		  		@if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('success') }}
					</div>
				@endif

				@if ($message = Session::get('error'))
					<div class="alert alert-danger" role="alert">
						{{ Session::get('error') }}
					</div>
				@endif
				<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

					<input type="file" name="import_file" />
					{{ csrf_field() }}
					<br/>

					<button class="btn btn-primary">导入CSV或者EXCEL文件(Import CSV or Excel File)</button>
				</form>
				<br/>
		  </div>
                     <div align="right"><a href="{{url('upload/Template.xlsx')}}" >下载模板(Download Template)</a></div>
		</div>
	</div>
@endsection
