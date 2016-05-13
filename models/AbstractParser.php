<?php
class AbstractParser
{
    /**
     * ������ ��� ��������
     * @var link
     */
    protected $link = '';
    /**
     * ����������� ����������
     * @var resource
     */
    protected $answer = null;
    /**
     * ��������� ��������
     * @var result
     */
    protected $result = null;
    
    /**
     * ���������  ����������
     */
    protected function load()
    {
        return;
    }
    
    /**
     * ������� ����������� ����������
     */
    protected function parse()
    {
        return;
    }  
    
    /**
     * �������� ���������
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