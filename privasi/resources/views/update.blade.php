@extends('template/t_index')
@section('content')

	<div class="container">
	<div class="row">
		
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">Edit Post Data</div>
				<div class="panel-body">
					{!! Form::open(array('url' => array('up_action', $post->id_post))) !!}
					{{ method_field('PUT') }}
				    <div class="form-group">
				      {!! Form::label('title', 'Title') !!}
				      {!! Form::text('title', $post->post_title, ['class' => 'form-control']) !!}
				    </div>

				    <div class="form-group">
				      {!! Form::label('content', 'Content') !!}
				      {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
				    </div>

				    <button class="btn btn-success btn-sm" type="submit">Update</button>

				  {!! Form::close() !!}

				</div>
			</div>
		</div>

	</div>
	</div>
@stop