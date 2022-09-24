<?php

namespace Domain\Staff\Models\Concerns;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

trait HasMediaCollections
{
    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            ->singleFile();

        $this->addMediaCollection('certificates');
    }

    public function getAvatarMedia(): ?Media
    {
        return $this->getFirstMedia('avatar');
    }

    public function getCertificatesMedia(): MediaCollection
    {
        return $this->getMedia('certificates');
    }
}
