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
        $data = [
            // "id"=> "18c5c32d4762488dbe6ef19623a86302",
            // "contactId"=> "86fecc3b94ca4f53aff505c0d6ed762f",
            // "contact"=> [
            //     "id"=> "86fecc3b94ca4f53aff505c0d6ed762f",
            //     "href"=> "",
            //     "msisdn"=> 60122263479,
            //     "displayName"=> "Najhan",
            //     "firstName"=> "",
            //     "lastName"=> "",
            //     "customDetails"=> null,
            //     "attributes"=> null,
            //     "createdDatetime"=> "2021-07-28T08:49:38Z",
            //     "updatedDatetime"=> "2021-07-28T08:49:38Z"
            // ],
            // "channels"=> [
                
            //     "id"=> "fe33252e89774ebbafa6409b5c3a4c9e",
            //     "name"=> "Sandbox",
            //     "platformId"=> "whatsapp",
            //     "status"=> "active",
            //     "createdDatetime"=> "2019-06-05T11:44:25Z",
            //     "updatedDatetime"=> "2019-12-11T16:47:16Z"
                
            // ],
            // "status"=> "active",
            // "createdDatetime"=> "2021-07-28T08:49:38Z",
            // "updatedDatetime"=> "2021-08-03T06:47:55.041245957Z",
            // "lastReceivedDatetime"=> "2021-08-03T06:47:55.036704276Z",
            // "lastUsedChannelId"=> "fe33252e89774ebbafa6409b5c3a4c9e",
            // "messages"=> [
            //     "totalCount"=> 114,
            //     "href"=> "https://whatsapp-sandbox.messagebird.com//v1/conversations/18c5c32d4762488dbe6ef19623a86302/messages",
            //     "lastMessageId"=> "9504eb26f8a54fab9aea384ded811072"
            // ]
        ];

        $data = json_encode($data);

        $headers = ["Authorization" => "AccessKey AH6T3UbqhPur94egxFqKmjsOk", "Accept" => "application/json"];

        $client = new \GuzzleHttp\Client();
        #$response = $client->request('GET', $url, array('headers' => $headers, 'body' => $data));
        // $response = $client->request('GET', $url, array('headers' => $headers));

        $response = Http::withHeaders([
            'Authorization' => "AccessKey AH6T3UbqhPur94egxFqKmjsOk",
            "Accept" => "application/json"
        ])->get($url);

        $data = $response->json();
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // die();

        return view('perbualans', [
            'perbualans' => $perbualans,
            'data' => $data
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
        foreach ($params as $key=>$value) {
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
}
