<?php

namespace Lofmobile\Wishlist\Api\Data;

interface WishlistInterface
{
    /**
     * @return int
     */
    public function getCustomerId();

    /**
     * @return string
     */
    public function getSharingCode();

    /**
     * Get the amount of items in the wishlist
     *
     * @return int
     */
    public function getItemsCount();

    /**
     * @return \Lofmobile\Wishlist\Api\Data\ItemInterface[]
     */
    public function getItems();
}
