<?php declare(strict_types=1);

namespace Lofmobile\Wishlist\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Lofmobile\Wishlist\Api\Data\ItemInterface;

class Item extends \Magento\Wishlist\Model\Item implements ItemInterface
{
    /**
     * @inheritDoc
     */
    public function getId(): int
    {
        return parent::getId();
    }

    /**
     * @inheritDoc
     */
    public function getQty(): int
    {
        return parent::getData('qty');
    }

    /**
     * @inheritDoc
     */
    public function getProduct(): ProductInterface
    {
        return parent::getProduct();
    }
}
