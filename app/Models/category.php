<?php
namespace App\Models;
use Illuminate\Database\Eloquent\{Factories\HasFactory , SoftDeletes  };
use Illuminate\Database\Eloquent\Model;
class category extends Model
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
    public function subcategory(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(subcategory::class, );
    }
}
