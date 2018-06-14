@extends('frontend.layouts.master')
	
@section('content')
<div id="fullpage" class="desktopAboutPage">
  <div class="wrapperAbout section" style="background-image: url('images/1523116073.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-md-7">
        @include('frontend.partials._title')
      </div>
      <div class="col-md-5">
        @include('frontend.partials._search')
      </div>
    </div>
    <div class="containerFirst">
      <div class="row">
            <div class="col-md-12">
              <h5>О компании</h5>
              <p class="whiteText aboutText">
               ТОО «Хлопкопром-Целлюлоза» реализует проект «Организация производства гигроскопической ваты, хлопковой целлюлозы и технической карбоксиметилцеллюлозы из хлопкосодержащего сырья».  <br>
Место реализации проекта – ЮКО, СЭЗ «Онтустiк».
Бизнес ставит целью внедрение новых мировых технологий  на  основе местного сырья и  производства готовой продукции из хлопкосодержащего сырья;  повышение импортозамещения товаров и выход на   мировой рынок,  а так же  реализацию программы вхождения в  50-ку   развитых стран  ВТО. В дальнейшем при внедрении данного производства планируется изучение данного   продукта в  различных отраслях промышленности.
              </p>



            </div>
          </div>
    </div>
    <div class="containerTwo">
      <div id="carousel" class="carousel carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" style="position: absolute; bottom: -50px; right: 0; left: 0; z-index: 15;">
          <li data-target="#carousel" data-slide-to="0" class="active mySlide"></li>
          <li data-target="#carousel" data-slide-to="1" class="mySlide"></li>
          <li data-target="#carousel" data-slide-to="2" class="mySlide"></li>
          <li data-target="#carousel" data-slide-to="3" class="mySlide"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-12">
                <h5>Планируемое производство </h5>
                <div class="yearBlock">
                  <p class="whiteText aboutSliderText" style="font-size: 1em;">Не имеет аналогов в РК и включает следующие виды продукции:
                  <ul style="font-weight: 100;">
                     <li>производство гигроскопической ваты – 1500 т/год;</li>
                     <li>производство хлопковой целлюлозы – 3500 т/год;</li>
                     <li>производство технической карбоксиметилцеллюлозы - 4000 т/год.</li>
                     <li>производство очищенной карбоксиметилцеллюлозы- 2 000 т/год (запуск производства планируется в январе 2013 года).</li>
                   </ul> 
                  </p>
                <!--   <p class="year"><strong>0000-0000</strong></p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
            <div class="row">
              <div class="col-md-12">
                <h5>Технологический процесс производства</h5>
                <div class="yearBlock">
                  <p class="whiteText aboutSliderText" style="font-size: 1em;">На территории ЮКО выращивается хлопчатник. В результате его переработки получается хлопковое волокно и хлопковые отходы - линт, улюк. Данное хлопковое сырье применяется для производства нашей продукции: хлопковое волокно 5 сорта и улюк используется в производстве гигроскопической ваты; линт используется в производстве хлопковой целлюлозы. В процессе химической обработки специальными реагентами из хлопковой целлюлозы получают техническую и очищенную карбоксиметилцеллюлозу.</p>
                  <!-- <p class="year"><strong>0000-0000 </strong></p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
            <div class="row">
              <div class="col-md-12">
                              <h5>Месторасположение осуществления проекта </h5>
              
                <div class="yearBlock">
<p class="whiteText aboutText">Проводится в  Южно-Казахстанской области, г.Шымкент, Специальная экономическая зона «ОНТУСТIК». </p>
                  <!-- <p class="year"><strong>0000-0000</strong></p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
            <div class="row">
              <div class="col-md-12">
              <h5>Дата запуска</h5>

                <div class="yearBlock">
              <p class="whiteText aboutText">27 июня 2010 года</p>
<!--                   <p class="year"><strong>0000-0000</strong></p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
            <div class="row">
              <div class="col-md-12">
              <h5>Количество создаваемых рабочих мест</h5>


                <div class="yearBlock">
              <p class="whiteText aboutText">238</p>
<!--                   <p class="year"><strong>0000-0000</strong></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- Start mobile version -->
<div class="mobileAboutBlock">
  <div class="wrapperAbout section" style="background-image: url('images/1523116073.jpg');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-md-7">
        @include('frontend.partials._title')
      </div>
      <div class="col-md-5">
        @include('frontend.partials._search')
      </div>
    </div>
    <div id="carousel" class="carousel carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" style="position: fixed; bottom: 50px; right: 0; z-index: 999999;">
        <li data-target="#carousel" data-slide-to="0" class="active mySlide"></li>
        <li data-target="#carousel" data-slide-to="1" class="mySlide"></li>
        <li data-target="#carousel" data-slide-to="2" class="mySlide"></li>
        <li data-target="#carousel" data-slide-to="3" class="mySlide"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-7">
              <h4>about</h4>
              <p class="whiteText aboutText">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="col-md-4">
              <div class="yearBlock">
                <h4>History</h4>
                <p class="aboutText aboutText">Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                <p class="year"><strong>0000-0000</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <div class="row">
            <div class="col-md-7">
              <h4>About</h4>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
	      </p>
            </div>
            <div class="col-md-4">
              <h4>loerm ipsum</h4>
              <div class="yearBlock">
                <p class="whiteText aboutText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.  </p>
                <p class="year"><strong>1970-1980</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <div class="row">
            <div class="col-md-7">
              <h4>Lorem ipsum</h4>
              <p class="whiteText aboutText">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="col-md-4">
              <h4>History</h4>
              <div class="yearBlock">
                <p class="whiteText aboutText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="year"><strong>0000-0000 </strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <div class="row">
            <div class="col-md-7">
              <h4>Lorem  ipsum</h4>
              <p class="whiteText aboutText">
                <strong style="font-size: 1.2rem">Миссия компании:</strong>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              </p>
            </div>
            <div class="col-md-4">
              <h4>Lorem ipsum</h4>
              <div class="yearBlock">
                <p class="whiteText aboutText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                <p class="year"><strong>0000</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>  
  </div>
</div>
<!-- End mobile version -->
@endsection