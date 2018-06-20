@extends('frontend.layouts.master')

@section('content') 
  <div class="prodDesktop" style="background-image: url(/images/product_bg.jpg)">
    <div class="wrapperProducts section2">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-7 offset-md-2">
          <h2 class="whiteText companyTitle">{{ $title }}</h2>
          <p class="whiteText productText textIndent">
  {{ $text }}
          </p>  
        </div>
        <div class="col-md-3">
          <img src="/images/rombs/{{ $img }}" alt="" style="width: 100%; margin: 25px 25px; border: 3px solid #fff;">
        </div>
      </div>
    </div>
  </div>

@endsection