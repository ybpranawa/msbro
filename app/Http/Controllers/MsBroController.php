<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MsBroController extends Controller
{
    public function home()
    {
        $client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'http://ubuntuserver140412-helloworld-3p6ikn3x.srv.ravcloud.com:8080',
		    // You can set any number of default request options.
		    'timeout'  => 2.0,
		]);
        if($client)
        {
            $res = $client->request('GET', '/');
            //echo $res->getStatusCode();
            //echo $res->getHeader('content-type');
            $a = $res->getBody();
            $a = json_decode($a);
            $data['lagu'] = $a;

            if (Auth::check()) {
                // $request->user() returns an instance of the authenticated user...
                $link = "/list/" . Auth::user()->username;
                $res = $client->request('GET', "$link");
                //echo $res->getStatusCode();
                //echo $res->getHeader('content-type');
                $a = $res->getBody();
                $a = json_decode($a);
                $data['list'] = $a;
            }

            return view('home', $data);
        }
        else
        {
            return view('home');
        }
        
    }

    public function upload(Request $request)
    {
    	
    	$input = $request->all();
    	$file = $input['lagu'];
    	$path = $input['pathlagu'];
        $nama = Input::file('lagu')->getClientOriginalName();

    	$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'http://ubuntuserver140412-helloworld-3p6ikn3x.srv.ravcloud.com:8080',
		    // You can set any number of default request options.
		    'timeout'  => 2.0,
		]);
        $res = $client->request('POST', '/upload', [
            'multipart' => [
                [
                    'name'     => 'file',
                    'filename' => "$nama",
                    'contents' => fopen("$file", 'r')
                ]
            ]
        ]);
    	return view('home');
    	
    }

    public function privupload(Request $request)
    {
        
        $input = $request->all();
        $file = $input['lagu'];
        $path = $input['pathlagu'];
        $user = $input['user'];
        $nama = Input::file('lagu')->getClientOriginalName();
        $link = "/upload" . $user;

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://ubuntuserver140412-helloworld-3p6ikn3x.srv.ravcloud.com:8080',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
                $res = $client->request('POST', "$link", [
            'multipart' => [
                [
                    'name'     => 'file',
                    'filename' => "$nama",
                    'contents' => fopen("$file", 'r')
                ]
            ]
        ]);
        return view('home');
        
    }

    public function play($lagu){
        /*$client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://ubuntuserver140412-helloworld-3p6ikn3x.srv.ravcloud.com:8080/',
            // You can set any number of default request options.
            //'timeout'  => 2.0,
        ]);*/
        //echo $lagu;
        /*$res = $client->request('GET', "$lagu");*/
        //echo $res->getStatusCode();
        //var_dump($res->getHeader('content-type'));
        //$a = $res->getBody();
        //var_dump($a);
        $base = 'http://ubuntuserver140412-helloworld-3p6ikn3x.srv.ravcloud.com:8080/';
        $data['link'] = $base . $lagu;
        $data['judul'] = $lagu;
        return view('play', $data);
    }
}