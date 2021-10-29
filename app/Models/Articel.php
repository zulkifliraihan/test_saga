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
        'banner_ori',
        'banner_resize',
        'title',
        'slug',
        'content',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function fileResize()
    {
        return $this->hasOne(File::class, 'id', 'banner_resize');
    }

    public function fileOri()
    {
        return $this->hasOne(File::class, 'id', 'banner_ori');
    }

}
