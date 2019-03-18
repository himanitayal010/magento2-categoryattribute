<?php
namespace Magneto\Categoryattribute\Controller\Commissionfee;

use Magento\Framework\App\RequestInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $request;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,RequestInterface $request
)
    {
        $this->_pageFactory = $pageFactory;
        $this->request = $request;

        return parent::__construct($context);
    }

    public function execute()
    {
       
     if(isset($_POST['categoryId'])){ 
       $catId= $_POST['categoryId']; 
       
    }


    $objectManager =  \Magento\Framework\App\ObjectManager::getInstance();        
 
    $categoryCollection = $objectManager->get('\Magento\Catalog\Model\ResourceModel\Category\CollectionFactory');
    $categories = $categoryCollection->create()->addAttributeToSelect('*')->addAttributeToFilter('entity_id', $catId);
    foreach ($categories as $category) {

    echo  $categoryCommissionFees = $category['commission_fees']; 
                        
    } 

    exit; 

    //return $this->_pageFactory->create();
    
    }

    
}
