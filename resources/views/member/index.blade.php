@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
						<!-- Current members -->
			@if (count($members) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						Current members
						<div class="pull-right" style="margin:0">
							<a href="/members/create">
								New Member
								</a>
						</div>
					</div>

					<div class="panel-body">
						<table class="table table-striped member-table">
							<thead>
								<th>member</th>
								<th>Created At</th>
								<th>Updated On</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach ($members as $member)
									<tr>
										<td class="table-text">
											<div>
												<a href="/members/{{ $member->id }}/edit">
													{{ $member->name }}
												</a>
											</div>
										</td>
										<td class="table-text">
											<div>
											
													{{ $member->created_at->diffForHumans() }}
									
											</div>
										</td>
										<td class="table-text">
											<div>
												
													{{ $member->updated_at->diffForHumans() }}
										
											</div>
										</td>

										<!-- member Delete Button -->
										<td>
											<form action="/member/{{ $member->id }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" id="delete-member-{{ $member->id }}" class="btn btn-danger">
													<i class="fa fa-btn fa-trash"></i>Delete
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
