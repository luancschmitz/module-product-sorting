<?php
namespace LCSSistemas\ProductSorting\Plugin\Catalog\Model;

use Magento\Catalog\Block\Product\ProductList\Toolbar as MagentoToolbar;
use Magento\Catalog\Model\Layer as LayerCore;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;

class Layer
{
    /** @var MagentoToolbar */
    private $toolbar;

    /**
     * Layer constructor.
     * @param MagentoToolbar $toolbar
     */
    public function __construct(
        MagentoToolbar $toolbar
    )
    {
        $this->toolbar = $toolbar;
    }

    /**
     * @param LayerCore $subject
     * @param ProductCollection $collection
     * @return array
     */
    public function beforePrepareProductCollection(LayerCore $subject, ProductCollection $collection): array
    {
        $sortBy = $this->toolbar->getRequest()->getParam('product_list_dir') ?? 'desc';
        $currentOrder = $this->toolbar->getCurrentOrder();
        switch ($currentOrder) {
            case 'orderby_creationdate':
                $collection->setOrder('created_at', $sortBy);
                break;
        }

        return [$collection];
    }
}