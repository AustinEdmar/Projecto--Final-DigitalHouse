<?php

namespace App\Support;

class Cropper
{
   // vou criar um metodo
    public static function thumb(string $uri, int $width, int $height)
    {
       $cropper = new \CoffeeCode\Cropper\Cropper('../public/storage/cache');
       // informarei os 3 parametro caminho largura e altura
        $pathThumb = $cropper->make(config('filesystems.disks.public.root') . '/'. $uri, $width, $height );
        $file = 'cache/'. collect(explode( '/', $pathThumb))->last();
        return $file;
    }
}