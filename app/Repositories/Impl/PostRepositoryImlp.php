<?php
namespace App\Http\Repositories\Impl;
use App\Post;
use App\Http\Repositories\PostRepositoryImpl;
use App\Http\Repositories\Eloquent\EloquentRepository;
class PostRepositoryImplImpl extends EloquentRepository  implements PostRepositoryImpl
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Post::class;
        return $model;
    }
}