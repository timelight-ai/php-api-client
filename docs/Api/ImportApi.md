# TimelightAi\ImportApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ImportCreateSourcePost**](ImportApi.md#v1ImportCreateSourcePost) | **POST** /v1/import/create-source | First source creation
[**v1ImportDaysPost**](ImportApi.md#v1ImportDaysPost) | **POST** /v1/import/days | Add new data to a source
[**v1ImportReprocessDaysSourceIdYearPost**](ImportApi.md#v1ImportReprocessDaysSourceIdYearPost) | **POST** /v1/import/reprocess-days/{sourceId}/{year} | Reprocess days from database
[**v1ImportSourceIdDaysPost**](ImportApi.md#v1ImportSourceIdDaysPost) | **POST** /v1/import/{sourceId}/days | Add new data to a source


# **v1ImportCreateSourcePost**
> v1ImportCreateSourcePost($create_source_dto)

First source creation

Creates a source, add a first batch of day data, then computes the models for the first time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_source_dto = new \TimelightAi\Model\CreateSourceDto(); // \TimelightAi\Model\CreateSourceDto | 

try {
    $apiInstance->v1ImportCreateSourcePost($create_source_dto);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->v1ImportCreateSourcePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_source_dto** | [**\TimelightAi\Model\CreateSourceDto**](../Model/CreateSourceDto.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ImportDaysPost**
> v1ImportDaysPost($import_days_dto)

Add new data to a source

When new data is added, we compute alerts for this data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_days_dto = new \TimelightAi\Model\ImportDaysDto(); // \TimelightAi\Model\ImportDaysDto | 

try {
    $apiInstance->v1ImportDaysPost($import_days_dto);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->v1ImportDaysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_days_dto** | [**\TimelightAi\Model\ImportDaysDto**](../Model/ImportDaysDto.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ImportReprocessDaysSourceIdYearPost**
> v1ImportReprocessDaysSourceIdYearPost($year, $source_id)

Reprocess days from database

Compute maps, alerts and closest models

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 8.14; // float | 
$source_id = 8.14; // float | 

try {
    $apiInstance->v1ImportReprocessDaysSourceIdYearPost($year, $source_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->v1ImportReprocessDaysSourceIdYearPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **float**|  |
 **source_id** | **float**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ImportSourceIdDaysPost**
> v1ImportSourceIdDaysPost($source_id, $import_days_dto)

Add new data to a source

When new data is added, we compute alerts for this data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = 8.14; // float | 
$import_days_dto = new \TimelightAi\Model\ImportDaysDto(); // \TimelightAi\Model\ImportDaysDto | 

try {
    $apiInstance->v1ImportSourceIdDaysPost($source_id, $import_days_dto);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->v1ImportSourceIdDaysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **float**|  |
 **import_days_dto** | [**\TimelightAi\Model\ImportDaysDto**](../Model/ImportDaysDto.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

