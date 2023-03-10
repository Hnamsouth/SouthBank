<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;

class OpenAIService
{

    public  function Completions2(string $prompt){ //, string $model, string $maxTokens
        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/completions',[
            'header'=>[
                'Authorization' => 'Bearer ' . env('API_KEY_OPENAI'),
                'Content-Type' => 'application/json'
            ],
            'json'=>[
                'pronpt'=>$prompt,
                'model'=>'text-davinci-002',
                "temperature" => 0.7,
                "max_tokens" => 100,
                "top_p" => 1,
                "frequency_penalty" => 0,
                "presence_penalty" => 0
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public  function Completions(string $prompt){ //, string $model, string $maxTokens
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer '.env("API_KEY_OPENAI"),
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
//            "model" => "text-davinci-002",
            "model" => "code-davinci-002",
            "prompt" => $prompt,
            "temperature" => 0.2,
            "max_tokens" => 64,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0
        ]));
        $response = curl_exec($ch);
        curl_close($ch);

        // Return API response
        return response()->json(json_decode($response))->original;
    }

    public function Edits(string $prompt){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/edits');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer '.env("API_KEY_OPENAI"),
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
//            "model" => "text-davinci-002",
            "model" => "code-davinci-edit-001",
            "input" => $prompt,
            "temperature" => 0.3,
            "instruction"=>"return only code",
        ]));
        $response = curl_exec($ch);
        curl_close($ch);

        // Return API response
        return response()->json(json_decode($response))->original;
    }

    public function GC(string $prompt){
        $apiKey = env("API_KEY_OPENAI");
        $url = 'https://api.openai.com/v1/completions';
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer '.$apiKey,
        ];
        $data = [
            "model" => "text-davinci-002",
            "prompt" => $prompt,
            "temperature" => 0.7,
            "max_tokens" => 100,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        curl_close($ch);

        // Return API response
        return response()->json(json_decode($response));
    }
}
