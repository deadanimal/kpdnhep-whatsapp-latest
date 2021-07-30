<?php

namespace App\Http\Controllers;

use App\Models\Perbualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use NotificationChannels\Messagebird\MessagebirdChannel;
use NotificationChannels\Messagebird\MessagebirdMessage;
use Illuminate\Notifications\Notification;

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

        return view('perbualans', [
            'perbualans' => $perbualans,
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

        // require('autoload.php');

        $messageBird = new \MessageBird\Client('AH6T3UbqhPur94egxFqKmjsOk'); // Set your own API access key here.

        // Enable the whatsapp sandbox feature
        $messageBird = new \MessageBird\Client(
           'AH6T3UbqhPur94egxFqKmjsOk',
           null,
           [\MessageBird\Client::ENABLE_CONVERSATIONSAPI_WHATSAPP_SANDBOX]
        );

        $conversationId = '2e15efafec384e1c82e9842075e87beb';

        $content = new \MessageBird\Objects\Conversation\Content();
        $content->text = $request->text;

        $message = new \MessageBird\Objects\Conversation\Message();
        $message->channelId = 'fe33252e89774ebbafa6409b5c3a4c9e';
        $message->type = 'text';
        $message->content = $content;

        try {
            $conversation = $messageBird->conversationMessages->create($conversationId, $message);
            var_dump($conversation);
        } catch (\Exception $e) {
            echo sprintf("%s: %s", get_class($e), $e->getMessage());
        }
    }
}
