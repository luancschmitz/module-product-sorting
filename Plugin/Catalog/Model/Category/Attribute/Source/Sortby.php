<?php
declare(strict_types=1);

namespace LCSSistemas\ProductSorting\Plugin\Catalog\Model\Category\Attribute\Source;

use Magento\Catalog\Model\Category\Attribute\Source\Sortby as SortbyCore;

class Sortby
{
    public function afterGetAllOptions(SortbyCore $subject, array $result): array
    {
        array_push($result, ['label' => __('Creation Date'), 'value' => 'orderby_creationdate']);
        return $result;
    }
}