<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Globalnavarijabla;

class Rezervacija extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function statusknjiges(){
        return $this->belongsToMany(Statusknjige::class,'rezervacijastatus','rezervacija_id','statusrezervacije_id');
    }

    public function getDatumIstekaAttribute()
    {
        $rok_rezervacije = 30;
        
        
        if(Globalnavarijabla::where('varijabla', 'ROK_ZA_REZERVACIJU')->first()){
            $gv = Globalnavarijabla::where('varijabla', 'ROK_ZA_REZERVACIJU')->first();
            $rok_rezervacije =$gv->vrijednost;
        }

        $datumIsteka = new \DateTime($this->datumpodnosenja);
        $datumIsteka = $datumIsteka->add(new \DateInterval('P'.$rok_rezervacije.'D'));
        return $datumIsteka->format('Y-m-d');
    }
}
