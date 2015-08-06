<div class="modal fade" id="delete-{!! $data->id !!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"> Confirm Delete!</h4>
			</div>
			{!! Form::open(['route'=>[$url, 'id'=>$data->id], 'role' => 'form', 'method'=>'delete']) !!}
			<div class="modal-body">
				<p>Are you sure that you want to delete? </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-danger btn-sm">Delete</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>