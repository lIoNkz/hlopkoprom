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
  <div class="section" style="background-image: url('images/fullpage/1.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Единственный на сегодняшний день производитель КМЦ в Казахстане</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
  <div class="section" style="background-image: url('images/fullpage/2.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Продукция производится на основе высококачественного Казахстанского сырья</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
  <div class="section" style="background-image: url('images/fullpage/3.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Годовая производительность составляет <br>
        Гигроскопическая вата - 2500 тонн<br>
        Хлопковая целлюлоза - 3500 тонн <br>
        Карбоксиметилцеллюлоза - 4000 тонн
        </p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
  <div class="section" style="background-image: url('images/fullpage/4.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Технология производства позволяет выпускать продукцию под индивидуальный заказ определенных технических параметров необходимых каждому отдельному клиенту</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
  <div class="section" style="background-image: url('images/fullpage/5.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Компания производит указанную продукцию любых марок и качественных характеристик</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
    <div class="section" style="background-image: url('images/fullpage/6.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Производство оснащено высокотехнологичным современным оборудованием - автоматизировано и экологически безвредно</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
    <div class="section" style="background-image: url('images/fullpage/7.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">С момента запуска в 2010 году мы освоили технологию производства и вышли на проектную мощность</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
    <div class="section" style="background-image: url('images/fullpage/8.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Персонал предприятия прошел специализированное обучение</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
    <div class="section" style="background-image: url('images/fullpage/9.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Наше производство не имеет аналогов в Казахстане</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
      <div class="section" style="background-image: url('images/fullpage/10.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Производственной мощности предприятия достаточно для удовлетворения потребности Казахстана в данных видах продукции</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
      <div class="section" style="background-image: url('images/fullpage/11.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="whiteText contentText textIndent">Kazkarbo - это зарегистрированная товарная марка высококачественной карбоксиметилцеллюлозы</p>
        </p>  
      </div>
    </div>  <!-- row -->
  </div><!-- main section -->
</div><!-- fullpage -->
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
              scrollingSpeed: 700,
              autoScrolling: true,
              afterRender: function () {
                  setInterval(function () {
                      $.fn.fullpage.moveSectionDown();
                  }, 10000);
              },
              loopBottom: true,
              loopTop: true

            });
          }

@endsection