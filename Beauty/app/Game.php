<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Game extends Model
{
    protected $fillable =[
        'name'
    ];
    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }

    public static function uploadImage($request, $game)
    {        
        if ($request->hasFile('image')) ;
        {
            $image = $request->file('image');
            $filePath = $game->id. '.jpg'; //TODO: convertir imagenes a jpg
            $image->storeAs("/public/games/",$filePath);
        }
    }
    public function imageUrl()
    {
        $route = "storage/games/$this->id.jpg";
      
        if (File::exists($route))
        {
            return $route;
        }
        return "storage/games/default.jpg";
    }
    public function deleteImage($game)
    {
        Storage::delete("public/games/$game->id.jpg");
    }
}
