<?php
class ParserXml extends AbstactParser
{
    protected $link = 'http://source-xml';
    
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
        $this->result = $this->parseXml($this->answer);
    }
    
    private function parseXml($answer)
    {
        /**
         * TODO ����������� ������� Xml ������
         **/
        return "";
    }
}