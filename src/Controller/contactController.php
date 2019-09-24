<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class contactController extends AbstractController
{   
	public function index() 
	{   
		return $this->render('contact.html.twig', [
            'activePage' => 'contact',
		]);
	}
}

?>