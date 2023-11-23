<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Presentation
 *
 * @property $id
 * @property $presentation
 * @property $siglas
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Presentation extends Model
{
    
    static $rules = [
		'presentation' => 'required',
		'siglas' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['presentation','siglas','status'];



}
