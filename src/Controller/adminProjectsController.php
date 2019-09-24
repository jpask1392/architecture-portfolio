<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use mysqli;
use databaseQueries;
require_once('../private/database.php');
require_once('../private/databaseQueries.php');

class adminProjectsController extends AbstractController
{   
	public function index() 
	{   
        $db = connectDatabase();
        $result = getAllProjects($db);
        $projects = [];
        while($row = mysqli_fetch_assoc($result)) 
        {
            array_push($projects, $row);
        };

        disconnectDatabase($db);

		return $this->render('cms/adminProjects.html.twig', [
            'activePage' => 'contact',
            'projects' => $projects,
		]);
	}
}

?>