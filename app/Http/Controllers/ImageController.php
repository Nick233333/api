<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public $disk;
    public $prefix;

    public function __construct()
    {
        $this->disk = \Storage::disk('qiniu');
        $this->prefix = '/books/'.date('Y-m-d', time());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload(Request $request)
    {
        $file = $request->file('img');
        $fileName = $this->prefix;
        if ($this->disk->has($fileName) === true) {
            $this->disk->delete($fileName);
        }
        $res = $this->disk->put($fileName, $file);
        return response()->json(['code' => 200, 'message' => 'success', 'data' => ['result' => config('filesystems.disks.qiniu.domain').$res]]);
    }

    /**
     * @param $fileName
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($fileName)
    {
        $res = false;
        $file = $this->prefix.'/'.$fileName;
        if ($this->disk->has($file) === true) {
            $res = $this->disk->delete($file);
        }
        return response()->json(['code' => 200, 'message' => 'success', 'data' => ['result' => $res]]);
    }
}
