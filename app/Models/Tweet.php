<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

        protected $guarded = [
            'id',
            'created_at',
            'updated_at',
        ];
        //すべてのデータをupdateの遅い順に並べて取得
        public static function getAllOrderByUpdated_at()
        {
            return self::orderBy('updated_at', 'desc')->get();
        }
    // public function user(){
    //     return $this ->belongsTo(User::class);
    // }
}
