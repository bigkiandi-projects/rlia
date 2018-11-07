@extends('template/t_index')
@section('content')

	<div class="container">
	<div class="row">
		
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">Post Data</div>
				<div class="panel-body">
					<table class="table table-stripped">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $post->id_post }}</td>
								<td>{{ $post->post_title }}</td>
							</tr>
						</tbody>
					</table>
					<p><span class="label label-info">created at : {{ $post->created_at }}</span></p>
					<p> {{ $post->content }} </p>
					<p>Url at : {{ $post->slug }}</p>
				</div>
			</div>
		</div>

	</div>
	</div>
@stop