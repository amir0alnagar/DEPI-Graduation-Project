<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory , SoftDeletes  };
use Illuminate\Database\Eloquent\Model;


class subcategory extends Model
{
    use HasFactory , SoftDeletes;
    public function create_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'create_user_id' , 'id');
    }
    public function update_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'update_user_id' , 'id');
    }
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id' , 'id');
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }
    }

