@extends('frontend.layouts.master')

@section('content') 
  <div id="fullpage" class="prodDesktop">
    <div class="wrapperProducts section2">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-7">
                  <h2 class="whiteText companyTitle">{{ $title }}</h2>
          <p class="whiteText productText textIndent">
  {{ $text }}
          </p>  
        </div>
        <div class="col-md-5">
          @include('frontend.partials._search')
          <img src="/images/rombs/{{ $img }}" alt="" style="width: 100%; margin: 25px 25px; border: 3px solid #fff;">
        </div>
      </div>
    </div>
  </div>

@endsection