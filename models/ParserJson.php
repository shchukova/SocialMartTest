<?php
class ParserJson extends AbstactParser
{
    protected  $link = 'http://source-json';

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
        $this->result = $this->parseJson($this->answer);
    }
    
    private function parseJson($answer)
    {
        /**
         * TODO реализовать парсинг Json ответа
         **/
        return "";
    }
}