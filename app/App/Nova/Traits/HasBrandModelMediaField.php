<?php

namespace App\Nova\Traits;

use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasBrandModelMediaField
{
    private function getImageMediaField(): Medialibrary
    {
        $field = Medialibrary::make(__('Image'), 'image')
            ->single()
            ->autouploading()
            ->accept('image/*')
            ->mediaOnIndex(1)
            ->rules(['required']);

        $field->previewCallback = fn (Media $media) => url($media->getFullUrl());

        return $field;
    }
}
