<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $fillable = [

	'tituloPgInicial',
	'subtituloPgInicial',
	'corHero',
	'imgHero',
	'NavBrand',
	'ativaBlog',
	'ativaBusca',
	'CorCaracter',
	'corBusca'
    ];
}
