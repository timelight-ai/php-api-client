# TimelightAi\AlertApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AlertAlertIdCommentPatch**](AlertApi.md#v1AlertAlertIdCommentPatch) | **PATCH** /v1/alert/{alertId}/comment | Add a comment to an alert
[**v1AlertAlertIdFavoritePatch**](AlertApi.md#v1AlertAlertIdFavoritePatch) | **PATCH** /v1/alert/{alertId}/favorite | Set alert favorite for the current user
[**v1AlertListGet**](AlertApi.md#v1AlertListGet) | **GET** /v1/alert/list | List alerts data of the selected year, all alerts if no year is provided
[**v1AlertRefListGet**](AlertApi.md#v1AlertRefListGet) | **GET** /v1/alert/ref/list | List alerts data of the selected year, all alerts if no year is provided


# **v1AlertAlertIdCommentPatch**
> \TimelightAi\Model\AlertRefDto v1AlertAlertIdCommentPatch($alert_comment_dto, $alert_id)

Add a comment to an alert

A commented alert is closed and is moved to the alert referential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_comment_dto = new \TimelightAi\Model\AlertCommentDto(); // \TimelightAi\Model\AlertCommentDto | 
$alert_id = 8.14; // float | 

try {
    $result = $apiInstance->v1AlertAlertIdCommentPatch($alert_comment_dto, $alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->v1AlertAlertIdCommentPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_comment_dto** | [**\TimelightAi\Model\AlertCommentDto**](../Model/AlertCommentDto.md)|  |
 **alert_id** | **float**|  |

### Return type

[**\TimelightAi\Model\AlertRefDto**](../Model/AlertRefDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AlertAlertIdFavoritePatch**
> \TimelightAi\Model\AlertDto v1AlertAlertIdFavoritePatch($alert_favorite_dto, $alert_id)

Set alert favorite for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_favorite_dto = new \TimelightAi\Model\AlertFavoriteDto(); // \TimelightAi\Model\AlertFavoriteDto | 
$alert_id = 8.14; // float | 

try {
    $result = $apiInstance->v1AlertAlertIdFavoritePatch($alert_favorite_dto, $alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->v1AlertAlertIdFavoritePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_favorite_dto** | [**\TimelightAi\Model\AlertFavoriteDto**](../Model/AlertFavoriteDto.md)|  |
 **alert_id** | **float**|  |

### Return type

[**\TimelightAi\Model\AlertDto**](../Model/AlertDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AlertListGet**
> \TimelightAi\Model\AlertListDto v1AlertListGet($source_id, $year)

List alerts data of the selected year, all alerts if no year is provided

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = 8.14; // float | 
$year = 8.14; // float | 

try {
    $result = $apiInstance->v1AlertListGet($source_id, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->v1AlertListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **float**|  | [optional]
 **year** | **float**|  | [optional]

### Return type

[**\TimelightAi\Model\AlertListDto**](../Model/AlertListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AlertRefListGet**
> \TimelightAi\Model\AlertRefListDto v1AlertRefListGet($source_id, $year)

List alerts data of the selected year, all alerts if no year is provided

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = 8.14; // float | 
$year = 8.14; // float | 

try {
    $result = $apiInstance->v1AlertRefListGet($source_id, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->v1AlertRefListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **float**|  | [optional]
 **year** | **float**|  | [optional]

### Return type

[**\TimelightAi\Model\AlertRefListDto**](../Model/AlertRefListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

