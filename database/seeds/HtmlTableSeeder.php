<?php

use Illuminate\Database\Seeder;

class HtmlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $header = "<!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset='UTF-8'>
                        <title>Objeto</title>
                    </head>
                            <link rel='stylesheet' href='css/style.css'>
                            <script type='text/javascript' src='plugin/jquery.js'></script>
                            <script type='text/javascript' src='plugin/turn.js'></script>
	          <script type='text/javascript' src='plugin/validaQuestionario.js'></script>
                    
                    <body class='cuerpo' >";
        $footer = "<script>
                        $('#flipbook').turn({
                                width: 800,
                                height: 600,
                                autoCenter: true
                            });
                    </script>
                    </body>
                    
                    </html>";


        DB::table('htmls')->insert([
            "header" => $header,
            "footer" => $footer,

        ]);
    }
}
