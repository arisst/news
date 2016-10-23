@extends('layouts.app')

@section('contentheader_title') List News @endsection

@section('htmlheader_title')
	List News
@endsection

@section('main-content')

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        List News
                        <div class="pull-right">
                            <a class="btn btn-xs btn-success" href="{{ url('news/create') }}">ADD NEWS</a>
                        </div>
                    </div>

					<div class="panel-body">
						<table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($news as $k => $v)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{ $v->title }}</td>
                                        <td>
                                            <a href="{{ url('category/'.$v->category_id.'/edit') }}">
                                                {{ $v->category_name }}
                                            </a>
                                        </td>
                                        <td>{{ $v->created_at }}</td>
                                        <td><a href="#">{{ $v->author }}</a></td>
                                        <td>
                                            <form action="{{url('news/'.$v->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="{{url('news/'.$v->id.'/edit')}}" class="btn btn-default btn-xs">
                                                    <i class="fa fa-pencil-square-o"></i> Edit
                                                </a>
                                                <button onclick="return confirm('Anda yakin?');" type="submit" class="btn btn-default btn-xs">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

						{{ $news->links() }}

					</div>
				</div>
			</div>
		</div>

@endsection
