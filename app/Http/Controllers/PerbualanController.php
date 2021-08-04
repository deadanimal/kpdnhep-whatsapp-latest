<?php

namespace App\Http\Controllers;

use App\Models\Perbualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class PerbualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $perbualans = Perbualan::all();

        $url = "https://whatsapp-sandbox.messagebird.com/v1/conversations/18c5c32d4762488dbe6ef19623a86302/messages";


        $client = new \GuzzleHttp\Client();

        $response = Http::withHeaders([
            'Authorization' => "AccessKey AH6T3UbqhPur94egxFqKmjsOk",
            "Accept" => "application/json"
        ])->get($url);

        $data = $response->json();

        extract($data);
        extract($items);
        $arrayLength = count($items);
        $i = 0;
        $try = array();
        $jenis = array();
        $campuq = array();
        while ($i < $arrayLength) {
            extract($items[$i]);
            $jenis[] = $direction;
            extract($content);
            $try[] = $text;
            // echo "$text\n";
            $i++;
        }

        // print_r($try);
        // extract($items[0]);
        // extract($content);
        // echo "$text";
        // dd($data);

        return view('perbualans', [
            'perbualans' => $perbualans,
            'data' => $data,
            'try' => $try,
            'jenis' => $jenis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perbualan  $perbualan
     * @return \Illuminate\Http\Response
     */
    public function show(Perbualan $perbualan)
    {
        //
        return view('perbualans', [
            'perbualan' => $perbualan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perbualan  $perbualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perbualan $perbualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perbualan  $perbualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perbualan $perbualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perbualan  $perbualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perbualan $perbualan)
    {
        //
    }

    // whatsapp api
    public function message(Request $request)
    {


        // send message

        // $url = "https://conversations.messagebird.com/v1/conversations/06fe881cbcee432c89a2c7c5e1f05d71/messages";

        // $data_sent = [
        //     "type" =>  "text",
        //     "content" => [
        //         "text" => "Najhan hensem"
        //     ]];
        $params = [
            "najhan",
            "123",
            "new text message",
            "alamat rumah"
        ];
        $array = [];
        foreach ($params as $key => $value) {
            array_push($array, (object) ['default' => $value]);
        }
        // $params = json_encode($array);

        $url = "https://conversations.messagebird.com/v1/conversations/start";
        $data = [
            "to" => "60122263479",
            "type" => "hsm",
            "channelId" => "fe33252e89774ebbafa6409b5c3a4c9e",
            "content" => [
                "hsm" => [
                    "namespace" => "20822e06_3275_43d0_8be8_36da1c0daeea",
                    "templateName" => "support",
                    "language" => [
                        "policy" => "deterministic",
                        "code" => "en"
                    ],
                    // "params" => [
                    //     "default" => "najhan",
                    //     "default" => "123",
                    //     "default" => "new text message",
                    //     "default" => "alamat rumah"
                    // ]
                    "params" => $array
                ]
            ]
        ];

        $data = json_encode($data);
        // dd($data);

        $headers = ["Authorization" => "AccessKey AH6T3UbqhPur94egxFqKmjsOk", "Accept" => "application/json"];

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, array('headers' => $headers, 'body' => $data));

        $data = $response->getBody();

        return view('perbualans');
    }

    public function hantaq(Request $request)
    {
        $testsat = $request->testsat;
        $url = "https://conversations.messagebird.com/v1/conversations/2e15efafec384e1c82e9842075e87beb/messages";
        $data = [
            "type" => "text",
            "content" => [
                "text" => $testsat,
            ]
        ];

        $data = json_encode($data);
        // dd($data);

        $headers = ["Authorization" => "AccessKey AH6T3UbqhPur94egxFqKmjsOk", "Accept" => "application/json"];

        $response = Http::withHeaders([
            "Authorization" => "AccessKey AH6T3UbqhPur94egxFqKmjsOk", 
            "Accept" => "application/json"
        ])->post($url, [
            "type" => "text",
            "content" => [
                "text" => 'lol',
            ]
        ]);#$client->request('POST', $url, array('headers' => $headers, 'body' => $data));
        
        // dd($response);
        $data = $response->getBody();

        return view('perbualans');
    }

    public function tingting(Request $request){
        $url = "https://conversations.messagebird.com/v1/send";
        $testsat = $request->testsat;
        $response = Http::withHeaders([
            "Authorization" => "AccessKey AH6T3UbqhPur94egxFqKmjsOk", 
            "Accept" => "application/json"
        ])->post($url, [
            "to"=>"+60122263479", 
            "from"=>"fe33252e89774ebbafa6409b5c3a4c9e",
            "type" => "text",
            "content" => [
                "text" => $testsat,
            ]
        ]);
        $data = $response->json();
        // dd($data);

        $url = "https://whatsapp-sandbox.messagebird.com/v1/conversations/18c5c32d4762488dbe6ef19623a86302/messages";


        $client = new \GuzzleHttp\Client();

        $response = Http::withHeaders([
            'Authorization' => "AccessKey AH6T3UbqhPur94egxFqKmjsOk",
            "Accept" => "application/json"
        ])->get($url);

        $data = $response->json();

        extract($data);
        extract($items);
        $arrayLength = count($items);
        $i = 0;
        $try = array();
        $jenis = array();
        $campuq = array();
        while ($i < $arrayLength) {
            extract($items[$i]);
            $jenis[] = $direction;
            extract($content);
            $try[] = $text;
            // echo "$text\n";
            $i++;
        }

        return view('perbualans', [
            'data' => $data,
            'try' => $try,
            'jenis' => $jenis,
        ]);
    }
}
