<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPJasper\PHPJasper;

class CajaController extends Controller
{
    public function CajaReporte()
    {
        $input =  'C:\Users\25181\JaspersoftWorkspace\MyReports\Reporte-caja.jasper';
        $output = 'C:\Users\25181\JaspersoftWorkspace\MyReports';

        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => [],
            'db_connection' => [
                'driver' => 'postgres', //mysql, ....
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
                'host' => env('DB_HOST'),
                'database' => env('DB_DATABASE'),
                'port' => '5432'
            ]
        ];

        $jasper = new PHPJasper;

        $jasper->process(
            $input,
            $output,
            $options
        )->execute();

         return response()->file($output . '\Reporte-caja.pdf');
    }
}
