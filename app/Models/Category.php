<?php
/**
* Category.php
* Author: Gabriel Ponce
* Date: 2024-12-05
**/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = ['name'];
}
