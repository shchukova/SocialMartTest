<?php
/**
 * Класс AbstractAdvice
 */
class AbstractAdvice
{
    static final $DAY = 0;
    static final $NIGHT = 1;
    protected $parser = null;
    
    
    /**
     * фабричный метод в записимости от типа, созданим совет нужного класса
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
     * Возвращает в зависимости от текущего времени тип совета который нам нужен
     */
    public static function getType()
    {
        /** TODO определить уcловие двневного и вечернего совета
        $result = $condition == 'day' ? self::$DAY : self::$NIGHT;
        return $result;
        **/
    }

    
    /**
     * Возвращает конкретный совет
     */
    public function getAdvice();
}