<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

authenticate_admin();

$action = route(2);

switch ($action) {
    case 'user-details':
        $id = route(3, false);
        if ($id) {
            $server = HostingServer::find($id);
            if ($server && $server->type === 'hestia') {
                $host = $server->host;
                $username = $server->username;
                $password = $server->password;

                $postvars = [
                    'user' => $username,
                    'password' => $password,
                    'cmd' => 'v-list-user',
                    'arg1' => $username,
                    'arg2' => 'json',
                ];

                ray('https://' . $host . ':' . $server->port . '/api/');
                $postdata = http_build_query($postvars);
                $curl = curl_init();
                curl_setopt(
                    $curl,
                    CURLOPT_URL,
                    'https://' . $host . ':' . $server->port . '/api/'
                );
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
                $answer = curl_exec($curl);
                $message = '';

                // Parse JSON output
                $data = json_decode($answer, true);

                if(empty($data))
                {
                    //Check if the answer is a string
                    if(is_string($answer))
                    {
                        $message = $answer;
                    }
                    else
                    {
                        $message = 'Invalid response from server';
                    }
                }

                \view('app_wrapper', [
                    'include' => 'user_details', # This is the template file without extension inside views folder
                    'server' => $server,
                    'data' => $data,
                    'message' => $message,
                ]);
            }
        }
        break;

    default:
        abort(404);
        break;
}
