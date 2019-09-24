<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use mysqli;
use databaseQueries;
require_once('../private/database.php');
require_once('../private/databaseQueries.php');

class showProjectController extends AbstractController
{   
	public function index(int $id) 
	{   
        $db = connectDatabase();
        $result = getProjectById($db, $id);
        $project = mysqli_fetch_assoc($result);
        disconnectDatabase($db);

        // if edit parameter has been passed as true, render something different? 

		return $this->render('cms/showProject.html.twig', [
            'activePage' => 'Admin',
            'project' => $project
		]);
	}
}

?>