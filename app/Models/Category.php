<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $category
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'category' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    public function getStatusTextAttribute()
{
    return ($this->status == 1) ? 'Activo' : 'Inactivo';
}

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category','status'];



}
