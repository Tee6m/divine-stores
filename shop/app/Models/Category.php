<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

public function products(){
    return $this->hasMany(Product::class, 'category_id', 'id');
 }




// public function scopeFeatured($query) {
//     return $query->orderBy('created_at', 'desc')->where('featured', 1);
// }
// public function ScopeFeatureless($query) {
//     return $query->orderBy ('created_at', 'desc')->where('featured', 0);
// }
// public function featureless_product() {
//     return $this->hasMany(Product::class)->where(function(query) {
//         $query->where(['featured'=>0]);
//     });
//    }
}