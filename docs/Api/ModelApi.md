# TimelightAi\ModelApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ModelBulkPatch**](ModelApi.md#v1ModelBulkPatch) | **PATCH** /v1/model/bulk | Model bulk update
[**v1ModelListSourceIdGet**](ModelApi.md#v1ModelListSourceIdGet) | **GET** /v1/model/list/{sourceId} | List models data of this source


# **v1ModelBulkPatch**
> \TimelightAi\Model\ModelListDto v1ModelBulkPatch($models_patch_dto)

Model bulk update

Update many models at once, mainly used to set color and name of the model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$models_patch_dto = new \TimelightAi\Model\ModelsPatchDto(); // \TimelightAi\Model\ModelsPatchDto | 

try {
    $result = $apiInstance->v1ModelBulkPatch($models_patch_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->v1ModelBulkPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **models_patch_dto** | [**\TimelightAi\Model\ModelsPatchDto**](../Model/ModelsPatchDto.md)|  |

### Return type

[**\TimelightAi\Model\ModelListDto**](../Model/ModelListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ModelListSourceIdGet**
> \TimelightAi\Model\ModelListDto v1ModelListSourceIdGet($source_id)

List models data of this source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1ModelListSourceIdGet($source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->v1ModelListSourceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\ModelListDto**](../Model/ModelListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

