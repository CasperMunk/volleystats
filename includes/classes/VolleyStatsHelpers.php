<?php
class VolleyStatsHelpers {

    public function ucname($string) {
        $string =ucwords(strtolower($string));

        foreach (array('-', '\'') as $delimiter) {
          if (strpos($string, $delimiter)!==false) {
            $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
          }
        }
        return $string;
    }

    public function formatNumber($val,$decimal=0){
        if (is_array($val)){
            return array_map(function($num){return number_format($num,0,",",".");}, $val);
        }else{
            return number_format($val,$decimal,",",".");
        }
        
    }

    public function cleanInputData($val,$type="int"){
        $val = strip_tags($val);
        if ($type == "int"){
            return intval(preg_replace('/\D/', '',$val));
        }else{
            return $val;
        }
        
    }

    public function getTagById($tag,$id,$content){
        if (preg_match('#(<'.$tag.'[^>]*id=[\'|"]'.$id.'[\'|"][^>]*>)(.*)</'.$tag.'>#isU', $content, $response)){
            return $response[0];
        }    
    }

    public function reverseName($name){
        return trim(strstr($name," "))." ".substr($name,0,strpos($name," "));
    }

    public function translateText($text){
        $translations = array(
            'male' => 'mand',
            'female' => 'kvinde'
        );
        return strtr($text,$translations);
    }
}