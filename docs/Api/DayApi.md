# TimelightAi\DayApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1DayBulkPatch**](DayApi.md#v1DayBulkPatch) | **PATCH** /v1/day/bulk | Update day entities
[**v1DayListSourceIdYearGet**](DayApi.md#v1DayListSourceIdYearGet) | **GET** /v1/day/list/{sourceId}/{year} | List day data of the reference year


# **v1DayBulkPatch**
> \TimelightAi\Model\DayListDto v1DayBulkPatch($days_patch_dto)

Update day entities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$days_patch_dto = new \TimelightAi\Model\DaysPatchDto(); // \TimelightAi\Model\DaysPatchDto | 

try {
    $result = $apiInstance->v1DayBulkPatch($days_patch_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayApi->v1DayBulkPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days_patch_dto** | [**\TimelightAi\Model\DaysPatchDto**](../Model/DaysPatchDto.md)|  |

### Return type

[**\TimelightAi\Model\DayListDto**](../Model/DayListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DayListSourceIdYearGet**
> \TimelightAi\Model\DayListDto v1DayListSourceIdYearGet($year, $source_id)

List day data of the reference year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 8.14; // float | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1DayListSourceIdYearGet($year, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayApi->v1DayListSourceIdYearGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **float**|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\DayListDto**](../Model/DayListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

