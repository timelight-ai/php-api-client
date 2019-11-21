# TimelightAi\SourceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1SourceListGet**](SourceApi.md#v1SourceListGet) | **GET** /v1/source/list | All user sources
[**v1SourceSourceIdDelete**](SourceApi.md#v1SourceSourceIdDelete) | **DELETE** /v1/source/{sourceId} | Delete a source and all linked data
[**v1SourceSourceIdGroupPatch**](SourceApi.md#v1SourceSourceIdGroupPatch) | **PATCH** /v1/source/{sourceId}/group | Update a source group
[**v1SourceSourceIdPatch**](SourceApi.md#v1SourceSourceIdPatch) | **PATCH** /v1/source/{sourceId} | Update a source


# **v1SourceListGet**
> \TimelightAi\Model\SourceListDto v1SourceListGet()

All user sources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\SourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SourceListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceApi->v1SourceListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TimelightAi\Model\SourceListDto**](../Model/SourceListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SourceSourceIdDelete**
> v1SourceSourceIdDelete($source_id)

Delete a source and all linked data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\SourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = 8.14; // float | 

try {
    $apiInstance->v1SourceSourceIdDelete($source_id);
} catch (Exception $e) {
    echo 'Exception when calling SourceApi->v1SourceSourceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **float**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SourceSourceIdGroupPatch**
> \TimelightAi\Model\SourceDto v1SourceSourceIdGroupPatch($source_patch_group_dto, $source_id)

Update a source group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\SourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_patch_group_dto = new \TimelightAi\Model\SourcePatchGroupDto(); // \TimelightAi\Model\SourcePatchGroupDto | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1SourceSourceIdGroupPatch($source_patch_group_dto, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceApi->v1SourceSourceIdGroupPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_patch_group_dto** | [**\TimelightAi\Model\SourcePatchGroupDto**](../Model/SourcePatchGroupDto.md)|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\SourceDto**](../Model/SourceDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SourceSourceIdPatch**
> \TimelightAi\Model\SourceDto v1SourceSourceIdPatch($source_patch_dto, $source_id)

Update a source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\SourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_patch_dto = new \TimelightAi\Model\SourcePatchDto(); // \TimelightAi\Model\SourcePatchDto | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1SourceSourceIdPatch($source_patch_dto, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceApi->v1SourceSourceIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_patch_dto** | [**\TimelightAi\Model\SourcePatchDto**](../Model/SourcePatchDto.md)|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\SourceDto**](../Model/SourceDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

