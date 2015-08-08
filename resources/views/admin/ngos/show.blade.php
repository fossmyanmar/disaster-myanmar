@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.ngos.show', $ngo))

@section('content')
<div class="row">
	<div class="col-md-8">
		<section class="panel">
			<div class="panel-heading">
				Detail of {{ $ngo->mm_name ? $ngo->mm_name : $ngo->name }}
			</div>
			<div class="panel-body">
				<table class="table">
					<tr>
						<td colspan=3><p class="lead">Basic Info</p></td>
					</tr>
					<tr>
						<td>Name</td>
						<td>-</td>
						<td>{{ $ngo->name }}</td>
					</tr>
					<tr>
						<td>Registration No</td>
						<td>-</td>
						<td>{{ $ngo->registration_number }}</td>
					</tr>
					<tr>
						<td>Founder</td>
						<td>-</td>
						<td>{{ $ngo->founder }}</td>
					</tr>
					<tr>
						<td>Volunteers Count</td>
						<td>-</td>
						<td>{{ $ngo->colunteers_count }}</td>
					</tr>
					<tr>
						<td>Registration Date</td>
						<td>-</td>
						<td>{{ $ngo->founded_date }}</td>
					</tr>
					<tr>
						<td>Bank Account</td>
						<td>-</td>
						<td>{{ $ngo->bank_account }}</td>
					</tr>
					<tr>
						<td>Slogan</td>
						<td>-</td>
						<td>{{ $ngo->slogan }}</td>
					</tr>
					<tr>
						<td>Type</td>
						<td>-</td>
						<td>{{ $ngo->type }}</td>
					</tr>
					<tr>
						<td colspan=3><p class="lead">Contact Info</p></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>-</td>
						<td>{{ $ngo->phone }}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>-</td>
						<td>{{ $ngo->email }}</td>
					</tr>
					<tr>
						<td>Website</td>
						<td>-</td>
						<td>{{ $ngo->website }}</td>
					</tr>
					<tr>
						<td>Facebook</td>
						<td>-</td>
						<td>{{ $ngo->facebook }}</td>
					</tr>
					<tr>
						<td>State</td>
						<td>-</td>
						<td>{{ $ngo->state->mm_name ? $ngo->state->mm_name : $$ngo->state->name }}</td>
					</tr>
					<tr>
						<td>City</td>
						<td>-</td>
						<td>{{ $ngo->city->mm_name ? $ngo->city->mm_name : $$ngo->city->name }}</td>
					</tr>
				</table>
			</div>
		</section>
	</div>
</div>
@stop

@section('js')

@stop