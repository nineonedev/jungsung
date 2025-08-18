<?php 

class SummerNote {
    static function save($html_content){
		$UPLOAD_DIR = $_SERVER['DOCUMENT_ROOT'].'/uploads/board';
		$UPLOAD_BASE_DIR = '/uploads/board';
      
        if(!$html_content) return;
		$content = htmlspecialchars_decode($html_content);
		$content = html_entity_decode($content);
        $doc = new DOMDocument();
        $doc->loadHTML($content);
        $images = $doc->getElementsByTagName('img');

        
        if($images->length > 0){

            for ($i = 0; $i < count($images); $i++){
                $img = $images->item($i);
                $src = $img->getAttribute('src');
                
               
                    list($info, $data) = explode(';', $src);
					$lastSlashPos = strrpos($info, '/');
					$part1 = substr($info, 0, $lastSlashPos);
					$part2 = substr($info, $lastSlashPos + 1);

                    list(, $ext) = explode('.', $part2);
                    list(, $base64_data) = explode(',', $data);
					echo $UPLOAD_DIR.'/'.$part1; exit;

					 if(!file_exists($UPLOAD_DIR.'/'.$ext)){
                    
						$filename = uniqid().'.'.$ext; 
						file_put_contents($UPLOAD_DIR.'/'.$filename, base64_decode($base64_data));
						$img->setAttribute('src', $UPLOAD_BASE_DIR.'/'.$filename);
					}
            }

            return $doc->saveHTML();
        }

        return $html_content; 
    }

    static function delete($html_content){
        if(!$html_content) return; 
        $content = html_entity_decode(htmlspecialchars_decode($html_content));
        
        $doc = new DOMDocument();
        $doc->loadHTML($content);
      
        $images = $doc->getElementsByTagName('img');
        

        if($images->length === 0){
            return;
        }

      

        for ($i = 0; $i < count($images); $i++){
            $img = $images->item($i);
            $src = $img->getAttribute('src');
            $filename = $UPLOAD_DIR.$src;

            if(file_exists($filename)){
               unlink($filename);
            }
        }
    }
}