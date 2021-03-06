<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App;

class SiteController extends Controller
{
    public function index()
    {
        if(!(session('lang'))) {
            self::setLang('ru');
        } else {
            self::setLang(session('lang'));
        }
    	return view('frontend.index');
    }

    public function about()
    {
        if(!(session('lang'))) {
            self::setLang('ru');
        } else {
            self::setLang(session('lang'));
        }
    	return view('frontend.about');
    }

    public function gallery()
    {
        if(!(session('lang'))) {
            self::setLang('ru');
        } else {
            self::setLang(session('lang'));
        }
        return view('frontend.gallery');
    }

    public function products()
    {
        if(!(session('lang'))) {
            self::setLang('ru');
        } else {
            self::setLang(session('lang'));
        }
    	return view('frontend.products');
    }

    public function product($id)
    {
        if(!(session('lang'))) {
            self::setLang('ru');
        } else {
            self::setLang(session('lang'));
        }
        if($id == 1) {
            $text = "Предназначена для получения из неё ваты медицинской санитарно-гигиенической, хирургической и других санитарно-гигиенических изделий. ";
            $title = "Хлопковая гигроскопическая вата";
            $img = "10.jpg";
        }
        if($id == 2) {
            $text = "Является исходным сырьём для производства  лакокрасочной продукции, микрокристаллической целлюлозы, карбоксиметилцеллюлозы (КМЦ), коллоксилина, пластмасс, высококачественных сортов бумаги и других видов продукции.";
            $title = "Хлопковая целлюлоза";
            $img = "11.jpg";
        }
        if($id == 3) {
            $text = "NaКМЦ в водном растворе обладает сгущающими и суспензирующими свойствами. Применяется как заменитель крахмала при шлихтовании и аппретировании тканей в текстильной промышленности, как эмульгатор и загуститель в бумажной, лакокрасочной, керамической,  полиграфической промышленности, в производстве синтетических моющих средств. В строительстве – как клей для обоев, приклеивания керамической плитки и как добавка в бетон. В геологии, нефтяной и газовой промышленности для регулирования свойств буровых растворов работающих в агрессивных средах. Порошок в спектре от белого до кремового  цвета, мелкозернистый или волокнистый материал, растворимый в воде при любой температуре. Продукт получают в результате реакции этерификации целлюлозы.";
            $title = "Карбоксиметилцеллюлоза (КМЦ техническая)";
            $img = "m22.jpg";
        }
        if($id == 4) {
            $text = "Применяется в следующих отраслях промышленности:
пищевая промышленность - является основным потребителем КМЦ, которая используется при изготовлении замороженных молочных продуктов, сухих кормов для домашних животных, и диетических напитков;
парфюмерно-косметической - в производстве зубных паст, эмульсий, суспензий, мазей, кремов и т.д.;
электротехнической - в качестве стабилизатора водных суспензий, порошков окислов металлов для нанесения покрытий на детали электровакуумных приборов методом электрофореза; изготовление обмазки специальных электродов для электросварки, проявляющих паст в фото промышленности;
 проведение некоторых полимерных процессов в химической промышленности - как клеящее и связующее вещество при реставрации книг, документов, изготовлении высококачественных цветных карандашей и художественных красок.
";
            $title = "Очищенная КМЦ";
            $img = "m3.jpg";
        }

        return view('frontend.product')->with(['text'=> $text, 'title' => $title, 'img' => $img]);
    }

    public function contacts()
    {
        if(!(session('lang'))) {
            self::setLang('ru');
        } else {
            self::setLang(session('lang'));
        }
    	return view('frontend.contacts')->with(['message' => '']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone
        ];
        if(session('lang') == 'ru') {
            $success = '<div class="success-text">Мы вам перезвоним!</div>';
        }
        if(session('lang') == 'en') {
            $success = '<div class="success-text">We will callback later!</div>';
        }        
        if(session('lang') == 'kz') {
            $success = '<div class="success-text">Кешірек біз сізбен хабарласамыз!</div>';
        }
        //Mail::to(env('MAIL_TO','admin@ahbk.kz'))->send(new ContactMail($data));






        return view('frontend.contacts')->with(['message'=> $success]);
    }

    public function setLang($language)
    {
        App::setLocale($language);
        session(['lang' => $language]);
        $lang = session('lang');
        return back();
    }
}
