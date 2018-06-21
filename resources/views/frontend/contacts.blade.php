@extends('frontend.layouts.master')




@section('head')

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
@endsection


@section('content')
<style type="text/css">

		.logo{
    	background-color: #000;
    }

    span.icon-bar{
      background-color: #1e68ff;
   	}
	


.remodal-inputs {
	display: block;
	width: 80%;
	margin: 0 auto;
	border: none;
	outline: none;
	font-size: 1.5em;
	color: #555555;
	line-height: 1.5em;
	height: 100%;
	padding: 2%;
	border-bottom: 2px solid #ddd;
	margin-bottom: 1em;
}

.remodal-inputs:focus {
    border-bottom: 2px solid #17a2b8;
}

.remodal h3 {
	font-size: 1.5em;
	font-family: "DinPro";
  padding: 2% 5%;
  line-height: 1.5;
}

.btns {
	display: block;
    margin: 0 auto;
    padding: 1% 5%;
    border: solid #1e67ff 3px;
    border: solid #1e67ff 3px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    font-family: 'DinPro';
    text-align: center;
    font-size: 1.5vw;
    color: #1e67ff;
    background-color: #fff;

}

.btns:hover {
	cursor: pointer;
	background-color: #1e67ff;
	color: #fff;
}

.contacts-btn {
	cursor: pointer;
	text-decoration: none;
}
.contacts-btn:hover {
		background-color: #1e67ff;
		color: #fff;
			text-decoration: none;
}

.success-text {
	position: absolute;
	top: 10%;
	left: -5%;
    color: #fff;
    font-weight: bold;
    font-size: 2em;
    width: 100%;
    text-align: center;
}

</style>
<div class="contactsPage">
	<div class="wrapper section2">
	<div class="row" id="space">
		@if($message == !null) {!! $message !!} @endif
	</div> 

		<div id="pseudoElement"></div>
		<div class="row">
			<div class="col-md-10 offset-md-2">
				<h2 class="whiteText companyTitle">@lang('a.contacts')</h2>
			</div>
		</div>
		<div class="row contactRow">
			<div class="col-md-6">
				<div id="map" style="width: 100%; height: 500px;"></div>
				
			</div>
			<div class="col-md-4 contactInfo">
				<p class="fg1">@lang('a.phone')</p>
				<p class="fg2">8-777-777-77-77</p>
				<p class="fg1">@lang('a.address')</p>
				<p class="fg2">@lang('a.address_text')</p>
				<p class="fg1">E-mail</p>
				<p class="fg2">hlopkoprom@gmail.com</p>
				<a class="callBackButton" data-remodal-target="modal">@lang('a.request')</a>
			</div>
		</div>
	</div>
</div>

<!-- Всплывающее окно -->
<div  class="remodal" data-remodal-id="modal">
  <h3>@lang('a.callback')</h3>
  <br>
		<form action="{{ route('contact.store') }}" method="post" onsubmit="return validateForm()">
						{{ csrf_field() }}
			<div class="wrap-input">
			   <input  name="name" class="remodal-inputs" id="name" placeholder="@lang('a.name')">
				@if($errors->has('name'))
			   <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				@endif
			</div>
<!-- 			<div class="wrap-input">
   <input  name="email" class="remodal-inputs" id="email" placeholder="E-mail">
	@if($errors->has('name'))
   <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
	@endif
</div> -->
			<div class="wrap-input">
                <input class="remodal-inputs"  id="phone_mask" name="phone"  placeholder="+7 (XXX) XXX-XX-XX">
                				@if($errors->has('phone'))
			   <small class="form-text invalid-feedback">{{ $errors->first('phone') }}</small>
				@endif
			</div>
			<div class="wrap-input">
			   <input type="submit" class="btns" value="@lang('a.send')" >
			</div>

		</form>

</div>
<script>
/*
window.REMODAL_GLOBALS = {
NAMESPACE: 'modal',
  DEFAULTS: {
    closeOnConfirm: false
  }
};*/
</script>

<script>
	function validateForm() {
		//validate phone
		//var re = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,17}(\s*)?$/;
		//var myPhone = document.getElementById('phone_mask').value;
		//var valid = re.test(myPhone);

		// validate name input
		var name = document.getElementById("name").value;
		var phone = document.getElementById("phone_mask").value;
				
		if (name == ""){
			$("#name").attr('placeholder', "@lang('a.error1')").val('').css({'border':'2px solid red'});
			//return false;
		}
		else $("#name").css('border', '2px solid green'); 

		if (phone == ""){
			$("#phone_mask").attr('placeholder', "@lang('a.error2')").val('').css({'border':'2px solid red'});
				return false;
		}

		// else if(!valid) $("#phone_mask").attr('placeholder', 'Введите например: +7 (777) 777-7777').val('').css({'border':'2px solid red'});

		else $("#phone_mask").css('border', '2px solid green');

			return true;
		}
</script>

@endsection
	







@section('scripts_body')
<script>

$(document).ready(function() {
    $('#phone_mask').mask('+7 (799) 999-99-99');
	$('.success-text').delay(3000).fadeOut(500);
});


// yandex map
ymaps.ready(init);
var myMap, 
    myPlacemark;

function init(){ 
    myMap = new ymaps.Map("map", {
        center: [55.76, 37.64],
        zoom: 7
    }); 
    
    myPlacemark = new ymaps.Placemark([55.76, 37.64], {
        hintContent: 'Москва!',
        balloonContent: 'Столица России'
    });
    
    myMap.geoObjects.add(myPlacemark);
}
// end yandex map
</script>

<script src="/js/remodal.min.js"></script>   
@endsection