<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescargaController extends Controller
{
    public function index()
    {
        
            return  view('Descarga.descarga');
    
    }
    public function downloadFile($src)
    {
        if(is_file($src)){
            $finfo=finfo_open(FILEINFO_MIME_TYPE);
            $content_type = finfo_file($finfo, $src);
            finfo_close($finfo);
            $file_name = basename($src).PHP_EOL;
            $size = filesize($src);
            header("Content-Type: $content_type");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: $size");
            readfile($src);
            return true;
        }
        else{
            return false;
        }
    }

    public function descarga()
    {
        if(!$this->downloadFile(app_path()."/files/altaBaja.doc")){
            return redirect()->back();
        }
    }

    public function downloadDosFile($src)
    {
        if(is_file($src)){
            $finfo=finfo_open(FILEINFO_MIME_TYPE);
            $content_type = finfo_file($finfo, $src);
            finfo_close($finfo);
            $file_name = basename($src).PHP_EOL;
            $size = filesize($src);
            header("Content-Type: $content_type");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: $size");
            readfile($src);
            return true;
        }
        else{
            return false;
        }
    }
    
    public function downloadDos()
    {
        if(!$this->downloadDosFile(app_path()."/files/novedad.docx")){
            return redirect()->back();
        }
    }

    public function downloadTresFile($src)
    {
        if(is_file($src)){
            $finfo=finfo_open(FILEINFO_MIME_TYPE);
            $content_type = finfo_file($finfo, $src);
            finfo_close($finfo);
            $file_name = basename($src).PHP_EOL;
            $size = filesize($src);
            header("Content-Type: $content_type");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: $size");
            readfile($src);
            return true;
        }
        else{
            return false;
        }
    }

    public function downloadTres()
    {
        if(!$this->downloadTresFile(app_path()."/files/otraNovedad.docx")){
            return redirect()->back();
        }
    }
}

