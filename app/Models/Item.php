<?php
/**
* Item.php
* Author: Gabriel Ponce
* Date: 2024-12-05
**/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'quantity', 'category_id' ,'sku', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
