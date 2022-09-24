<?php

namespace App\Nova\Traits;

use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasStaffMediaField
{
    private function getAvatarMediaField(): Medialibrary
    {
        $field = Medialibrary::make(__('Avatar'), 'avatar')
            ->single()
            ->autouploading()
            ->accept('image/*')
            ->mediaOnIndex(1);

        $field->previewCallback = fn (Media $media) => url($media->getFullUrl());

        return $field;
    }

    private function getCertificatesMediaField(): Medialibrary
    {
        $field = Medialibrary::make(__('Certificates'), 'certificates')
            ->autouploading();

        $field->previewCallback = fn (Media $media) => url($media->getFullUrl());

        return $field;
    }
}
