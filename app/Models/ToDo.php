<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;
    protected $fillable = ["content", "completed","user_id"];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
