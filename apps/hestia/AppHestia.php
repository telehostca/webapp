<?php
class AppHestia
{
    public function getErrorMessageFromTheCode($code)
    {
        $code = (int) $code;
        $errors = [
            'Command has been successfuly performed',
            'Not enough arguments provided',
            'Object or argument is not valid',
            'Object doesn\'t exist',
            'Object already exists',
            'Object is suspended',
            'Object is already unsuspended',
            'Object can\'t be deleted because is used by the other object',
            'Object cannot be created because of hosting package limits',
            'Wrong password',
            'Object cannot be accessed be the user',
            'Subsystem is disabled',
            'Configuration is broken',
            'Not enough disk space to complete the action',
            'Server is to busy to complete the action',
            'Connection failed. Host is unreachable',
            'FTP server is not responding',
            'Database server is not responding',
            'RRDtool failed to update the database',
            'Update operation failed',
            'Service restart failed',
        ];

        return $errors[$code] ?? 'Unknown Error Code!';
    }
    public function hostBillingServer($data)
    {
        if (
            !empty($data['selected_type']) &&
            $data['selected_type'] === 'hestia'
        ) {
            $data['input_require_for_this_server_type'] = [
                'host' => [
                    'label' => 'Host Name',
                ],
                'port' => [
                    'label' => 'Port',
                ],
                'username' => [
                    'label' => 'Username',
                ],
                'password' => [
                    'label' => 'Password',
                ],
            ];
        }
    }

    public function hostBillingServers($data)
    {
        $data['buttons_for_server_type']['hestia'] = [
            [
                'name' => 'User Details',
                'link' => 'hestia/app/user-details',
            ],
        ];
    }

    public function hostBillingOrder($data)
    {
        if ($data['server']->type === 'hestia') {
            $data['form_fields'] = [
                'first_name' => [
                    'label' => 'First Name',
                ],
                'last_name' => [
                    'label' => 'Last Name',
                ],
                'email' => [
                    'label' => 'Email',
                ],
                'domain' => [
                    'label' => 'Domain Name',
                ],
                'username' => [
                    'label' => 'Username',
                ],
                'password' => [
                    'label' => 'Password',
                ],
                'plan' => [
                    'label' => 'Package',
                ],
            ];
        }
    }

    public function hostBillingOrderRunAutomationCreateAccount($data)
    {
        $server = $data['server'];

        if ($server->type !== 'hestia') {
            return;
        }
        $validation = $data['validation'];
        $automation_data = $data['data'];
        $order = $data['order'];

        $validator = $validation->make($automation_data, [
            'domain' => 'required|string|max:150',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'username' => 'required|string|max:10',
            'plan' => 'required|string|max:150',
        ]);

        if ($validator->fails()) {
            $data['response'] = [
                'success' => false,
                'errors' => $validator->errors(),
            ];
            return;
        }

        try {
            // Server credentials
            $vst_hostname = $server->host;
            $vst_username = $server->username;
            $vst_password = $server->password;
            $vst_returncode = 'yes';
            $vst_command = 'v-add-user';

            // New Account
            $username = $automation_data['username'];
            $password = $automation_data['password'];
            $email = $automation_data['email'];
            $package = $automation_data['plan'] ?? 'default';
            $fist_name = $automation_data['first_name'];
            $last_name = $automation_data['last_name'];

            // Prepare POST query
            $postvars = [
                'user' => $vst_username,
                'password' => $vst_password,
                'returncode' => $vst_returncode,
                'cmd' => $vst_command,
                'arg1' => $username,
                'arg2' => $password,
                'arg3' => $email,
                'arg4' => $package,
                'arg5' => $fist_name,
                'arg6' => $last_name,
            ];

            $postdata = http_build_query($postvars);
            $curl = curl_init();
            curl_setopt(
                $curl,
                CURLOPT_URL,
                'https://' . $vst_hostname . ':' . $server->port . '/api/'
            );
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
            $answer = curl_exec($curl);

            if ($answer == 0) {
                $vst_command = 'v-add-domain';

                // New Domain
                $username = $automation_data['username'];
                $domain = $automation_data['domain'];

                // Prepare POST query
                $postvars = [
                    'user' => $vst_username,
                    'password' => $vst_password,
                    'returncode' => $vst_returncode,
                    'cmd' => $vst_command,
                    'arg1' => $username,
                    'arg2' => $domain,
                ];
                $postdata = http_build_query($postvars);
                $curl = curl_init();
                curl_setopt(
                    $curl,
                    CURLOPT_URL,
                    'https://' . $vst_hostname . ':' . $server->port . '/api/'
                );
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
                $answer = curl_exec($curl);

                // Check result
                if ($answer == 0) {
                    $order->automation_run = 1;
                    $order->domain = $automation_data['domain'];
                    $order->username = $automation_data['username'];
                    $order->password = $automation_data['password'];

                    $order->login_type = 'hestia';

                    $order->save();

                    $data['response'] = [
                        'success' => true,
                    ];
                    return;
                }

                $data['response'] = [
                    'success' => false,
                    'errors' => [
                        'api' =>
                            'Error creating domain- Query returned error: ' .
                            $this->getErrorMessageFromTheCode($answer),
                    ],
                ];
                return;
            }

            $data['response'] = [
                'success' => false,
                'errors' => [
                    'api' =>
                        'Query returned error: ' .
                        $this->getErrorMessageFromTheCode($answer),
                ],
            ];
            return;
        } catch (\Exception $exception) {
            $data['response'] = [
                'success' => false,
                'errors' => [
                    'api' => $exception->getMessage(),
                ],
            ];
            return;
        }
    }
}
