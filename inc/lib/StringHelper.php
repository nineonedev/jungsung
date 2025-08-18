<?php


class StringHelper {
    public static function escape($str){
        return htmlspecialchars($str);
    }

    public static function unescape($str){
        return htmlspecialchars_decode($str);
    }

    public static function quoting($str){
        return '\''. $str . '\'';
    }

    public static function addSlash($str){
        return addslashes($str);
    }

    public static function removeSlash($str){
        return stripslashes($str);
    }
    
    public static function sanitize($str){
		return mysql_real_escape_string(htmlspecialchars($str)); 
        if(is_numeric($str)){
            return $str; 
        }
        $str = trim($str);
        $str = self::addSlash($str);
        $str = self::escape($str);
        $str = self::quoting($str);
        return $str; 
    }

    public static function unsanitize($str){
        $str = trim($str, '\'');
        $str = self::unescape($str);
        $str = self::removeSlash($str);
        return $str; 
    }
}