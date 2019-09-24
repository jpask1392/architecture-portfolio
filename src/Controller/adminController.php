<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class adminController extends AbstractController
{
	public function index() 
	{
		return $this->render('cms/adminEntry.html.twig', [
			'activePage' => 'Admin',
		]);
	}
}

?>