<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Album
 * @package App\Models
 * @version October 25, 2021, 5:45 am UTC
 *
 * @property string $song
 * @property string $singer
 * @property string $date_release
 */
class Album extends Model
{

    use HasFactory;

    public $table = 'album';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'song',
        'singer',
        'date_release'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'song' => 'string',
        'singer' => 'string',
        'date_release' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'song' => 'required|string|max:255',
        'singer' => 'required|string|max:255',
        'date_release' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
