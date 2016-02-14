<?php
/**
 * Created by PhpStorm.
 * User: linh
 * Date: 2/13/16
 * Time: 4:54 PM
 */

namespace App;

use URL;
use SparkPost\SparkPost;

use GuzzleHttp\Client;
use Ivory\HttpAdapter\Guzzle6HttpAdapter;

class Mailing
{
    public function sendRequest($employee, $employer, $job) {
        $httpAdapter = new Guzzle6HttpAdapter(new Client());
        $sparky = new SparkPost($httpAdapter, ['key'=>env('SPARKPOST_API_KEY','9c969b8d23b86e7ed22213ddf5ea691407da5ccf')]);

        $name = $employer -> name;
        $email = $employer -> email;

        $acceptUrl = URL::to('/applicants');
        $profileUrl = URL::to('/user/'.$employee->id);
        $hostUrl = URL::to('/');

        try {
            // Build your email and send it!
            $results = $sparky->transmission->send([
                'from'=>'RocketJobs <rocketjobs@sparkpostbox.com>',
                'html'=>'
            <html>
                <body>
                    <h1>Hey {{name}}, </h1>
                    <p>Someone accepted your job offer</p>

                    <p>View this person\'s profile <a href="{{profileUrl}}">here</a> </p>
                    <p>To accept or decline the request, go <a href="{{acceptUrl}}">here</a> </p>
                    <br/>
                    <p>Your friend at <a href="{{hostUrl}}">RocketJobs</a> </p>
                </body>
            </html>',
                'text'=>'{{name}}, someone accepted your job offer',
                'substitutionData'=>[
                    'name'=>$name,
                    'profileUrl' => $profileUrl,
                    'acceptUrl' => $acceptUrl,
                    'hostUrl' => $hostUrl
                ],
                'subject'=>'Job offer accepted!',
                'recipients'=>[
                    [
                        'address'=>[
                            'name'=> $name,
                            'email'=> $email,

                        ]
                    ]
                ]
            ]);
            echo 'Woohoo! You just sent your first mailing!';
        } catch (\Exception $err) {
            echo 'Whoops! Something went wrong';
            var_dump($err);
        }
    }

    public function sendApprovedOrDenied($employee, $employer, $job, $status) {
        $httpAdapter = new Guzzle6HttpAdapter(new Client());
        $sparky = new SparkPost($httpAdapter, ['key'=>env('SPARKPOST_API_KEY','9c969b8d23b86e7ed22213ddf5ea691407da5ccf')]);

        $name = $employee -> name;
        $email = $employee -> email;

        $jobUrl = URL::to('/job/'.$job->id);
        $hostUrl = URL::to('/');

        try {
            // Build your email and send it!
            $results = $sparky->transmission->send([
                'from'=>'RocketJobs <rocketjobs@sparkpostbox.com>',
                'html'=>'
            <html>
                <body>
                    <h1>Hi {{name}}, </h1>
                    <p>Your request was <strong>{{status}}</strong></p>
                    <p>View the details of this job <a href="{{jobUrl}}">here</a> </p>
                    <br/>
                    <p>Your friend at <a href="{{hostUrl}}">RocketJobs</a> </p>
                </body>
            </html>',
                'text'=>'{{name}}, someone accepted your job offer',
                'substitutionData'=>[
                    'name'=>$name,
                    'status' => $status,
                    'jobUrl' => $jobUrl,
                    'hostUrl' => $hostUrl
                ],
                'subject'=>'Job offer accepted!',
                'recipients'=>[
                    [
                        'address'=>[
                            'name'=> $name,
                            'email'=> $email,

                        ]
                    ]
                ]
            ]);
            echo 'Woohoo! You just sent your first mailing!';
        } catch (\Exception $err) {
            echo 'Whoops! Something went wrong';
            var_dump($err);
        }
    }


}
