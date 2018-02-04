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
        $male = ["man" , "Mr" , "ครับ" , "สวัสดีครับ" , "ควย"];
        $female = ["girl" , "Mrs" , "สวัสดีค่ะ" , "ค่ะ"];

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
        $Positive = ["จุ้บ","ม้วฟ" , "ครับ" , "ค่ะ"];
        $Neutral = ["คุณ","ท่าน"];
        $Negative = ["สัส","ค.ย" ,"สัส","เลว","หมา","มึง","อีจืด","อีอ้วน","อีดอก","อีนมเล็ก" , "ควย"];

        for($i = 0 ; $i <sizeof($Positive); $i++){
            if (stripos($text,$Positive[$i]) !== false){
                return 'Positive';
            }
        }

        for($i = 0 ; $i <sizeof($Neutral); $i++){
            if (stripos($text,$Neutral[$i]) !== false){
                return 'Neutral';
            }
        }
        for($i = 0 ; $i <sizeof($Negative); $i++){
            if (stripos($text,$Negative[$i]) !== false){
                return 'Negative';
            }
        }

    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $badwords = ["สัส","เลว","หมา","มึง","อีจืด","อีอ้วน","อีดอก","อีนมเล็ก" , "ควย"];
        $arry = [];
        for($i = 0 ; $i <sizeof($badwords); $i++){
            if (stripos($text,$badwords[$i]) !== false){
                array_push($arry,$badwords[$i]);
            }
            else{
                return ['ไม่พบ'];
            }
        }
        return $arry;
        
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        $language = [];

        if(preg_replace('/[^ก-๙]/ u','',$text)!=""){
            return 'TH';
        } 

        if(preg_replace('/[^a-z]/ u','',$text)!=""){
            return "EN";
        }
       
    }
}
