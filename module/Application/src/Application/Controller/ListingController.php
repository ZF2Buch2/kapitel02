<?php
/**
 * ZF2 Buch Kapitel 2
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Debug\Debug;
use Zend\Di\Config as DiConfig;
use Zend\Di\Di;
use Zend\Di\DefinitionList;
use Zend\Di\Definition\CompilerDefinition;
use Zend\Di\Definition\ArrayDefinition;
use Zend\Di\Definition\RuntimeDefinition;
use Zend\Math\Rand;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\Config as ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\View\Model\ViewModel;
use Pizza\Config\ServiceConfiguration;
use Pizza\Crust\WheatFlourAwareInterface;
use Pizza\Topping\ToppingAbstractFactory;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 02.01
     */
    public function listing0201Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.02
     */
    public function listing0202Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.03
     */
    public function listing0203Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.04
     */
    public function listing0204Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.05
     */
    public function listing0205Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.06
     */
    public function listing0206Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.07
     */
    public function listing0207Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.08
     */
    public function listing0208Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 02.09
     */
    public function listing0209Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.10
     */
    public function listing0210Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 02.11
     */
    public function listing0211Action()
    {
        return new ViewModel();
    }
}
