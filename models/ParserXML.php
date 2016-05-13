<?php
/**
 * класс ParserXml
 * отвечает за парсинг Xml ответа
 **/
class ParserXml extends AbstractParser
{
    protected $link = 'http://source-xml';
    
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
        $this->result = $this->parseXml($this->answer);
    }
    
    private function parseXml($answer)
    {
        /**
         * TODO реализовать парсинг Xml Ответа
         **/
        return "";
    }
}