<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class aboutController extends AbstractController
{
	public function index() 
	{
		return $this->render('about.html.twig', [
			'activePage' => 'about',
		]);
	}
}

?>
