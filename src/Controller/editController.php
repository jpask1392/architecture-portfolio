<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use mysqli;
use databaseQueries;
require_once('../private/database.php');
require_once('../private/databaseQueries.php');

class editController extends AbstractController
{
	public function index() 
	{   
        $id = $_GET['id'];
        $db = connectDatabase();
        $result = getProjectById($db, $id);
        $project = mysqli_fetch_assoc($result);
        disconnectDatabase($db);

		return $this->render('cms/test.html.twig', [
            'activePage' => 'about',
            'project' => $project
		]);
	}
}

?>
