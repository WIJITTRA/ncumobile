<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/21/15 AD
 * Time: 11:34
 */



class TeamDAO {
    function add(Team $team) {
    $sqlText = "INSERT INTO teams(team_name, team_school, team_password, team_std1, team_std2, team_teacher, team_tel, team_email) VALUES (
                        '" . $team->getTeamName() . "', '" . $team->getTeamSchool() . "', '" .
                        $team->getTeamPassword() . "', '" . $team->getTeamStd1() . "', '" .
                        $team->getTeamStd2() . "', '" . $team->getTeamTeacher() . "', '" .
                        $team->getTeamTel() . "', '" . $team->getTeamEmail() . "');  ";
//    return $sqlText;
    return mysql_query($sqlText);
    }
    function findById($authorId){
        $sqlText = "SELECT * FROM authors WHERE author_id='".$authorId."'; ";
        $result = mysql_query($sqlText);
        $author = new Author();
        if ($rs=mysql_fetch_assoc($result)){
            $author->setAuthorID($rs["author_id"]);
            $author->setAuthorName($rs["author_name"]);
            $author->setAuthorSurname($rs["author_surname"]);
            $author->setAuthorOrg($rs["author_org"]);
            $author->setAuthorEmail($rs["author_email"]);
        }
        return $author;
    }
    function update(Author $author) {
        $sqlText = "UPDATE authors SET author_name='" . $author->getAuthorName() . "', author_surname='" . $author->getAuthorSurname() .
            "', author_org='" . $author->getAuthorOrg() . "', author_email='" . $author->getAuthorEmail() . "' WHERE author_id='" . $author->getAuthorID() . "'; ";
        return mysql_query($sqlText);
    }
}