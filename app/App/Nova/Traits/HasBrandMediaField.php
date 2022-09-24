<?php

namespace App\Nova\Traits;

use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasBrandMediaField
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

    private function getImageViewMediaField(): Medialibrary
    {
        $field = Medialibrary::make(__('Image Page'), 'image_view')
            ->single()
            ->autouploading()
            ->accept('image/*')
            ->mediaOnIndex(1)
            ->rules(['required']);

        $field->previewCallback = fn (Media $media) => url($media->getFullUrl());

        return $field;
    }
}
