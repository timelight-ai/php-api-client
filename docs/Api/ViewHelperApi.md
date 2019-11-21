# TimelightAi\ViewHelperApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ViewHelperAlertsGet**](ViewHelperApi.md#v1ViewHelperAlertsGet) | **GET** /v1/view-helper/alerts | Get the alert view data
[**v1ViewHelperAlertsRefGet**](ViewHelperApi.md#v1ViewHelperAlertsRefGet) | **GET** /v1/view-helper/alerts-ref | Get the alert referential view data
[**v1ViewHelperDaysNearDateSourceIdDayDateGet**](ViewHelperApi.md#v1ViewHelperDaysNearDateSourceIdDayDateGet) | **GET** /v1/view-helper/days-near-date/{sourceId}/{dayDate} | Get the alert modal view data


# **v1ViewHelperAlertsGet**
> v1ViewHelperAlertsGet()

Get the alert view data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ViewHelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->v1ViewHelperAlertsGet();
} catch (Exception $e) {
    echo 'Exception when calling ViewHelperApi->v1ViewHelperAlertsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ViewHelperAlertsRefGet**
> \TimelightAi\Model\AlertRefResultDto v1ViewHelperAlertsRefGet()

Get the alert referential view data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ViewHelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1ViewHelperAlertsRefGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewHelperApi->v1ViewHelperAlertsRefGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TimelightAi\Model\AlertRefResultDto**](../Model/AlertRefResultDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ViewHelperDaysNearDateSourceIdDayDateGet**
> \TimelightAi\Model\DaysNearDateResultDto v1ViewHelperDaysNearDateSourceIdDayDateGet($day_date, $source_id)

Get the alert modal view data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ViewHelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$day_date = "day_date_example"; // string | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1ViewHelperDaysNearDateSourceIdDayDateGet($day_date, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewHelperApi->v1ViewHelperDaysNearDateSourceIdDayDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **day_date** | **string**|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\DaysNearDateResultDto**](../Model/DaysNearDateResultDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

