<?php
/**
 * SourceApi
 * PHP version 5
 *
 * @category Class
 * @package  TimelightAi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * timelight
 *
 * This is the timelight api.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TimelightAi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TimelightAi\ApiException;
use TimelightAi\Configuration;
use TimelightAi\HeaderSelector;
use TimelightAi\ObjectSerializer;

/**
 * SourceApi Class Doc Comment
 *
 * @category Class
 * @package  TimelightAi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SourceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1SourceListGet
     *
     * All user sources
     *
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TimelightAi\Model\SourceListDto
     */
    public function v1SourceListGet()
    {
        list($response) = $this->v1SourceListGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation v1SourceListGetWithHttpInfo
     *
     * All user sources
     *
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TimelightAi\Model\SourceListDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1SourceListGetWithHttpInfo()
    {
        $returnType = '\TimelightAi\Model\SourceListDto';
        $request = $this->v1SourceListGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TimelightAi\Model\SourceListDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1SourceListGetAsync
     *
     * All user sources
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceListGetAsync()
    {
        return $this->v1SourceListGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1SourceListGetAsyncWithHttpInfo
     *
     * All user sources
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceListGetAsyncWithHttpInfo()
    {
        $returnType = '\TimelightAi\Model\SourceListDto';
        $request = $this->v1SourceListGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1SourceListGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1SourceListGetRequest()
    {

        $resourcePath = '/v1/source/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v1SourceSourceIdDelete
     *
     * Delete a source and all linked data
     *
     * @param  float $source_id source_id (required)
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function v1SourceSourceIdDelete($source_id)
    {
        $this->v1SourceSourceIdDeleteWithHttpInfo($source_id);
    }

    /**
     * Operation v1SourceSourceIdDeleteWithHttpInfo
     *
     * Delete a source and all linked data
     *
     * @param  float $source_id (required)
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1SourceSourceIdDeleteWithHttpInfo($source_id)
    {
        $returnType = '';
        $request = $this->v1SourceSourceIdDeleteRequest($source_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation v1SourceSourceIdDeleteAsync
     *
     * Delete a source and all linked data
     *
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceSourceIdDeleteAsync($source_id)
    {
        return $this->v1SourceSourceIdDeleteAsyncWithHttpInfo($source_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1SourceSourceIdDeleteAsyncWithHttpInfo
     *
     * Delete a source and all linked data
     *
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceSourceIdDeleteAsyncWithHttpInfo($source_id)
    {
        $returnType = '';
        $request = $this->v1SourceSourceIdDeleteRequest($source_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1SourceSourceIdDelete'
     *
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1SourceSourceIdDeleteRequest($source_id)
    {
        // verify the required parameter 'source_id' is set
        if ($source_id === null || (is_array($source_id) && count($source_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $source_id when calling v1SourceSourceIdDelete'
            );
        }

        $resourcePath = '/v1/source/{sourceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($source_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sourceId' . '}',
                ObjectSerializer::toPathValue($source_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v1SourceSourceIdGroupPatch
     *
     * Update a source group
     *
     * @param  \TimelightAi\Model\SourcePatchGroupDto $source_patch_group_dto source_patch_group_dto (required)
     * @param  float $source_id source_id (required)
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TimelightAi\Model\SourceDto
     */
    public function v1SourceSourceIdGroupPatch($source_patch_group_dto, $source_id)
    {
        list($response) = $this->v1SourceSourceIdGroupPatchWithHttpInfo($source_patch_group_dto, $source_id);
        return $response;
    }

    /**
     * Operation v1SourceSourceIdGroupPatchWithHttpInfo
     *
     * Update a source group
     *
     * @param  \TimelightAi\Model\SourcePatchGroupDto $source_patch_group_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TimelightAi\Model\SourceDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1SourceSourceIdGroupPatchWithHttpInfo($source_patch_group_dto, $source_id)
    {
        $returnType = '\TimelightAi\Model\SourceDto';
        $request = $this->v1SourceSourceIdGroupPatchRequest($source_patch_group_dto, $source_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TimelightAi\Model\SourceDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1SourceSourceIdGroupPatchAsync
     *
     * Update a source group
     *
     * @param  \TimelightAi\Model\SourcePatchGroupDto $source_patch_group_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceSourceIdGroupPatchAsync($source_patch_group_dto, $source_id)
    {
        return $this->v1SourceSourceIdGroupPatchAsyncWithHttpInfo($source_patch_group_dto, $source_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1SourceSourceIdGroupPatchAsyncWithHttpInfo
     *
     * Update a source group
     *
     * @param  \TimelightAi\Model\SourcePatchGroupDto $source_patch_group_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceSourceIdGroupPatchAsyncWithHttpInfo($source_patch_group_dto, $source_id)
    {
        $returnType = '\TimelightAi\Model\SourceDto';
        $request = $this->v1SourceSourceIdGroupPatchRequest($source_patch_group_dto, $source_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1SourceSourceIdGroupPatch'
     *
     * @param  \TimelightAi\Model\SourcePatchGroupDto $source_patch_group_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1SourceSourceIdGroupPatchRequest($source_patch_group_dto, $source_id)
    {
        // verify the required parameter 'source_patch_group_dto' is set
        if ($source_patch_group_dto === null || (is_array($source_patch_group_dto) && count($source_patch_group_dto) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $source_patch_group_dto when calling v1SourceSourceIdGroupPatch'
            );
        }
        // verify the required parameter 'source_id' is set
        if ($source_id === null || (is_array($source_id) && count($source_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $source_id when calling v1SourceSourceIdGroupPatch'
            );
        }

        $resourcePath = '/v1/source/{sourceId}/group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($source_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sourceId' . '}',
                ObjectSerializer::toPathValue($source_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($source_patch_group_dto)) {
            $_tempBody = $source_patch_group_dto;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v1SourceSourceIdPatch
     *
     * Update a source
     *
     * @param  \TimelightAi\Model\SourcePatchDto $source_patch_dto source_patch_dto (required)
     * @param  float $source_id source_id (required)
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TimelightAi\Model\SourceDto
     */
    public function v1SourceSourceIdPatch($source_patch_dto, $source_id)
    {
        list($response) = $this->v1SourceSourceIdPatchWithHttpInfo($source_patch_dto, $source_id);
        return $response;
    }

    /**
     * Operation v1SourceSourceIdPatchWithHttpInfo
     *
     * Update a source
     *
     * @param  \TimelightAi\Model\SourcePatchDto $source_patch_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \TimelightAi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TimelightAi\Model\SourceDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1SourceSourceIdPatchWithHttpInfo($source_patch_dto, $source_id)
    {
        $returnType = '\TimelightAi\Model\SourceDto';
        $request = $this->v1SourceSourceIdPatchRequest($source_patch_dto, $source_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TimelightAi\Model\SourceDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1SourceSourceIdPatchAsync
     *
     * Update a source
     *
     * @param  \TimelightAi\Model\SourcePatchDto $source_patch_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceSourceIdPatchAsync($source_patch_dto, $source_id)
    {
        return $this->v1SourceSourceIdPatchAsyncWithHttpInfo($source_patch_dto, $source_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1SourceSourceIdPatchAsyncWithHttpInfo
     *
     * Update a source
     *
     * @param  \TimelightAi\Model\SourcePatchDto $source_patch_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1SourceSourceIdPatchAsyncWithHttpInfo($source_patch_dto, $source_id)
    {
        $returnType = '\TimelightAi\Model\SourceDto';
        $request = $this->v1SourceSourceIdPatchRequest($source_patch_dto, $source_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1SourceSourceIdPatch'
     *
     * @param  \TimelightAi\Model\SourcePatchDto $source_patch_dto (required)
     * @param  float $source_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1SourceSourceIdPatchRequest($source_patch_dto, $source_id)
    {
        // verify the required parameter 'source_patch_dto' is set
        if ($source_patch_dto === null || (is_array($source_patch_dto) && count($source_patch_dto) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $source_patch_dto when calling v1SourceSourceIdPatch'
            );
        }
        // verify the required parameter 'source_id' is set
        if ($source_id === null || (is_array($source_id) && count($source_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $source_id when calling v1SourceSourceIdPatch'
            );
        }

        $resourcePath = '/v1/source/{sourceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($source_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sourceId' . '}',
                ObjectSerializer::toPathValue($source_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($source_patch_dto)) {
            $_tempBody = $source_patch_dto;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
