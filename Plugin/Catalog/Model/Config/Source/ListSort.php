<?php
declare(strict_types=1);

namespace LCSSistemas\ProductSorting\Plugin\Catalog\Model\Config\Source;

use Magento\Catalog\Model\Config\Source\ListSort as ListSortCore;

class ListSort
{
    public function afterToOptionArray(ListSortCore $subject, array $result): array
    {
        array_push($result, ['label' => __('Creation Date'), 'value' => 'orderby_creationdate']);
        return $result;
    }
}