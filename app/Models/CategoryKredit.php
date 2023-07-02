<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryKredit extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function kredit()
    {
        return $this->hasMany(Kredit::class, 'category_id');

    }
}
