<?php
/**
 * ����� AbstractAdvice
 */
class AbstractAdvice
{
    static final $DAY = 0;
    static final $NIGHT = 1;
    protected $parser = null;
    
    
    /**
     * ��������� ����� � ����������� �� ����, �������� ����� ������� ������
     * @param integer $type
     * @return AdviceBefore|AdviceAfter
     */
    public static function create($type)
    {
        switch ($type) {
            case self::$DAY:
                return new AdviceDay();
            case self::$NIGHT:
                return new AdviceNight();
        }
        
    }
    
    /**
     * ���������� � ����������� �� �������� ������� ��� ������ ������� ��� �����
     */
    public static function getType()
    {
        /** TODO ���������� �c����� ��������� � ��������� ������
        $result = $condition == 'day' ? self::$DAY : self::$NIGHT;
        return $result;
        **/
    }

    
    /**
     * ���������� ���������� �����
     */
    public function getAdvice();
}