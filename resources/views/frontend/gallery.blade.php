@extends('frontend.layouts.master')

@section('content') 
  <div class="galleryDesktop">
    <div class="wrapper section2">
      <div id="pseudoElement"></div>
      <div class="row">
          <div class="col-md-7 offset-md-2">
          	<h2 class="whiteText companyTitle">Галерея</h2>
          </div>
      </div>
      <div class="row galleryRow">
      	<div class="imgBlock">
          <a href="/images/fullpage/1.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/1.jpg" alt="" class="galleryImg" >
          </a>
      	</div>
        <div class="imgBlock">
          <a href="/images/fullpage/2.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/2.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/3.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/3.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/4.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/4.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/5.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/5.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/6.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/6.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/7.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/7.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/8.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/8.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/9.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/9.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/10.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/10.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/fullpage/11.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/11.jpg" alt="" class="galleryImg" >
          </a>
        </div>
        <div class="imgBlock">
          <a href="/images/gallery/12.jpg" data-lightbox="roadtrip">
            <img src="/images/gallery/12.jpg" alt="" class="galleryImg" >
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts_body')

<script src="/js/lightbox.min.js"></script>

<script>
  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
    alwaysShowNavOnTouchDevices: true,
    albumLabel: "Изображение %1 из %2"
  })
</script>
@endsection


