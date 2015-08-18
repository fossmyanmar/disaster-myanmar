@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.villages.add'))

@section('content')
<div class="row">
	<div class="col-md-9">
		<section class="panel">
			<div class="panel-heading">
				Add new village
			</div>
			<div class="panel-body">
				<div class="row">
					{!! Form::open(['route'=>'villages.store']) !!}
					<div class="col-md-7">
						{!! Form::txt('name', 'Name') !!}
						@if($errors->first('name'))
						<p class="text-danger">{{$errors->first('name')}}</p>
						@endif
							
						{!! Form::txt('mm_name', 'Name in Burmese') !!}
						@if($errors->first('mm_name'))
						<p class="text-danger">{{$errors->first('mm_name')}}</p>
						@endif

						{!! Form::txt('number_of_houses', 'Number of Houses') !!}
						@if($errors->first('number_of_houses'))
						<p class="text-danger">{{$errors->first('number_of_houses')}}</p>
						@endif

						<div class="form-group">
							<label  id="what_is_village_tract" data-container="body" data-toggle="popover" data-placement="right" data-content="ဤကျေးရွာလက်အောက်တွင် အခြားရွာများရှိပါက အမှန်ခြစ်ရန်။" style="cursor:pointer">
								{!! Form::checkbox('village_tract', 'on', '', ['id' => 'village_tract']) !!} 
								ကျေးရွာအုပ်စုခေါင်းဆောင်
							</label>
						</div>

						<div class="form-group">
							<select class="form-control" id="select_state" name="state_id">
								<option value="0">State</option>
								@foreach($states as $id => $name)
								<option value="{{ $id }}">{{ $name }}</option>
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<select class="form-control" id="select_city" name="city_id" disabled>
								<option>City</option>
							</select>
						</div>
						@if($errors->first('city_id'))
						<p class="text-danger">{{$errors->first('city_id')}}</p>
						@endif

						<div class="form-group">
							<p>
								ကျေးရွာအုပ်စုရွေးပါ
							<p>
							<select class="form-control" id="select_village_tract" name="village_tract_id" disabled>
								<option valud="0">ကျေးရွာအုပ်စု</option>
							</select>
						</div>

						{!! Form::txt('population', 'Population') !!}
						@if($errors->first('population'))
						<p class="text-danger">{{$errors->first('population')}}</p>
						@endif
						{!! Form::button('<i class="fa fa-plus"></i> Add', array('class'=>'btn btn-danger', 'type' => 'submit')) !!}
					</div>
					<div class="col-md-5">
						{!! Form::txt('lat', 'Latitude') !!}
						@if($errors->first('lat'))
						<p class="text-danger">{{$errors->first('lat')}}</p>
						@endif

						{!! Form::txt('lng', 'Longitude') !!}
						@if($errors->first('lng'))
						<p class="text-danger">{{$errors->first('lng')}}</p>
						@endif
						
						{!! Form::txt('position', 'Position Code') !!}
						@if($errors->first('position'))
						<p class="text-danger">{{$errors->first('position')}}</p>
						@endif

					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</section>
	</div>
</div>
@stop


@section('js')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#what_is_village_tract').popover('show');
			//Script for search bar
			$('#select_state').change(function(){
				$.getJSON("{{ route('admin.cities.json')}}", { state_id: $(this).val() }, 
				function(data) {
					var cities = $('#select_city');
					if(data.length == 0)
					{
						cities.empty();
						cities.append('<option value="0">No Cities</option>');
						cities.prop('disabled', true);
					}
					else
					{
						cities.empty();
						cities.append('<option value="0">Select City</option>');
						$.each(data, function(key, value) {   
							cities
							.append('<option value="' + key +'">' + value + '</option>');
						});
						cities.prop('disabled', false);
					}
				});
			});

			$('#select_city').change(function(){
				$.getJSON("{{ route('admin.villages.tract.json')}}", { city_id: $(this).val() }, 
				function(data) {
					var village_tracts = $('#select_village_tract');
					if(data.length == 0)
					{
						village_tracts.empty();
						village_tracts.append('<option value="0">No Village</option>');
						village_tracts.prop('disabled', true);
					}
					else
					{
						village_tracts.empty();
						village_tracts.append('<option value="0">Select Village</option>');
						$.each(data, function(key, value) {   
							village_tracts
							.append('<option value="' + key +'">' + value + '</option>');
						});
						village_tracts.prop('disabled', false);
					}
				});
			});
		});
	</script>
@stop