<?php 

namespace App\Controller;

use mysqli;
use databaseQueries;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
require_once('../private/database.php');
require_once('../private/databaseQueries.php');

class galleryController extends AbstractController
{   
    private static $db;
    private $filterArr = array('Lesuire', 'Industrial', 'Residential', 'Education', 'Healthcare', 'Dynamo');

    public function __construct()
    {
        self::$db = connectDatabase();
    }

    static function getProjects() 
    {
        $result = getAllProjects(self::$db);
        $projects = [];
        while($row = mysqli_fetch_assoc($result)) 
        {
            array_push($projects, $row);
        };
        return $projects;
    }

    static function getFeatureImages() 
    {
        $result = getFeatureImages(self::$db);
        $images = [];
        while($row = mysqli_fetch_assoc($result)) 
        {
            array_push($images, $row);
        };
        return $images;
    }

	public function index() 
	{   
        $projects = $this::getProjects();
        $images = $this::getFeatureImages();
        disconnectDatabase(self::$db);
    
		return $this->render('gallery.html.twig', [
            'activePage' => 'gallery',
            'projects' => $projects,
            'featureImage' => $images,
            'filtersArr' => $this->filterArr
		]);
	}
}

?>