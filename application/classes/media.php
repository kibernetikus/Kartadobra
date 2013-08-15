<?php
class media
{
    public static function user($u, $size='mini', $type_id=0)
    {
        if(is_numeric($u))
        {
            return '/media/f/'.$size.'/'.media::get($u, '_default/fond/'.$type_id.'.jpg');
        }
        return '/media/f/'.$size.'/'.media::get($u->media_id, '_default/fond/'.$u->type_id.'.jpg');
    }
    public static function get($obj, $default=NULL)
    {
        if(!is_numeric($obj)) $obj = $obj->id;
        if($obj==0 AND $default) return $default;
        return media::mf($obj).'/'.$obj.'.jpg';
    }
    /*
    $size = array(
        'orig' => 1,
        'small' => array(300,200),
        'mini' => array(100,100)
    )
     */
    public static function add($file, $type_id, $size=FALSE, $return_array=FALSE)
    {
        $image = Image::factory($file);
        $media = ORM::factory('Media');
        /*
         * 1 - users
         * 2 - tasks
         * 3 - blogs
         */
        $media->type_id = $type_id;
        $media->save();
        $file = media::test_and_set_dir($media->id);
        $file = $file.$media->id.'.jpg';
        //оригинал
        if(is_array($size) AND isset($size['orig']) AND is_array($size['orig'])) $image = media::resize($image, $size['orig'][0], $size['orig'][1]);
        $image->save(DOCROOT.'/media/f/orig/'.$file);
        
        if(is_array($size))
        {
            if(isset($size['small']))
            {
                //small
                if(is_array($size['small'])) $image = media::resize($image, $size['small'][0], $size['small'][1]);
                $image->save(DOCROOT.'/media/f/small/'.$file);
            }
            if(isset($size['mini']))
            {
                //mini
                if(is_array($size['mini'])) $image = media::resize($image, $size['mini'][0], $size['mini'][1]);
                $image->save(DOCROOT.'/media/f/mini/'.$file);
            }
        }
        if($return_array) return array($media->id, $file);
        return $file;
    }
    
    public static function resize($image, $size_width, $size_height)
    {
        if(empty($size_width) OR empty($size_height))
        {
            $image->resize($size_width, $size_height, empty($size_width) ? Image::WIDTH : Image::HEIGHT); 
            return $image;
        }
        // Подсчитываем соотношение сторон картинки
        $ratio = $image->width / $image->height;
        // Соотношение сторон нужных размеров
        $original_ratio = $size_width / $size_height;
        // Размеры, до которых обрежем картинку до масштабирования
        $crop_width = $image->width;
        $crop_height = $image->height;
        // Смотрим соотношения
        if($ratio > $original_ratio)
        {
                // Если ширина картинки слишком большая для пропорции,
                // то будем обрезать по ширине
                $crop_width = round($original_ratio * $crop_height);
        }
        else
        {
                // Либо наоборот, если высота картинки слишком большая для пропорции,
                // то обрезать будем по высоте
                $crop_height = round($crop_width / $original_ratio);
        }
        // Обрезаем по высчитанным размерам до нужной пропорции
        $image->crop($crop_width, $crop_height);
        // Масштабируем картинку то точных размеров
        $image->resize($size_width, $size_height, Image::NONE);
        
        return $image;
    }
    
    public static function mf($i)
    {
        if($i<=100) return 1;
     	return ceil($i/100);
    }

    public static function test_and_set_dir($media)
    {
        $dir = media::mf($media).'/';

        if(!is_dir(DOCROOT.'/media/f/orig/'.$dir))
        {
            mkdir(DOCROOT.'/media/f/orig/'.$dir, 0777, true);
            chmod(DOCROOT.'/media/f/orig/'.$dir, 0777);
        }
        if(!is_dir(DOCROOT.'/media/f/small/'.$dir))
        {
            mkdir(DOCROOT.'/media/f/small/'.$dir, 0777, true);
            chmod(DOCROOT.'/media/f/small/'.$dir, 0777);
        }
        if(!is_dir(DOCROOT.'/media/f/mini/'.$dir))
        {
            mkdir(DOCROOT.'/media/f/mini/'.$dir, 0777, true);
            chmod(DOCROOT.'/media/f/mini/'.$dir, 0777);
        }
        return $dir;
    }
    
    public static function delete($obj)
    {
        $id = is_numeric($obj) ? $obj : $obj->id;
        $dir = media::mf($id).'/';
        @unlink(DOCROOT.'/media/f/orig/'.$dir.$id.'.jpg');
        @unlink(DOCROOT.'/media/f/small/'.$dir.$id.'.jpg');
        @unlink(DOCROOT.'/media/f/mini/'.$dir.$id.'.jpg');
        if(is_object($obj)) $obj->delete();
    }
}
?>
