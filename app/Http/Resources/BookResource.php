<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'book_name' => $this->book_name,
            'pictrue' => config('filesystems.disks.qiniu.domain').$this->img,
            'auth' => $this->auth,
            'copyright' => $this->copyright,
            'description' => $this->description,
            'note' => $this->note,
        ];
    }
}
