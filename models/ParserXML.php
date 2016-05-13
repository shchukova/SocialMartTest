<?php
class ParserXml extends AbstactParser
{
    protected $link = 'http://source-xml';
    
    protected function load()
    {
        /**
         * TODO загрузить информацию в переменную $this->answer
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
         * TODO реализовать парсинг Xml ответа
         **/
        return "";
    }
}