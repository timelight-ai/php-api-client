# TimelightAi\SourceGroupApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1SourceGroupCreatePost**](SourceGroupApi.md#v1SourceGroupCreatePost) | **POST** /v1/source-group/create | Create a new source groups
[**v1SourceGroupGroupIdPatch**](SourceGroupApi.md#v1SourceGroupGroupIdPatch) | **PATCH** /v1/source-group/{groupId} | Updates a group configuration
[**v1SourceGroupListGet**](SourceGroupApi.md#v1SourceGroupListGet) | **GET** /v1/source-group/list | All source groups


# **v1SourceGroupCreatePost**
> \TimelightAi\Model\SourceGroupDto v1SourceGroupCreatePost($source_group_create_dto)

Create a new source groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\SourceGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_group_create_dto = new \TimelightAi\Model\SourceGroupCreateDto(); // \TimelightAi\Model\SourceGroupCreateDto | 

try {
    $result = $apiInstance->v1SourceGroupCreatePost($source_group_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceGroupApi->v1SourceGroupCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_group_create_dto** | [**\TimelightAi\Model\SourceGroupCreateDto**](../Model/SourceGroupCreateDto.md)|  |

### Return type

[**\TimelightAi\Model\SourceGroupDto**](../Model/SourceGroupDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SourceGroupGroupIdPatch**
> \TimelightAi\Model\SourceGroupDto v1SourceGroupGroupIdPatch($source_group_patch_dto, $group_id)

Updates a group configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\SourceGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_group_patch_dto = new \TimelightAi\Model\SourceGroupPatchDto(); // \TimelightAi\Model\SourceGroupPatchDto | 
$group_id = 8.14; // float | 

try {
    $result = $apiInstance->v1SourceGroupGroupIdPatch($source_group_patch_dto, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceGroupApi->v1SourceGroupGroupIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_group_patch_dto** | [**\TimelightAi\Model\SourceGroupPatchDto**](../Model/SourceGroupPatchDto.md)|  |
 **group_id** | **float**|  |

### Return type

[**\TimelightAi\Model\SourceGroupDto**](../Model/SourceGroupDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SourceGroupListGet**
> \TimelightAi\Model\SourceGroupListDto v1SourceGroupListGet()

All source groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\SourceGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SourceGroupListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceGroupApi->v1SourceGroupListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TimelightAi\Model\SourceGroupListDto**](../Model/SourceGroupListDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

