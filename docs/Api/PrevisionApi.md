# TimelightAi\PrevisionApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PrevisionGroupApplyPrevisionPost**](PrevisionApi.md#v1PrevisionGroupApplyPrevisionPost) | **POST** /v1/prevision/group-apply-prevision | Apply a source prevision to the whole group
[**v1PrevisionListSourceIdYearGet**](PrevisionApi.md#v1PrevisionListSourceIdYearGet) | **GET** /v1/prevision/list/{sourceId}/{year} | Fetch data previsions for a given year
[**v1PrevisionSaveDefaultPrevisionsSourceIdYearPost**](PrevisionApi.md#v1PrevisionSaveDefaultPrevisionsSourceIdYearPost) | **POST** /v1/prevision/save-default-previsions/{sourceId}/{year} | Generate default previsions for the source and save them
[**v1PrevisionSavePost**](PrevisionApi.md#v1PrevisionSavePost) | **POST** /v1/prevision/save | Save many previsions at once
[**v1PrevisionUpdatePatch**](PrevisionApi.md#v1PrevisionUpdatePatch) | **PATCH** /v1/prevision/update | Update a specific prevision


# **v1PrevisionGroupApplyPrevisionPost**
> \TimelightAi\Model\PrevisionApplyGroupResponseDto v1PrevisionGroupApplyPrevisionPost($prevision_apply_group_dto)

Apply a source prevision to the whole group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\PrevisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prevision_apply_group_dto = new \TimelightAi\Model\PrevisionApplyGroupDto(); // \TimelightAi\Model\PrevisionApplyGroupDto | 

try {
    $result = $apiInstance->v1PrevisionGroupApplyPrevisionPost($prevision_apply_group_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrevisionApi->v1PrevisionGroupApplyPrevisionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prevision_apply_group_dto** | [**\TimelightAi\Model\PrevisionApplyGroupDto**](../Model/PrevisionApplyGroupDto.md)|  |

### Return type

[**\TimelightAi\Model\PrevisionApplyGroupResponseDto**](../Model/PrevisionApplyGroupResponseDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PrevisionListSourceIdYearGet**
> \TimelightAi\Model\PrevisionListDto v1PrevisionListSourceIdYearGet($year, $source_id)

Fetch data previsions for a given year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\PrevisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 8.14; // float | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1PrevisionListSourceIdYearGet($year, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrevisionApi->v1PrevisionListSourceIdYearGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **float**|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\PrevisionListDto**](../Model/PrevisionListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PrevisionSaveDefaultPrevisionsSourceIdYearPost**
> \TimelightAi\Model\PrevisionBulkSaveResultDto v1PrevisionSaveDefaultPrevisionsSourceIdYearPost($year, $source_id)

Generate default previsions for the source and save them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\PrevisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 8.14; // float | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1PrevisionSaveDefaultPrevisionsSourceIdYearPost($year, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrevisionApi->v1PrevisionSaveDefaultPrevisionsSourceIdYearPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **float**|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\PrevisionBulkSaveResultDto**](../Model/PrevisionBulkSaveResultDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PrevisionSavePost**
> \TimelightAi\Model\PrevisionBulkSaveResultDto v1PrevisionSavePost($prevision_bulk_save_dto)

Save many previsions at once

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\PrevisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prevision_bulk_save_dto = new \TimelightAi\Model\PrevisionBulkSaveDto(); // \TimelightAi\Model\PrevisionBulkSaveDto | 

try {
    $result = $apiInstance->v1PrevisionSavePost($prevision_bulk_save_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrevisionApi->v1PrevisionSavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prevision_bulk_save_dto** | [**\TimelightAi\Model\PrevisionBulkSaveDto**](../Model/PrevisionBulkSaveDto.md)|  |

### Return type

[**\TimelightAi\Model\PrevisionBulkSaveResultDto**](../Model/PrevisionBulkSaveResultDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PrevisionUpdatePatch**
> \TimelightAi\Model\PrevisionUpdateResultDto v1PrevisionUpdatePatch($prevision_patch_dto)

Update a specific prevision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\PrevisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prevision_patch_dto = new \TimelightAi\Model\PrevisionPatchDto(); // \TimelightAi\Model\PrevisionPatchDto | 

try {
    $result = $apiInstance->v1PrevisionUpdatePatch($prevision_patch_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrevisionApi->v1PrevisionUpdatePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prevision_patch_dto** | [**\TimelightAi\Model\PrevisionPatchDto**](../Model/PrevisionPatchDto.md)|  |

### Return type

[**\TimelightAi\Model\PrevisionUpdateResultDto**](../Model/PrevisionUpdateResultDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

