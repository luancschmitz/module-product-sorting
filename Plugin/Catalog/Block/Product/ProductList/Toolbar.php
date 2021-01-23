<?php
declare(strict_types=1);

namespace LCSSistemas\ProductSorting\Plugin\Catalog\Block\Product\ProductList;

use Magento\Catalog\Block\Product\ProductList\Toolbar as ToolbarCore;

class Toolbar
{
    const POSITION_ORDERBY_CREATED_AT = 'orderby_creationdate';

    public function afterGetCurrentDirection(ToolbarCore $subject, $result)
    {
        $param = $subject->getRequest()->getParam('product_list_dir');
        if (!$param && $subject->getCurrentOrder() == self::POSITION_ORDERBY_CREATED_AT) {
            return 'desc';
        }

        return $result;
    }
}