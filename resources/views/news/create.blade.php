@extends('layouts.app')

@section('contentheader_title') Create News @endsection

@section('htmlheader_title')
	Create News
@endsection

@section('main-content')

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        Create News
                        <div class="pull-right">
                            <a class="btn btn-xs btn-primary" href="{{ url('news') }}">CANCEL</a>
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
                        <form action="{{ url('news') }}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label>News Title</label>
                                <input name="title" value="{{ old('title') }}" type="text" class="form-control" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label>Resume</label>
                                <textarea name="resume" class="form-control" placeholder="Resume">{{ old('resume') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Content</label>
                                <textarea rows="5" name="content" placeholder="News Content" class="form-control">{{ old('content') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image">
                                <p class="help-block">File : .jpg, .png</p>
                            </div>

                            <div class="form-group">
                                <label>News Category</label>
                                <select class="form-control" name="category_id">
									@foreach ($category as $k => $v)
										<option value="{{ $v->id }}">{{ $v->category_name }}</option>
									@endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">Save</button>
                        </form>
					</div>
				</div>
			</div>
		</div>

@endsection
