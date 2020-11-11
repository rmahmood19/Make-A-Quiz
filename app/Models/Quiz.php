<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Quiz extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'name',
        'creatorId'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($quiz) {
            $quiz->{$quiz->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getKeyType()
    {
        return 'string';
    }
}
