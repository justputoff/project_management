<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'name', 'description', 'estimate_time', 'start_date', 'end_date', 'status'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function chapterComments()
    {
        return $this->hasMany(ChapterComment::class);
    }

    public function chapterImages()
    {
        return $this->hasMany(ChapterImage::class);
    }
}
