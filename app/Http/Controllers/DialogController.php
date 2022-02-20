<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DialogController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->all();

        if( $data['queryResult'] ) {
            return [
                "fulfillmentMessages" => [
                    [
                        "text" =>
                            [
                                "text" => [
                                    $data['queryResult']['queryText'],
                                    '- resposta do servidor'
                                ]
                            ]
                    ]
                ]
            ];
        }

        // return Carbon::parse('2020-08-20T23:59:59');
        // https://portalbrasil.net/jogodobicho/wp-json/wp/v2/search
        // https://portalbrasil.net/jogodobicho/wp-json/wp/v2/posts/?orderby=date&order=desc&after=2020-08-21T00:00:00&before=2020-08-22T00:00:00

        $response = Http::get("https://portalbrasil.net/jogodobicho/wp-json/wp/v2/posts/", [
            'orderby'    => 'date',
            'order'      => 'desc',
            'after'      => '2020-08-19T00:00:00',
            'before'     => '2020-08-20T23:59:59',
        ]);
        $response->body();

        // return $response;

        // ['content']['rendered'];
        return $response;



    }


    public function index()
    {


    }
}
