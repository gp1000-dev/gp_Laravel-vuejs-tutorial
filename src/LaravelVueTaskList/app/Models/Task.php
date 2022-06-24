<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /* ユーザー入力値を反映したくない属性を保護する */
    // [$fillable] モデルがその属性以外を持ちません（ホワイトリスト）
    // [複数代入] 配列を渡してモデルを作成すること
    protected $fillable = [
        'title',
        'content',
        'person_in_charge',
    ];
}
