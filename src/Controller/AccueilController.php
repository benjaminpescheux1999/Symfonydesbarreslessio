<?php 
	namespace App\Controller;
	use Symfony\Component\HttpFoundation\Response; 
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
	class AccueilController extends AbstractController 
	{
	    /*     * @Routes("accueil/index")     */        
	    public function index()    
	    {                    
	    	return new Response($this->render('accueil/index.html.twig', ['text'=>'Hello les p\'tits BTS']));    
	    } 
	}
?>
