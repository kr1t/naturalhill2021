<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $tables = "galleries";
    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'img_gal1',
        'img_gal2',
        'img_gal3',
        'img_gal4',
        'img_gal5',
        'img_gal6',
        'img_gal7',
        'img_gal8',
        'img_gal9',
        'img_gal10'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function project_category()
    {
        return $this->belongsTo('App\Models\ProjectCategory');
    }

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
