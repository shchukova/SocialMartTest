<?php
class AbstractParser
{
    /**
     * Ссылка для загрузки
     * @var link
     */
    protected $link = '';
    /**
     * Загруженная информация
     * @var resource
     */
    protected $answer = null;
    /**
     * результат парсинга
     * @var result
     */
    protected $result = null;
    
    /**
     * Загрузить  информацию
     */
    protected function load()
    {
        return;
    }
    
    /**
     * Парсинг загруженной информации
     */
    protected function parse()
    {
        return;
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