<?php
class ParserJson extends AbstactParser
{
    protected  $link = 'http://source-json';

    protected function load()
    {
        /**
         * TODO ��������� ���������� � ���������� $this->answer
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
         * TODO ����������� ������� Json ������
         **/
        return "";
    }
}