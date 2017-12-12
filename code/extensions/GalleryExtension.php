<?php

/**
 * GalleryExtension
 *
 * @package SSGallery
 * @subpackage GalleryExtension
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

class GalleryExtension extends DataExtension
{
    private static $has_one = array();

    private static $has_many = array(
        'Images'    => 'GalleryImage',
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Gallery', SortableUploadField::create('Images'));
    }
}