<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;


class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = ['make', 'model', 'year', 'color', 'price', 'file_path'];

    public function saveFile(UploadedFile $file)
    {
        $path = $file->store('car_files');
        $this->file_path = $path;
        $this->save();
    }
}
