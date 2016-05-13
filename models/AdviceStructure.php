<?php
/**
 * класс AdviceStructure
 * структура класса совета
 **/
class AdviceStructure
{
    
    /**
     * время
     * @var $time
     **/
    private $time = '';
    
    /**
     * длительность
     * @var $duration
     */
    private $duration = '';
    
    /**
     * действие
     * @var $action
     */
    private $action = '';
    
    /**
     * картинка
     * @var $picture
     */
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