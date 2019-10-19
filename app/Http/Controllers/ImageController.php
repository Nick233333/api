<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public $disk;

    public function __construct()
    {
        $this->disk = \Storage::disk('qiniu');
    }

    public function upload()
    {
        $fileName = 'b.png';
        if ($this->disk->has($fileName) === true) {
            $this->disk->delete($fileName);
        }
        $res = $this->disk->put($fileName, fopen(public_path('favicon.png'), 'r'));
        dd($res);
    }


    public function destroy($fileName)
    {
        if ($this->disk->has($fileName) === true) {
            $res = $this->disk->delete($fileName);
            dd($res);
        }
        echo 'no exists';
    }
}
