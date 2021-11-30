<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\PdfToImage\Pdf as Pdf;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Resource extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'name',
        'url',
        'thumbnail',
    ];

    public function getThumbnail($resource)
    {
        $pdf = new Pdf($resource);
        $imageName = Str::uuid();
        $thumbnail = $pdf->saveImage(Storage::path('newsletter/'.$imageName.'.png'));
        if ($thumbnail == true) {
            return $imageName.'.png';
        } else {
            return null;
        }
    }
}
