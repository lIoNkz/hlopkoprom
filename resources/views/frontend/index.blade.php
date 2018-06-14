@extends('frontend.layouts.master')

@section('content')
<style type="text/css">

/*         a.nav-link{
    color: #fff !important;
}

#nav-icon span {
    background: #fff;
} */

.romb_css {
  overflow: hidden;
}
</style>
<div  id="fullpage" class="homeDesktop">
  <div id="main" class="section" style="background-image: url('images/1523103773.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <h2 class="whiteText companyTitle">Хлопкопром</h2>
        <p class="whiteText contentText textIndent">ТОО «Хлопкопром-Целлюлоза» реализует проект «Организация производства гигроскопической ваты, хлопковой целлюлозы и технической карбоксиметилцеллюлозы из хлопкосодержащего сырья».</p>
<p class="whiteText contentText textIndent"> Место реализации проекта – ЮКО, СЭЗ «Онтустiк».
Бизнес ставит целью внедрение новых мировых технологий  на  основе местного сырья и  производства готовой продукции из хлопкосодержащего сырья;  повышение импортозамещения товаров и выход на   мировой рынок,  а так же  реализацию программы вхождения в  50-ку   развитых стран  ВТО. 
</p>
<p class="whiteText contentText textIndent">В дальнейшем при внедрении данного производства планируется изучение данного   продукта в  различных отраслях промышленности.</p>
</p>  
        <a href="/contacts" class="svyazatsya whiteText">СВЯЗАТЬСЯ</a>
      </div>
      <div class="col-lg-5">
        @include('frontend.partials._search')
        <div class="rombBlocks">
          <div class="rombBlockFirst">
            <div class="romb1 romb_css" id="romb1">
              <div><img src="/images/rombs/1.jpg" alt="slide"></div>
              <div><img src="/images/rombs/2.jpg" alt="slide"></div>
              <div><img src="/images/rombs/3.jpg" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockTwo">
            <div class="romb2 romb_css" id="romb2">
              <div><img src="/images/rombs/4.jpg" alt="slide"></div>
              <div><img src="/images/rombs/5.jpg" alt="slide"></div>
              <div><img src="/images/rombs/6.jpg" alt="slide"></div>
            </div>
            <div class="romb3 romb_css" id="romb3">
              <div><img src="/images/rombs/7.jpg" alt="slide"></div>
              <div><img src="/images/rombs/8.jpg" alt="slide"></div>
              <div><img src="/images/rombs/9.jpg" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockThree">
            <div class="romb4 romb_css" id="romb4">
              <div><img src="/images/rombs/10.jpg" alt="slide"></div>
              <div><img src="/images/rombs/11.jpg" alt="slide"></div>
              <div><img src="/images/rombs/12.jpg" alt="slide"></div> 
            </div>
            <div class="romb5 romb_css" id="romb5">
              <div><img src="/images/rombs/6.jpg" alt="slide"></div>
              <div><img src="/images/rombs/8.jpg" alt="slide"></div>
              <div><img src="/images/rombs/4.jpg" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockFour">
            <div class="romb6 romb_css" id="romb6">
              <div><img src="/images/rombs/12.jpg" alt="slide"></div>
              <div><img src="/images/rombs/7.jpg" alt="slide"></div>
              <div><img src="/images/rombs/5.jpg" alt="slide"></div>
            </div>
            <div class="romb7 romb_css" id="romb7">
              <div><img src="/images/rombs/11.jpg" alt="slide"></div>
              <div><img src="/images/rombs/2.jpg" alt="slide"></div>
              <div><img src="/images/rombs/9.jpg" alt="slide"></div>
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

          //Определяю ширину экрана
          var size = $(window).width();
          //Если ширина экрана юольше 991px то инитиализирую fullpage, иначе не инициализирую, такми образом на мобильных экранах fullpage не будет инициализироваться а не desktop будет
          if (size > '991'){

            $('#fullpage').fullpage({
              // scrollBar: true,
              normalScrollElements: '.scrollable-element',
            });
          }

@endsection