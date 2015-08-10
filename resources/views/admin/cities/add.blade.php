@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.cities.add'))

@section('content')
<div class="row">
	<div class="col-md-9">
		<section class="panel">
			<div class="panel-heading">
				Add new city
			</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'cities.store']) !!}
				<div class="row">
					<div class="col-md-7">
						{!! Form::txt('name', 'Name') !!}
						@if($errors->first('name'))
						<p class="text-danger">{{$errors->first('name')}}</p>
						@endif

						{!! Form::txt('mm_name', 'Name in Burmese') !!}
						@if($errors->first('mm_name'))
						<p class="text-danger">{{$errors->first('mm_name')}}</p>
						@endif
{{-- 
						{!! Form::chkbox('is_district', 'ခရိုင်မြို့', true) !!} --}}
						<div class="form-group">
							<label  id="what_is_district" data-container="body" data-toggle="popover" data-placement="right" data-content="ခရိုင်မြို့ဖြစ်ပါက အမှန်ခြစ်ပေးပါရန်။" style="cursor:pointer">
								{!! Form::checkbox('is_district', 'on', '', ['id' => 'is_district']) !!} 
								ခရိုင်မြို့
							</label>
						</div>

						{!! Form::txt('population', 'Population') !!}
						@if($errors->first('population'))
						<p class="text-danger">{{$errors->first('population')}}</p>
						@endif

						<div class="form-group">
							<select class="form-control" id="select_state" name="state">
								<option value="0">State</option>
								@foreach($states as $id => $name)
								<option value="{{ $id }}">{{ $name }}</option>
								@endforeach
							</select>
						</div>

						@if($errors->first('state_id'))
						<p class="text-danger">{{$errors->first('state_id')}}</p>
						@endif
						
						<div class="form-group">
							<p>
								ခရိုင်မြို့ရွေးပါ
							<p>
							<select class="form-control" id="select_distirct_city" name="district_id" disabled>
								<option valud="0">ခရိုင်မြို့</option>
							</select>
						</div>

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
				</div>
				<hr>
				{!! Form::button('<i class="fa fa-plus"></i> Add', array('class'=>'btn btn-danger', 'type' => 'submit')) !!}
				{!! Form::close() !!}
			</div>
		</section>
	</div>
</div>
@stop


@section('js')
<script type="text/javascript">
	$(document).ready(function() {
			$('#what_is_district').popover('show');
			//Script for search bar
			var district_cities = $('#select_distirct_city');
			$('#select_state').change(function(){
				$.getJSON("{{ route('admin.cities.distirct.json')}}", { state_id: $(this).val() }, 
					function(data) {
						if(data.length == 0)
						{
							district_cities.empty();
							district_cities.append('<option value="0">No District Cities</option>');
							district_cities.prop('disabled', true);
						}
						else
						{
							district_cities.empty();
							district_cities.append('<option value="0">ခရိုင်မြို့</option>');
							$.each(data, function(key, value) {   
								district_cities
								.append('<option value="' + key +'">' + value + '</option>');
							});
							district_cities.prop('disabled', false);
						}
					});
			});
		});
</script>
@stop