<?php

namespace Domain\Brand\Models\Concerns;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

trait HasMediaCollections
{
    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('image')
            ->singleFile();

        $this
            ->addMediaCollection('image_view')
            ->singleFile();
    }

    public function getImageMedia(): ?Media
    {
        return $this->getFirstMedia('image');
    }

    public function getImageViewMedia(): ?Media
    {
        return $this->getFirstMedia('image_view');
    }
}
