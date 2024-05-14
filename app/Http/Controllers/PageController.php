<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    //Attributi
    //public, Protected, Private
    //Dynamic e Static
    public static $servizi = [
        [
            'uri' => 'gestionale',
            'name' => 'Sistemi Gestionali',
            'costo' => 1500,
            'tempo_di_realizzazione' => '2 settimane',
            'img' => 'https://picsum.photos/500/300'
        ],
        [
            'uri' => 'ecommerce',
            'name' => 'Piattaforma eCommerce',
            'costo' => 2500,
            'tempo_di_realizzazione' => '3 settimane',
            'img' => 'https://picsum.photos/500/300'
        ],
        [
            'uri' => 'siti-web',
            'name' => 'Siti Web',
            'costo' => 1000,
            'tempo_di_realizzazione' => '1 settimana',
            'img' => 'https://picsum.photos/500/300'
        ],
        [
            'uri' => 'consulenza',
            'name' => 'Consulenza Web',
            'costo' => 3500,
            'tempo_di_realizzazione' => '4 settimane',
            'img' => 'https://picsum.photos/500/300'
        ],
    ];
    //Construttori
    //Metodi vari


    public function homepage()
    {
        return view('homepage');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function services()
    {


        return view('service', ['servizi' => self::$servizi]); //? posso passare infinite variabili
    }

    public function service($service)
    {


        foreach (self::$servizi as $element) {
            if ($service == $element['uri']) {
                return view('detail', ['service' => $element]);
            }
        }
        abort(404);
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {

        $request->validate(
            [
                'fullname' => 'required',
                'email' => 'required|email',
                'phone' => 'numeric|nullable',
                'message' => 'required|min:10',
            ]
        );
        
        // dd($request->all());
        $data = [
            'nome' => $request->fullname,
            'indirizzo' => $request->email,
            'telefono' => $request->phone,
            'messaggio' => $request->message,
        ];
        
        Mail::to('marco.devito93@gmail.com')->send(new ContactMail($data));
        return redirect()->route('thank_you');
    }

    public function thank_you()
    {
        return view('thank_you');
    }
}
