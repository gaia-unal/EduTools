<?php


namespace App\Http\Controllers;

use App\Contenido;
use App\Libro;
use App\Pregunta;
use App\Html;
use Chumper\Zipper\Zipper;


class ExportController extends Controller
{
    public function book($id)
    {
        $html = Html::find(1);
        $encabezado = $html -> header;
        $pieP = $html -> footer;

        $libro = Libro::find($id);
        $content = $libro->contenido;

        $archivo = $encabezado.$content.$pieP;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/html/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$archivo);
        fclose($fp);

        //$public_dir = '../../www/edutools';
        $public_dir = public_path();
        $files = 'exports/html/';

        $zipper = new Zipper;
        $zipper -> make('HTML_libro.zip') -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath = $public_dir.'/'."HTML_libro.zip";

        if(file_exists($filetopath)){
            return response()->download($filetopath,"HTML_libro.zip",$headers);
        }
        return ['status'=>'file does not exist'];
    }

    public function contenido($id)
    {
        $html = Html::find(1);
        $encabezado = $html -> header;
        $pieP = $html -> footer;

        $contenido = Contenido::find($id);
        $content = $contenido->contenido;

        $archivo = $encabezado.$content.$pieP;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/html/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$archivo);
        fclose($fp);

        //$public_dir = '../../www/edutools';
        $public_dir = public_path();
        $files = 'exports/html/';

        $zipper = new Zipper;
        $zipper -> make("HTML_contenido.zip") -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath = $public_dir.'/'."HTML_contenido.zip";

        if(file_exists($filetopath)){
            return response()->download($filetopath,"HTML_contenido.zip",$headers);
        }
        return ['status'=>'file does not exist'];
    }

    public function questionario($id)
    {
        $html = Html::find(1);
        $encabezado = $html -> header;
        $pieP = $html -> footer;

        $pregunta = Pregunta::find($id);
        $content = $pregunta->contenido;

        $archivo = $encabezado.$content.$pieP;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/html/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$archivo);
        fclose($fp);

        //$public_dir = '../../www/edutools';
        $public_dir = public_path();
        $files = 'exports/html/';

        $zipper = new Zipper;
        $zipper -> make("HTML_cuestionario.zip") -> add($files)->close();

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath = $public_dir.'/'."HTML_cuestionario.zip";

        if(file_exists($filetopath)){
            return response()->download($filetopath,"HTML_cuestionario.zip",$headers);
        }
        return ['status'=>'file does not exist'];
    }
    public function questionarioSCORM($id){
        $html = Html::find(2);
        $encabezado = $html -> header;
        $pieP = $html -> footer;

        $pregunta = Pregunta::find($id);
        $content = $pregunta->contenido;

        $archivo = $encabezado.$content.$pieP;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/scorm/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$archivo);
        fclose($fp);

        //$public_dir = '../../www/edutools';
        $public_dir = public_path();
        $files = 'exports/scorm/';

        $zipper = new Zipper;
        $zipper -> make("SCORM_cuestionario.zip") -> add($files)->close();

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath = $public_dir.'/'."SCORM_cuestionario.zip";

        if(file_exists($filetopath)){
            return response()->download($filetopath,"SCORM_cuestionario.zip",$headers);
        }
        return ['status'=>'file does not exist'];
    }
}
