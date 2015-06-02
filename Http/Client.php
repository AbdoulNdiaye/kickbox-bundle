<?php

/*
 * This file is part of the Kickbox Bundle.
 *
 * (c) Abdoul Ndiaye <abdoul.nd@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Andi\KickBoxBundle\Http;

use GuzzleHttp\Client as HttpClient;

/**
 * The Kickbox http client that verify email addresses.
 *
 * @author Abdoul Ndiaye <abdoul.nd@gmail.com>
 */
class Client
{
    /**
     * @var string
     */
    protected $endPoint;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Construct.
     *
     * @param string $endPoint A KickBox API endpoint.
     * @param string $token    An Api token generated in kickbox.io.
     */
    public function __construct($endPoint, $token)
    {
        $this->endPoint = $endPoint;
        $this->token    = $token;
        $this->client   = new HttpClient();
    }

    /**
     * Call the Api to validate one specific email address.
     *
     * @param string $email The email address to be verified
     *
     * @param int $timeout  Maximum time, in milliseconds, for the API to complete a verification request.
     *
     * @return Response     A Kickbox response instance.
     */
    public function verify($email, $timeout = 6000)
    {

    }
}
