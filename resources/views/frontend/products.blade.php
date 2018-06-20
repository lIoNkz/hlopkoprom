@extends('frontend.layouts.master')

@section('content') 
  <div class="prodDesktop">
    <div class="wrapper section2">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-7 offset-md-2">
                  <h2 class="whiteText companyTitle">Продукция</h2>
          <p class="whiteText productText textIndent">
На территории ЮКО выращивается хлопчатник. В результате его переработки получается хлопковое волокно и хлопковые отходы - линт, улюк. Данное хлопковое сырье применяется для производства нашей продукции: 
хлопковое волокно 5 сорта и улюк используется в производстве гигроскопической ваты; 
линт используется в производстве хлопковой целлюлозы. В процессе химической обработки специальными реагентами из хлопковой целлюлозы получают техническую и очищенную карбоксиметилцеллюлозу.
          </p>  
          <p class="whiteText productText textIndent">Производство оснащено высокотехнологичным современным оборудованием, отвечающим международным стандартам качества ISO-9000.
          </p>
          <p class="whiteText productText textIndent">Проект является уникальным и не имеет аналогов в РК. Объем и номенклатура продукции позволяют утверждать, что завод не имеет аналогов на территории СНГ.
          </p>
        </div>
        <div class="col-md-3">
          @include('frontend.partials._search')
        </div>
      </div>
      <div class="row prodImgsWrap">
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="/products/1" class="prodLink" title="Хлопковая гигроскопическая вата"><img src="/images/rombs/10.jpg" alt="" class="prod1"></a>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="/products/2" class="prodLink2" title="Хлоковая целлюлоза"><img src="/images/rombs/11.jpg" alt="" class="prod2"></a>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="/products/3" class="prodLink3" title="Карбоксиметилцеллюлоза"><img src="/images/rombs/m2.jpg" alt="" class="prod3"></a>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="/products/4" class="prodLink4" title="Очищенная КМЦ"><img src="/images/rombs/m3.jpg" alt="" class="prod4"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start mobile version -->
  {{--<div class="prodMobile">
    <div class="wrapperProducts section" id="section0">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-7">
          @include('frontend.partials._title')
          <p class="whiteText productText">
            Обеспечение работников качественной и надежной формой является производственной необходимостью. Более того, можно с уверенностью сказать, что сегодня существует большое количество операций, успешное выполнение которых невозможно без использования одежды специального назначения.
          </p>  
          <p class="whiteText productText">Мы производим высококачественную текстильную продукцию для широкого ряда потребителей, находящихся в Казахстане и в ближнем зарубежье.
          </p>
          <p class="whiteText productText">Наши продукты очень прочные, удобные в носке и термостойкие. Они обладают сильной устойчивостью к изгибам и растяжениям, стирке и глажке, а так же имеют отличные гигиенические качества.
          </p>
        </div>
      </div>
    </div>
    <div class="wrapperProducts section" id="section1">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-5 section">
          @include('frontend.partials._search')
        </div>
      </div>
      <div class="row prodImgsWrap">
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink"><img src="/images/prod1.png" alt="" class="prod1"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink2"><img src="/images/prod2.png" alt="" class="prod2"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink3"><img src="/images/prod3.png" alt="" class="prod3"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink4"><img src="/images/prod4.png" alt="" class="prod4"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink5"><img src="/images/prod5.png" alt="" class="prod5"></a>
          </div>
        </div>
      </div>
    </div>
  </div>--}}
  <!-- End mobile version -->
@endsection