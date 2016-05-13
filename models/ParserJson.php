<?php
/**
 * класс ParserJson
 * отвечает за парсинг Json ответа
 **/
class ParserJson extends AbstractParser
{
    protected  $link = 'http://source-json';

    protected function load()
    {
        /**
         * TODO загрузить
         **/
        if ($this->answer) {
            return true;
        }
        return false;
    }
    
    protected function parse()
    {
        $this->result = $this->parseJson($this->answer);
        if ($this->result){
            return true;
        }
        return false;
    }
    
    private function parseJson($answer)
    {
        /**
         * TODO реализовать парсинг Json Ответа
         **/
        return "";
    }
}
