<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 12/3/15 AD
 * Time: 11:55
 */

class Team {
    var $TeamId;
    var $TeamName;
    var $TeamSchool;
    var $TeamPassword;
    var $TeamStd1;
    var $TeamStd2;
    var $TeamTeacher;
    var $TeamTel;
    var $TeamEmail;
    var $PaySlip;
    var $TeamStatus;

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->TeamId;
    }

    /**
     * @param mixed $TeamId
     */
    public function setTeamId($TeamId)
    {
        $this->TeamId = $TeamId;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->TeamName;
    }

    /**
     * @param mixed $TeamName
     */
    public function setTeamName($TeamName)
    {
        $this->TeamName = $TeamName;
    }

    /**
     * @return mixed
     */
    public function getTeamSchool()
    {
        return $this->TeamSchool;
    }

    /**
     * @param mixed $TeamSchool
     */
    public function setTeamSchool($TeamSchool)
    {
        $this->TeamSchool = $TeamSchool;
    }

    /**
     * @return mixed
     */
    public function getTeamPassword()
    {
        return $this->TeamPassword;
    }

    /**
     * @param mixed $TeamPassword
     */
    public function setTeamPassword($TeamPassword)
    {
        $this->TeamPassword = $TeamPassword;
    }

    /**
     * @return mixed
     */
    public function getTeamStd1()
    {
        return $this->TeamStd1;
    }

    /**
     * @param mixed $TeamStd1
     */
    public function setTeamStd1($TeamStd1)
    {
        $this->TeamStd1 = $TeamStd1;
    }

    /**
     * @return mixed
     */
    public function getTeamStd2()
    {
        return $this->TeamStd2;
    }

    /**
     * @param mixed $TeamStd2
     */
    public function setTeamStd2($TeamStd2)
    {
        $this->TeamStd2 = $TeamStd2;
    }

    /**
     * @return mixed
     */
    public function getTeamTeacher()
    {
        return $this->TeamTeacher;
    }

    /**
     * @param mixed $TeamTeacher
     */
    public function setTeamTeacher($TeamTeacher)
    {
        $this->TeamTeacher = $TeamTeacher;
    }

    /**
     * @return mixed
     */
    public function getTeamTel()
    {
        return $this->TeamTel;
    }

    /**
     * @param mixed $TeamTel
     */
    public function setTeamTel($TeamTel)
    {
        $this->TeamTel = $TeamTel;
    }

    /**
     * @return mixed
     */
    public function getTeamEmail()
    {
        return $this->TeamEmail;
    }

    /**
     * @param mixed $TeamEmail
     */
    public function setTeamEmail($TeamEmail)
    {
        $this->TeamEmail = $TeamEmail;
    }

    /**
     * @return mixed
     */
    public function getPaySlip()
    {
        return $this->PaySlip;
    }

    /**
     * @param mixed $PaySlip
     */
    public function setPaySlip($PaySlip)
    {
        $this->PaySlip = $PaySlip;
    }

    /**
     * @return mixed
     */
    public function getTeamStatus()
    {
        return $this->TeamStatus;
    }

    /**
     * @param mixed $TeamStatus
     */
    public function setTeamStatus($TeamStatus)
    {
        $this->TeamStatus = $TeamStatus;
    }


}