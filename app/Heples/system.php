<?php
function uploadFile($nameFolder,$file){
    $namefile = time().'_'.$file->getClientOriginalName();
    return $file->storeAS($nameFolder,$namefile,'public');
}