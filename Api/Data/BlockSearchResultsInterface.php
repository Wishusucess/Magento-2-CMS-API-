<?php
/**
*
* Developer: Hemant Singh Magento Certified Developer
* Category:  Wishusucess_CmsApi
* Website:   http://www.wishusucess.com/
*/
namespace Wishusucess\CmsApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface BlockSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Wishusucess\CmsApi\Api\Data\BlockInterface[]
     */
    public function getItems();

    /**
     * @param \Wishusucess\CmsApi\Api\Data\BlockInterface[] $items
     * @return BlockSearchResultsInterface
     */
    public function setItems(array $items);
}
