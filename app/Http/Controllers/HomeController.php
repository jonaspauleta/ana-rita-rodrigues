<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImageResource;
use App\Http\Resources\TextFieldResource;
use App\Http\Resources\TitleResource;
use App\Models\Image;
use App\Models\TextField;
use App\Models\Title;
use Inertia\Inertia;

class HomeController extends Controller {
    public function __invoke() {
        $titles = TitleResource::collection(Title::all());
        $textfields = TextFieldResource::collection(TextField::all());
        $images = ImageResource::collection(Image::all());

        return Inertia::render('Elementar', [
            'titles' => $titles,
            'textfields' => $textfields,
            'images' => $images,
        ]);
    }
}
