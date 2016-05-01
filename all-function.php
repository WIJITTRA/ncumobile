<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 12/9/15 AD
 * Time: 11:43
 */
require_once "class/Team.php";
require_once "class/TeamDAO.php";
require_once "class/db_connect.php";
$db = new DB_CONNECT();

if ($_POST["mode"]=="newApplication") {
    $newTeam = new Team();
    $newTeam->setTeamName($_POST["teamName"]);
    $newTeam->setTeamSchool($_POST["teamSchool"]);
    $newTeam->setTeamStd1($_POST["teamStd1"]);
    $newTeam->setTeamStd2($_POST["teamStd2"]);
    $newTeam->setTeamTeacher($_POST["teamTeacher"]);
    $newTeam->setTeamTel($_POST["teamTel"]);
    $newTeam->setTeamEmail($_POST["teamEmail"]);
    $newTeam->setTeamPassword($_POST["teamPassword"]);
    $teamDAO = new TeamDAO();
    echo $teamDAO->add($newTeam);
}