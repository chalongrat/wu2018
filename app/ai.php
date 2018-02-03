<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        
        
        $male = ["man" , "Mr"];
        $female = ["girl" , "Mrs"];

        if (in_array($text , $male)) {
            return 'Male';
        }
        if (in_array($text , $female)) {
            return 'Female';
        }

        return 'Unknown';

        
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        
        return 'Neutral';
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $badwords = array("fuck", "kuay", "dog", "ควาย", "ควย", "เหี้ย", "ดอ");
        
       if(in_array($text, $badwords)){
            return ['แสส'];
       }else{
            return ['ไม่พบ'];
       }
        
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {

        if(strpos($text , "ครับ")!==false){
            return 'TH';
        }
        else {
            return 'EN';
        }
    }
}
