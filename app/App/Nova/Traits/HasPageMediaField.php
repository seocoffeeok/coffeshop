<?php

namespace App\Nova\Traits;

use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasPageMediaField
{
    private function getSnippetPreviewMediaField(): Medialibrary
    {
        $field = Medialibrary::make(__('Preview'), 'snippet_preview')
            ->single()
            ->autouploading()
            ->accept('image/*')
            ->mediaOnIndex(1);

        $field->previewCallback = fn (Media $media) => url($media->getFullUrl());

        return $field;
    }

    private function getGalleyMediaField(): Medialibrary
    {
        $field = Medialibrary::make(__('Gallery'), 'gallery')
            ->autouploading()
            ->accept('image/*')
            ->mediaOnIndex(1)
            ->showOnCreating($this->isViewCustomMediaFields())
            ->showOnUpdating($this->isViewCustomMediaFields())
            ->showOnDetail($this->isViewCustomMediaFields())
            ->hideFromIndex();

        $field->previewCallback = fn (Media $media) => url($media->getFullUrl());

        return $field;
    }

    private function getCertificatesMediaField(): Medialibrary
    {
        $field = Medialibrary::make(__('Certificates'), 'certificates')
            ->showOnCreating($this->isViewCustomMediaFields())
            ->showOnUpdating($this->isViewCustomMediaFields())
            ->showOnDetail($this->isViewCustomMediaFields())
            ->hideFromIndex()
            ->autouploading();

        $field->previewCallback = fn (Media $media) => url($media->getFullUrl());

        return $field;
    }

    private function isViewCustomMediaFields(): bool
    {
        return $this->resource->slug === 'about';
    }
}
