@extends('layouts.app')


@section('title')
vroumm-page-not-found
@endsection





@section('content')
<br><br><br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-danger">{{ __('Error code 500. Sorry service Unavailable, please contact the admin gelany740@gmail.com and report this error') }}</h3>
			
		</div>
		
	</div>
</div><br><br><br><br><br><br><br><br>



@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent

@endsection