<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPJasper\PHPJasper;

class ReportesController extends Controller
{
    public function ReporteProductos(){
        
        $input =  'C:\Users\25181\JaspersoftWorkspace\MyReports\Ticket.jasper';
        $output = 'C:\Users\25181\JaspersoftWorkspace\MyReports';

        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            
            'db_connection' => [
                'driver' => 'postgres', 
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
                'host' => env('DB_HOST'),
                'database' => env('DB_DATABASE'),
                'port' => env('DB_PORT')
            ]
        ];

        $jasper = new PHPJasper;

        $jasper->process(
            $input,
            $output,
            $options
        )->execute();

        return response()->file($output . '\Ticket.pdf');
    }

  
}
