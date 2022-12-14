<?php

namespace App\Http\Controllers;

use App\Models\Izdavanje;
use App\Models\Izdavanjestatusknjige;
use App\Models\Knjiga;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Rezervacija;
use App\Models\Statusrezervacije;


class EvidencijaController extends Controller
{
    public function index()
    {

        switch(Route::currentRouteName()){
            case "evidencija.vracene":
                $tip = 1;
            break;

            case "evidencija.prekoracene":
                $tip = 3;
            break;

            default:
                $tip = 2;
            break;

        }
        //echo $tip;

        $izdavanje = Izdavanje::all();
        $knjige = [];
        $korisnici = [];
        $brojac = -1;
        $izdatoKorisnicima = [];
        $statusiKnjiga = Izdavanjestatusknjige::all();
        foreach ($izdavanje as $izdaj) {
            array_push($knjige, Knjiga::findOrFail($izdaj->knjiga_id));
            array_push($korisnici, User::findOrFail($izdaj->izdaokorisnik_id));
            array_push($izdatoKorisnicima, User::findOrFail($izdaj->pozajmiokorisnik_id));
        }

        

       return view(
            'evidencija.index',
            [
                'knjige' => $knjige,
                'korisnici' => $korisnici,
                'brojac' => $brojac,
                'izdavanje' => $izdavanje,
                'izdatoKorisnicima' => $izdatoKorisnicima,
                'statusiKnjiga' => $statusiKnjiga,
                'tip'=>$tip
            ]
        );
    }

    public function show( $izdavanje_id)
    {
        $izdavanje = Izdavanje::findOrFail($izdavanje_id);
        $knjiga = Knjiga::findOrFail($izdavanje->knjiga_id);
        $biblitekar = User::findOrFail($izdavanje->izdaokorisnik_id)->ImePrezime;
        $ucenik =  User::findOrFail($izdavanje->pozajmiokorisnik_id)->ImePrezime;
        return view('evidencija.show', [
            'izdavanje' => $izdavanje,
            'knjiga' => $knjiga,
            'bibliotekar'=> $biblitekar,
            'ucenik' => $ucenik
        ]);
    }

    public function rezervacije(){

        switch(Route::currentRouteName()){
            case "evidencija.aktivne":
                $tip = 4;
            break;

            default:
                $tip = 5;
            break;

        }
        //echo $tip;


        $rezervacije = Rezervacija::all();
        $knjige = [];
        $korisnici = [];
        $brojac = -1;
        $izdatoKorisnicima = [];
        $statusiRezervacija = Statusrezervacije::all();

        
        foreach ($rezervacije as $rezervacija) {
            //dd($rezervacija->izdaokorisnik_id);
            array_push($knjige, Knjiga::findOrFail($rezervacija->knjiga_id));
            array_push($korisnici, User::findOrFail($rezervacija->rezervisaokorisnik_id));
            array_push($izdatoKorisnicima, User::findOrFail($rezervacija->zakorisnik_id));
            // $datumIsteka = new \DateTime($rezervacija->datumpodnosenja);
            // $datumIsteka = $datumIsteka->add(new \DateInterval('P30D'));
            // $rezervacija->datum_isteka = $datumIsteka->format('Y-m-d');
        }

       // dd('dsdsd');
       return view(
            'evidencija.index',
            [
                'knjige' => $knjige,
                'korisnici' => $korisnici,
                'brojac' => $brojac,
                'rezervacija' =>$rezervacija,
                'izdatoKorisnicima' => $izdatoKorisnicima,
                'statusiRezervacija' => $statusiRezervacija,
                'tip'=>$tip
            ]
        );

    }

}
