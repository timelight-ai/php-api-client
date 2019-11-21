# TimelightAi\UserApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UserLoginPost**](UserApi.md#v1UserLoginPost) | **POST** /v1/user/login | Log the user in
[**v1UserMeGet**](UserApi.md#v1UserMeGet) | **GET** /v1/user/me | Retrieve current user information
[**v1UserRegisterDemoPost**](UserApi.md#v1UserRegisterDemoPost) | **POST** /v1/user/register-demo | 


# **v1UserLoginPost**
> \TimelightAi\Model\LoginResponseDto v1UserLoginPost($login_dto)

Log the user in

This endpoints returns the jwt and sets a cookie with the same jwt.      This way you can use it from both an api and a browser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TimelightAi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_dto = new \TimelightAi\Model\LoginDto(); // \TimelightAi\Model\LoginDto | 

try {
    $result = $apiInstance->v1UserLoginPost($login_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UserLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_dto** | [**\TimelightAi\Model\LoginDto**](../Model/LoginDto.md)|  |

### Return type

[**\TimelightAi\Model\LoginResponseDto**](../Model/LoginResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserMeGet**
> \TimelightAi\Model\UserDto v1UserMeGet()

Retrieve current user information

Must be authenticated to call this endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1UserMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UserMeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TimelightAi\Model\UserDto**](../Model/UserDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserRegisterDemoPost**
> \TimelightAi\Model\LoginResponseDto v1UserRegisterDemoPost($request_demo_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TimelightAi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_demo_dto = new \TimelightAi\Model\RequestDemoDto(); // \TimelightAi\Model\RequestDemoDto | 

try {
    $result = $apiInstance->v1UserRegisterDemoPost($request_demo_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UserRegisterDemoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_demo_dto** | [**\TimelightAi\Model\RequestDemoDto**](../Model/RequestDemoDto.md)|  |

### Return type

[**\TimelightAi\Model\LoginResponseDto**](../Model/LoginResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

