<?php
/**
*
* Developer: Hemant Singh Magento Certified Developer
* Category:  Wishusucess_CmsApi
* Website:   http://www.wishusucess.com/
*/
namespace Wishusucess\CmsApi\Model;

use Wishusucess\CmsApi\Api\Data\PageInterface;

class Page extends \Magento\Cms\Model\Page implements PageInterface
{
    /**
     * @inheritdoc
     */
    public function getStoreId()
    {
        return $this->_getData(self::STORE_ID);
    }

    /**
     * @inheritdoc
     */
    public function setStoreId(array $storeIds)
    {
        $this->setData(self::STORE_ID, $storeIds);

        return $this;
    }
}
