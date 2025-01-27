<?php 
if(!function_exists('alert')){
    function alert(){
        $data = Session::get('alert');
        $typeTemp='';$mssg='';$mssgBox='';
        $type=(isset($data['type']) ? $data['type'] : '');
        $mssg=(isset($data['mssg']) ? $data['mssg'] : '');
        $burl=(isset($data['burl']) ? $data['burl'] : '#');
        
        echo "<input type='hidden' id='alert-type' value='".$type."' data-mssg='".$mssg."' data-burl='".$burl."'>";
    }
}
?>
