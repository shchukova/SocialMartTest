<?php
/**
 * класс AdviceStructure
 * описывает структуру совета
 **/
class AdviceStructure{
    
    private $time = '';
    private $duration = '';
    private $action = '';
    private $picture = '';
    
    public function setTime($time)
    {
        $this->time = $time;
    }
    
    public function setDuraction($duration)
    {
        $this->duration = $duration;
    }
    
    public function setAction($action)
    {
        $this->action = $action;
    }
    
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }
    
    public function getTime()
    {
        return $this->time;
    }
    
    public function getDuraction()
    {
        return $this->duration;
    }
    
    public function getAction()
    {
        return $this->action;
    }
    
    public function getPicture($picture)
    {
        return $this->picture;
    }
}