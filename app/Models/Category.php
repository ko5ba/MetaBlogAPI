<?php

namespace App\Models;

use App\Traits\HasSlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    use HasSlugTrait;

    protected $guarded = [];
    protected $table = 'categories';

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
