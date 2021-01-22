<?php
declare(strict_types=1);

namespace LCSSistemas\ProductSorting\Plugin\Catalog\Model;

use Magento\Catalog\Model\Config as ConfigCore;

class Config
{
    public function afterGetAttributeUsedForSortByArray(ConfigCore $subject, array $result): array
    {
        $result['orderby_creationdate'] = __('Creation Date');
        return $result;
    }
}