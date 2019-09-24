<?php 

namespace App\Controller;

use mysqli;
use databaseQueries;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
require_once('../private/database.php');
require_once('../private/databaseQueries.php');

class projectController extends AbstractController
{   
	public function index(int $id) 
	{   
        $db = connectDatabase();

        $result = getSectionByProjectId($db, $id);
        $sections = [];
        while($row = mysqli_fetch_assoc($result)) 
        {
            array_push($sections, $row);
        };

        $result = getProjectById($db, $id);
        $project = mysqli_fetch_assoc($result);

        $result = getImagesByProjectId($db, $id);
        $images = [];
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($images, $row);
        };

        $featureImages = [];
        $slideImages = [];
        $allImages = $images;

        foreach ($images as $image)
        {
            if ($image['category'] == "feature") { array_push($featureImages, $image); };
            if ($image['category'] != "feature" ) { array_push($slideImages, $image); };
        }

        disconnectDatabase($db);
    
		return $this->render('project.html.twig', [
            'activePage' => 'gallery',
            'projectData' => $project,
            'sectionData' => $sections,
            'projectImages' => $allImages,
            'slideImages' => $slideImages,
            'featureImages' => $featureImages,
		]);
	}
}

?>