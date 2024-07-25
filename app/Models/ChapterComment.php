<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterComment extends Model
{
    use HasFactory;

    protected $fillable = ['chapter_id', 'user_id', 'comment'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapterCommentReplies()
    {
        return $this->hasMany(ChapterCommentReply::class);
    }
}
