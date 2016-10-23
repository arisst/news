@extends('layouts.app')

@section('contentheader_title') Create Category @endsection

@section('htmlheader_title')
	Create Category
@endsection

@section('main-content')

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        Create Category
                        <div class="pull-right">
                            <a class="btn btn-xs btn-primary" href="{{ url('category') }}">CANCEL</a>
                        </div>
                    </div>

                    @if (count($errors) > 0)
				        <div class="alert alert-danger">
				            <strong>Whoops!</strong> There were some problems with your input.<br><br>
				            <ul>
				                @foreach ($errors->all() as $error)
				                    <li>{{ $error }}</li>
				                @endforeach
				            </ul>
				        </div>
				    @endif

					<div class="panel-body">
                        <form action="{{ url('category') }}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Category Name</label>
                                <input name="category_name" value="{{ old('category_name') }}" type="text" class="form-control" placeholder="Title">
                            </div>

                            <button type="submit" class="btn btn-default">Save</button>
                        </form>
					</div>
				</div>
			</div>
		</div>

@endsection
