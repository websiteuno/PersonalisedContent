<?php

class Meanbee_PersonalisedContent_Model_Resource_Customer_Categories_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Resource collection initialization
     *
     */
    protected function _construct()
    {
        $this->_init('meanbee_personalisedcontent/customer_categories');
    }

}
