<?php
class mobileWEBSITE{

    public function getMobile()
    {
        $filename = 'model/data.json';
        $dataJSON = file_get_contents($filename);

        if($dataJSON){
            $decode = json_decode($dataJSON);
            return $decode;
        }else{
            include false;
        }
    }

    public function getMobileDetail()
    {
        $filename = '../model/data.json';
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