@extends('template/t_index')
@section('content')


<div class="container">
	<div class="row">

		<div class="col-md-12">
			<div class="col-md-6">
				@if(Session::has('message'))
				<div class="alert alert-success alert-dismissible">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Success!</strong> {{Session::get('message')}}.
				</div>
				@endif
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Tambah Data
				</div>
				<div class="panel-body">
					{!! Form::open(['url' => '/prosestambah']) !!}
					<div class="form-group"> 
					Title:
					{!! Form::text('title', '', ['placeholder' => 'title', 'class' => 'form-control']) !!}
					</div>
					<div class="form-group"> 
					Content:
					{!! Form::textarea('content', '', ['placeholder' => 'content', 'class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Tambah', ['class' => 'btn btn-primary btn-sm']) !!}
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">Post Data</div>
				<div class="panel-body">
					<table class="table table-stripped">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($post as $a)
							<tr>
								<td>{{ $i++ }}</td>
								<td>{{ $a->post_title }}</td>
								<td>
									<a href="{{ url('get', $a->id_post) }}"><i class="fa fa-eye"></i></a>
									<a onclick="return confirm('Are you sure?')" href="{{ url('del', $a->id_post) }}"><i class="fa fa-trash"></i></a>
									<a href="{{ url('up', $a->id_post) }}"><i class="fa fa-edit"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
@stop