@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					New member
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					@if(isset($member))
					<h3>{{ $member->name }}</h3>
					{!!Form::model($member,['method' => 'PATCH','action' => ['MemberController@update',$member->id]])!!}
						@include('member._fields')
					{!!Form::close() !!}
					@else
					<!-- New member Form -->
					{!!Form::open(['url' => 'members'])!!}
						

						@include('member._fields');				

						
					{!!Form::close() !!}
					@endif
				</div>
			</div>
		</div>
	</div>
	@endsection