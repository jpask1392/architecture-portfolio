<?php 

function getAllProjects($db)
{
    $sql = "SELECT * FROM projects ";
    $sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    return $result;
}

function getProjectById($db, $id)
{
    $sql = "SELECT * FROM projects ";
	$sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function getSectionByProjectId($db, $id)
{
    $sql = "SELECT * FROM sections ";
	$sql .= "WHERE project_key='" . $id . "'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function getImagesByProjectId($db, $id)
{
    $sql = "SELECT * FROM images ";
	$sql .= "WHERE project_key='" . $id . "'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function getFeatureImages($db)
{
    $sql = "SELECT imagePath, project_key, fileType FROM images ";
    $sql .= "WHERE category='feature'";
    $result = mysqli_query($db, $sql);
    return $result;
}