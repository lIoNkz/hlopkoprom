@extends('frontend.layouts.master')

@section('content')
<style type="text/css">

/*         a.nav-link{
    color: #fff !important;
}

#nav-icon span {
    background: #fff;
} */
</style>
<div id="fullpage" class="homeDesktop">
  <div id="main" class="section" style="background-image: url('images/1523103773.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        @include('frontend.partials._title')
        <p class="whiteText contentText">ТОО «Хлопкопром-Целлюлоза» реализует проект «Организация производства гигроскопической ваты, хлопковой целлюлозы и технической карбоксиметилцеллюлозы из хлопкосодержащего сырья».  <br>
Место реализации проекта – ЮКО, СЭЗ «Онтустiк».
Бизнес ставит целью внедрение новых мировых технологий  на  основе местного сырья и  производства готовой продукции из хлопкосодержащего сырья;  повышение импортозамещения товаров и выход на   мировой рынок,  а так же  реализацию программы вхождения в  50-ку   развитых стран  ВТО. В дальнейшем при внедрении данного производства планируется изучение данного   продукта в  различных отраслях промышленности.
</p>  
        <a href="/contacts" class="svyazatsya whiteText">связаться</a>
      </div>
      <div class="col-lg-5">
        @include('frontend.partials._search')
        <div class="rombBlocks">
          <div class="rombBlockFirst">
            <div class="romb1" id="romb1">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockTwo">
            <div class="romb2" id="romb2">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
            <div class="romb3" id="romb3">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockThree">
            <div class="romb4" id="romb4">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>  
            </div>
            <div class="romb5" id="romb5">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockFour">
            <div class="romb6" id="romb6">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
            <div class="romb7" id="romb7">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>  
        </div>
      </div>
    </div>  
  </div>
</div>
@endsection

@section('scripts_body')


    $(document).ready(function(){
        $('#nav-icon').click(function(){
            $(this).toggleClass('open');
            $('#nav-block').slideToggle();
        });
    });


@endsection