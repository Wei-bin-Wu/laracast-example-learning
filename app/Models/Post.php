<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $with=['category','author']; //every time fetch post, always want author and category included

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search)=>
            $query
                ->where('title','like','%' . request('search') . '%')
                ->orWhere('body','like','%' . request('search') . '%'));
//        $query->when($filters['category'] ?? false, fn ($query, $category)=>
//            $query
//                ->whereExists(fn ($query) =>
//                    $query->from('categories')
//                        ->whereColumn('category.id', 'post.category_id')
//                        ->where('category.slug', $category)
//                ));
        $query->when($filters['category'] ?? false, fn ($query, $category)=>
            $query->whereHas('category',fn($query)=>$query->where('slug',$category)));
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}
