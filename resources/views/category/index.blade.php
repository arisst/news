@extends('layouts.app')

@section('contentheader_title') List Category @endsection

@section('htmlheader_title')
	List Category
@endsection

@section('main-content')

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        List Category
                        <div class="pull-right">
                            <a class="btn btn-xs btn-success" href="{{ url('category/create') }}">ADD CATEGORY</a>
                        </div>
                    </div>

					<div class="panel-body">
						<table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($category as $k => $v)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{ $v->category_name }}</td>
                                        <td>{{ $v->created_at }}</td>
                                        <td>
                                            <form action="{{url('category/'.$v->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="{{url('category/'.$v->id.'/edit')}}" class="btn btn-default btn-xs">
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

						{{ $category->links() }}

					</div>
				</div>
			</div>
		</div>

@endsection
