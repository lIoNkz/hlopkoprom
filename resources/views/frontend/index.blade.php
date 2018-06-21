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

  <div id="carouselExampleIndicators" class="carousel slide homeDesktop" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">@lang('a.slider-1')</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Продукция производится на основе высококачественного Казахстанского сырья</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Годовая производительность составляет <br>
        Гигроскопическая вата - 2500 тонн<br>
        Хлопковая целлюлоза - 3500 тонн <br>
        Карбоксиметилцеллюлоза - 4000 тонн</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Технология производства позволяет выпускать продукцию под индивидуальный заказ определенных технических параметров необходимых каждому отдельному клиенту</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Компания производит указанную продукцию любых марок и качественных характеристик</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Производство оснащено высокотехнологичным современным оборудованием - автоматизировано и экологически безвредно</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">С момента запуска в 2010 году мы освоили технологию производства и вышли на проектную мощность</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Персонал предприятия прошел специализированное обучение</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Наше производство не имеет аналогов в Казахстане</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Производственной мощности предприятия достаточно для удовлетворения потребности Казахстана в данных видах продукции</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <p class="textIndent">Kazkarbo - это зарегистрированная товарная марка высококачественной карбоксиметилцеллюлозы</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- 
<div class="homeDesktop">
  <div class="section" style="background-image: url('images/fullpage/1.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Единственный на сегодняшний день производитель КМЦ в Казахстане</p>
        </p>  
      </div>
    </div>  row
  </div>main section
  <div class="section" style="background-image: url('images/fullpage/2.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Продукция производится на основе высококачественного Казахстанского сырья</p>
        </p>  
      </div>
    </div>  row
  </div>main section
  <div class="section" style="background-image: url('images/fullpage/3.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Годовая производительность составляет <br>
        Гигроскопическая вата - 2500 тонн<br>
        Хлопковая целлюлоза - 3500 тонн <br>
        Карбоксиметилцеллюлоза - 4000 тонн
        </p>
        </p>  
      </div>
    </div>  row
  </div>main section
  <div class="section" style="background-image: url('images/fullpage/4.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Технология производства позволяет выпускать продукцию под индивидуальный заказ определенных технических параметров необходимых каждому отдельному клиенту</p>
        </p>  
      </div>
    </div>  row
  </div>main section
  <div class="section" style="background-image: url('images/fullpage/5.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Компания производит указанную продукцию любых марок и качественных характеристик</p>
        </p>  
      </div>
    </div>  row
  </div>main section
    <div class="section" style="background-image: url('images/fullpage/6.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Производство оснащено высокотехнологичным современным оборудованием - автоматизировано и экологически безвредно</p>
        </p>  
      </div>
    </div>  row
  </div>main section
    <div class="section" style="background-image: url('images/fullpage/7.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">С момента запуска в 2010 году мы освоили технологию производства и вышли на проектную мощность</p>
        </p>  
      </div>
    </div>  row
  </div>main section
    <div class="section" style="background-image: url('images/fullpage/8.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Персонал предприятия прошел специализированное обучение</p>
        </p>  
      </div>
    </div>  row
  </div>main section
    <div class="section" style="background-image: url('images/fullpage/9.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Наше производство не имеет аналогов в Казахстане</p>
        </p>  
      </div>
    </div>  row
  </div>main section
      <div class="section" style="background-image: url('images/fullpage/10.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Производственной мощности предприятия достаточно для удовлетворения потребности Казахстана в данных видах продукции</p>
        </p>  
      </div>
    </div>  row
  </div>main section
      <div class="section" style="background-image: url('images/fullpage/11.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <p class="whiteText contentText textIndent">Kazkarbo - это зарегистрированная товарная марка высококачественной карбоксиметилцеллюлозы</p>
        </p>  
      </div>
    </div>  row
  </div>main section
</div>fullpage -->
@endsection

@section('scripts_body')
<script>
  
</script>
@endsection