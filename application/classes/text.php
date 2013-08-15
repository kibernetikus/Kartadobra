<?php defined('SYSPATH') OR die('No direct access allowed.');

class text extends Kohana_Text {
    
    public static function cat($in, $out, $html)
    {
        $html = substr($html, strpos($html, $in));
        $html = substr($html, 0, strpos($html, $out));
        return $html;
    }

    //пинг в ПС
    public static function blogsPing($siteName, $siteURL, $pageURL, $feedURL)
    {
        // Яндекс.Блоги
        $pingClient = new IXR_Client('ping.blogs.yandex.ru', '/RPC2');
        $pingClient->query('weblogUpdates.ping', $siteName, $siteURL, $pageURL);

        // Google блоги
        $pingClient = new IXR_Client('blogsearch.google.com', '/ping/RPC2');
        $pingClient->query('weblogUpdates.extendedPing',$siteName, $siteURL, $pageURL, $feedURL);
    }
    
    public static function get($str, $len=0, $symbol=' ', $fin='...')
    {
        if($len>0 AND UTF8::strlen($str)>$len)
        {            
            $str = UTF8::substr($str, 0, $len);
            if($symbol!='') $str = UTF8::substr($str, 0, strrpos($str, $symbol));            
            $str .= $fin;
        }
        return $str;
    }

    //работа с текстом
    public static function accepte($str, $len=0, $symbol=' ', $fin='...')
    {
        //если текст не содаржит текста
        if(!preg_match('/[A-z\d\.\?\!\+\-\*\$\%\@А-я]/', $str)) return FALSE;
        
        $str = iconv( 'utf-8', 'cp1251', $str);
        if($len>0 AND strlen($str)>$len)
        {            
            $str = substr($str, 0, $len);
            if($symbol!='') $str = substr($str, 0, strrpos($str, $symbol));            
            $str .= $fin;
        }
        $str = iconv('cp1251', 'utf-8', $str);
        //проверяем пробелы после знаков препинания:
        $pattern = "/(\,|\.|\!|\?|\:|\;)([\wйцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ])/is";
        $replacement = "\${1} \${2}";
        $str = preg_replace($pattern, $replacement, $str);
        //и перед
        $pattern = "/\s(\,|\.|\!|\?|\:|\;)/is";
        $replacement = "\${1}";
        $str = preg_replace($pattern, $replacement, $str);

        $str = htmlspecialchars($str, ENT_QUOTES);
        return $str;
    }

    //полная выдача текста
    public static function out($str)
    {
        $str = preg_replace('/[\n\r]/', '<br>', $str);
        return $str;
    }

    public static function todown($string, $to = true)
    {
        $small = array('а','б','в','г','д','е','ё','ж','з','и','й',
                       'к','л','м','н','о','п','р','с','т','у','ф',
                       'х','ч','ц','ш','щ','э','ю','я','ы','ъ','ь',
                       'э', 'ю', 'я',
                       'q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');
        $large = array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й',
                       'К','Л','М','Н','О','П','Р','С','Т','У','Ф',
                       'Х','Ч','Ц','Ш','Щ','Э','Ю','Я','Ы','Ъ','Ь',
                       'Э', 'Ю', 'Я',
                       'Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M');
        return $to ? str_replace($large, $small, $string) : str_replace($small, $large, $string);
    }

    public static function phone($str)
    {
        if(preg_match('/[78](9\d{2})(\d{3})(\d{4})/', $str, $arr))
        {
            return '+7 ('.$arr[1].') '.$arr[2].'-'.$arr[3];
        }
        if(preg_match('/$(9\d{2})(\d{3})(\d{4})/', $str, $arr))
        {
            return '+7 ('.$arr[1].') '.$arr[2].'-'.$arr[3];
        }
        return $str;
    }
    
    public static function utf8_substr($str, $offset, $length = null)
    {
        #в начале пробуем найти стандартные функции
        if (function_exists('mb_substr')) return mb_substr($str, $offset, $length, 'utf-8'); #(PHP 4 >= 4.0.6, PHP 5)
        if (function_exists('iconv_substr')) return iconv_substr($str, $offset, $length, 'utf-8'); #(PHP 5)

        if (! is_array($a = utf8_str_split($str))) return false;
        if ($length !== null) $a = array_slice($a, $offset, $length);
        else                  $a = array_slice($a, $offset);
        return implode('', $a);
    }

	public static function translate_to_url($st)
	{
            $arr = array(
                'А' => 'A',
                'Б' => 'B',
                'В' => 'V',
                'Г' => 'G',
                'Д' => 'D',
                'Е' => 'E',
                'Ё' => 'YO',
                'Ж' => 'ZH',
                'З' => 'Z',
                'И' => 'I',
                'Й' => 'J',
                'К' => 'K',
                'Л' => 'L',
                'М' => 'M',
                'Н' => 'N',
                'О' => 'O',
                'П' => 'P',
                'Р' => 'R',
                'С' => 'S',
                'Т' => 'T',
                'У' => 'U',
                'Ф' => 'F',
                'Х' => 'H',
                'Ц' => 'C',
                'Ч' => 'CH',
                'Ш' => 'SH',
                'Щ' => 'CSH',
                'Ь' => '',
                'Ы' => 'Y',
                'Ъ' => '',
                'Э' => 'E',
                'Ю' => 'YU',
                'Я' => 'YA',

                'а' => 'a',
                'б' => 'b',
                'в' => 'v',
                'г' => 'g',
                'д' => 'd',
                'е' => 'e',
                'ё' => 'yo',
                'ж' => 'zh',
                'з' => 'z',
                'и' => 'i',
                'й' => 'j',
                'к' => 'k',
                'л' => 'l',
                'м' => 'm',
                'н' => 'n',
                'о' => 'o',
                'п' => 'p',
                'р' => 'r',
                'с' => 's',
                'т' => 't',
                'у' => 'u',
                'ф' => 'f',
                'х' => 'h',
                'ц' => 'c',
                'ч' => 'ch',
                'ш' => 'sh',
                'щ' => 'csh',
                'ь' => '',
                'ы' => 'y',
                'ъ' => '',
                'э' => 'e',
                'ю' => 'yu',
                'я' => 'ya',
                ' ' => '_'
            );

            $output = str_replace(
                array_keys($arr),
                array_values($arr), $st
            );

            $output = preg_replace('/[^\-\w]/', '', $output);

            return strtolower($output);
	}

    public static function get_word_int($int, $k, $return_number=FALSE)
    {
        if($return_number) $return_number = $int.' ';
        switch($k)
        {
            case 'd': //дни
                return $return_number.text::num2word($int, array('день', 'дня', 'дней'));

            case 'm': //месяцы
                return $return_number.text::num2word($int, array('месяц', 'месяца', 'месяцев'));

            case 'y': //годы
                return $return_number.text::num2word($int, array('год', 'года', 'лет'));
                
            case 't': //товары
                return $return_number.text::num2word($int, array('товар', 'товара', 'товаров'));
                
            case 'p': //передачи
                return $return_number.text::num2word($int, array('передача', 'передачи', 'передач'));
                
            case 'rz': //раз
                return $return_number.text::num2word($int, array('раз', 'раза', 'раз'));
                
            case 'zd': //заданий
                return $return_number.text::num2word($int, array('задание', 'задания', 'заданий'));
        }
    }
    static function num2word($num, $words) 
    {
        $num = $num>19 ? $num % 100 : $num % 10;
        switch ($num) 
        {
            case 1:  return $words[0]; 
            case 2: case 3: case 4:  return $words[1]; 
            default: return $words[2]; 
        }
    }

}
?>