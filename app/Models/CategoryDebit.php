<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDebit extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function debit()
    {
        return $this->hasMany(Debit::class, 'category_id');
    }
}

