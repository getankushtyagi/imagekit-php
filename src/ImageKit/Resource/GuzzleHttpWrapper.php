<?php

namespace ImageKit\Resource;

use Exception;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;


/**
 *
 */

/**
 *
 */
class GuzzleHttpWrapper implements HttpRequest
{
    const DEFAULT_ERROR_CODE = 500;
    protected $client;
    protected $datas = [];
    protected $headers = [];
    protected $uri;
    protected $serviceId;

    /**
     * @param $client
     */

    /**
     * @param $client
     */
    public function __construct($client)
    {
        $this->client = $client;
        $this->serviceId = $this->gen_uuid();
    }

    /**
     * @return string
     */
    public function gen_uuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    /**
     * @return array
     */

    /**
     * @return array
     */
    public function getDatas()
    {
        return $this->datas;
    }

    /**
     * @param array $datas
     * @return mixed|void
     */
    public function setDatas(array $datas)
    {
        $this->datas = array_filter($datas, function ($var) {
            if ($var === '' || $var === null || is_array($var) && count($var) === 0) {
                return false;
            }

            return true;
        });
    }

    /**
     * @return Response|mixed
     */

    /**
     * @param array $headers
     * @return mixed|void
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return Response
     */

    /**
     * @return Response
     */
    public function get()
    {
        try {
            return $this->client->request('GET', $this->getUri(), $this->getOptions('query'));
        } catch (RequestException $e) {
            return $this->handleRequestException($e);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    /**
     * @return Response
     */

    /**
     * @return mixed
     */
    protected function getUri()
    {
        return $this->uri;
    }

    /**
     * @return Response|mixed
     */

    /**
     * @param $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return Response
     */

    /**
     * @param $dataType
     * @return array
     */
    protected function getOptions($dataType)
    {
        return [
            $dataType => $this->datas,
            'headers' => $this->headers,
        ];
    }

    /**
     * @return Response
     */

    /**
     * @param RequestException $e
     * @return Response
     */
    protected function handleRequestException(RequestException $e)
    {
        $status = $e->getCode();
        $headers = [];
        $body = '';
        if ($e->hasResponse()) {
            $body = (string)$e->getResponse()->getBody();
        }

        return new Response($status, $headers, $body);
    }

    /**
     * @param Exception $e
     * @return Response
     */
    protected function handleException(Exception $e)
    {
        $status = $e->getCode();
        $headers = [];
        $body = $e->getMessage();

        return new Response($status, $headers, $body);
    }

    /**
     * @return mixed
     */

    /**
     * @return Response
     */
    public function delete()
    {
        try {
            return $this->client->request('DELETE', $this->getUri(), $this->getOptions('query'));
        } catch (RequestException $e) {
            return $this->handleRequestException($e);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    /**
     * @param $uri
     * @return mixed|void
     */

    /**
     * @return Response
     */
    public function postMultipart()
    {
        try {
            $options = [
                'headers' => $this->headers,
                'multipart' => self::getMultipartData($this->datas)
            ];

            return $this->client->request('POST', $this->getUri(), $options);
        } catch (RequestException $e) {
            return $this->handleRequestException($e);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    /**
     * @param $dataType
     * @return array
     */

    /**
     * @param $data
     * @param false $files
     * @return array
     */
    public static function getMultipartData($data, $files = false)
    {
        $multipartData = [];

        foreach ($data as $key => $value) {
            if (is_bool($value)) {
                $data[$key] = json_encode($value);
            }
        }

        foreach ($data as $key => $value) {
            if (!is_array($value)) {
                $multipartData[] = ['name' => $key, 'contents' => $value];
                continue;
            }

            foreach ($value as $multiKey => $multiValue) {
                $multiName = $key . '[' . $multiKey . ']' . (is_array($multiValue) ? '[' . key($multiValue) . ']' : '') . '';
                $multipartData[] = ['name' => $multiName, 'contents' => (is_array($multiValue) ? reset($multiValue) : $multiValue)];
            }
        }

        return $multipartData;
    }

    /**
     * @param RequestException $e
     * @return Response
     */

    /**
     * @return Response
     */
    public function post()
    {
        try {
            $options = [
                'headers' => $this->headers,
                'form_params' => $this->datas
            ];

            return $this->client->request('POST', $this->getUri(), $options);
        } catch (RequestException $e) {
            return $this->handleRequestException($e);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    /**
     * @param Exception $e
     * @return Response
     */

    /**
     * @return Response
     */
    public function rawPost()
    {
        try {
            $options = [
                'body' => json_encode($this->datas),
                'headers' => ['Content-Type' => 'application/json']
            ];

            return $this->client->request('POST', $this->getUri(), $options);
        } catch (RequestException $e) {
            return $this->handleRequestException($e);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    /**
     * @return string
     */

    /**
     * @return Response
     */
    public function patch()
    {
        try {
            $options = [
                'headers' => $this->headers,
                'json' => $this->datas
            ];
            return $this->client->request('PATCH', $this->getUri(), $options);
        } catch (RequestException $e) {
            return $this->handleRequestException($e);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    /**
     * @param $data
     * @param false $files
     * @return array
     */

    /**
     * @throws UriNotSetException
     */
    protected function checkUri()
    {
        if (is_null($this->getUri())) {
            throw new UriNotSetException('Uri should be set.', self::DEFAULT_ERROR_CODE);
        }
    }
}
