<?php

namespace Domain\Page\Models\Concerns;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasMediaCollections
{
    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('snippet_preview')
            ->singleFile();

        $this->addMediaCollection('gallery');

        $this->addMediaCollection('certificates');
    }

    public function getSnippetMedia(): ?Media
    {
        return $this->getFirstMedia('snippet_preview');
    }

    public function getSnippetAttribute(): ?string
    {
        return $this->getSnippetMedia()?->getUrl();
    }

    public function getGalleryMedia(): MediaCollection
    {
        return $this->getMedia('gallery');
    }

    public function getCertificatesMedia(): MediaCollection
    {
        return $this->getMedia('certificates');
    }
}
