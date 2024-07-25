<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterCommentReply extends Model
{
    use HasFactory;

    protected $fillable = ['chapter_comment_id', 'user_id', 'reply'];

    public function chapterComment()
    {
        return $this->belongsTo(ChapterComment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
