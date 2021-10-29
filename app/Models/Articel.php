<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articel extends Model
{
    use HasFactory;

    protected $table = 'articels';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'file_id',
        'title',
        'slug',
        'content',
        'banner',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function file()
    {
        return $this->hasOne(File::class, 'file_id', 'id');
    }

}
