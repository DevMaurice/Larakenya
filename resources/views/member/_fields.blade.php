	<!-- member Name -->
		<div class="form-group">
			{!! Form::label('name','Member:') !!}
			{!! Form::text('name',null,['class'=> 'form-control']) !!}
		</div>

		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-6">
			<i class="fa fa-btn fa-plus"></i>
			{!!Form::submit('Save',['class'=>'btn btn-primary',])!!}
			</div>
		</div>

		