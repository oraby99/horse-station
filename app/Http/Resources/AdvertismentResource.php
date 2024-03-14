<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdvertismentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $images = json_decode($this->images); // Decode the JSON array of images
        $dataImages = [];
        if (!empty($images)) {
            foreach ($images as $image) {
                $dataImages[] = asset('uploads/advertisments/' . $image);
            }
        }

        return [
            'id' => $this->id,
            'category' => optional($this->category)->name,
            'name' => $this->name,
            'price' => $this->price,
            'type' => 'advertisment',
            'is_sold' => $this->is_sold,
            'images' => !empty($images) ? $dataImages : asset('default.png'), // Return processed images array or default image
        ];
    }

}

