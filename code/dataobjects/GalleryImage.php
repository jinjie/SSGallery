<?php

/**
 * GalleryImage
 *
 * @package SSGallery
 * @subpackage GalleryImage
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

class GalleryImage extends Image
{
    private static $has_one = array(
        'Parent'    => 'DataObject',
    );

    private static $default_sort = 'SortOrder';
}