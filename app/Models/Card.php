<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;


class Card extends Model
{
    use HasFactory;

    //protected $user_id;
    protected $table = 'card';
    //protected $primaryKey = 'user_id';	

    protected $attributes = [
        'id_card' => 0,
    ];
    	
    /**
     * id_card - состояние договора
     * 
     * 0 - не заключён, 
     * 1 - заключён, 
     * 2 - расторгнут
     */
    protected $fillable = [ 
        'user_id', 'id_card', 'created_at', 'updated_at'
    ];

    public function __construct(array $attributes = [])
    {
        //dd(Auth::user()->id);
        //dd(Auth::check());
        // $this->attributes = ['user_id' => auth()->user()->verified];
        // parent::__construct($attributes);
    }

    public static function status()
    {
        $uuid = auth()->user()->verified;
        $status = self::where('user_id', $uuid)->first();
        // $status = self::find($uuid);
        return $status === null ? 'z' : $status->id_card;
    }

}
