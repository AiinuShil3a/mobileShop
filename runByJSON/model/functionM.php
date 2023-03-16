<?php
class mobileWEBSITE{

    public function getMobile($filename)
    {
        $dataJSON = file_get_contents($filename);
        if($dataJSON){
            $decode = json_decode($dataJSON);
            return $decode;
        }else{
            include false;
        }
    }

}
?>