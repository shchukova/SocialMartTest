<?php
class AbstractParser
{
    /**
     * источник
     * @var link
     */
    protected $link = '';
    /**
     * результат загрузки
     * @var answer
     */
    protected $answer = null;
    /**
     * результат парсинга
     * @var result
     */
    protected $result = null;
    
    /**
     * Загрузить
     */
    protected function load()
    {
        return false;
    }
    
    /**
     * Парсинг
     */
    protected function parse()
    {
        return false;
    }  
    
    /**
     * Получить результат
     */
    public function getResult(){
        
        if ($this->load()) {
            if ($this->parse()) {
                return $this->result;
            }
        }
        return false;
    }
}