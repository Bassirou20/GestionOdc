<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;

class Absence extends Model
{
    use Filterable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'apprenant_id',
        'date_absence',
        'justifier',
        'motif',
    ];

    private static $whiteListFilter=[
        'apprenant_id',
        'date_absence',
        'justifier',
        'motif',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_absence' =>'date:Y-m-d',
    ];



    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class);
    }
    public function promoReferentiel()
    {
        return $this->belongsTo(PromoReferentiel::class, 'apprenant_id', 'apprenant_id');
    }


}
