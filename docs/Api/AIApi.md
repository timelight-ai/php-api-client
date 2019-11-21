# TimelightAi\AIApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AiAnomaliesSourceIdGet**](AIApi.md#v1AiAnomaliesSourceIdGet) | **GET** /v1/ai/anomalies/{sourceId} | Auto detect-anomalies
[**v1AiRecomputeDayModelsSourceIdYearPost**](AIApi.md#v1AiRecomputeDayModelsSourceIdYearPost) | **POST** /v1/ai/recompute-day-models/{sourceId}/{year} | Recomputes all day modesl
[**v1AiRecomputeDaysProjectionSourceIdYearPost**](AIApi.md#v1AiRecomputeDaysProjectionSourceIdYearPost) | **POST** /v1/ai/recompute-days-projection/{sourceId}/{year} | Computes all days projection for a source and save them
[**v1AiRecomputeModelsSourceIdYearPost**](AIApi.md#v1AiRecomputeModelsSourceIdYearPost) | **POST** /v1/ai/recompute-models/{sourceId}/{year} | Triggers a model recompute
[**v1AiRecomputeSourceModelsModelCountPost**](AIApi.md#v1AiRecomputeSourceModelsModelCountPost) | **POST** /v1/ai/recompute-source-models/{modelCount} | Triggers a model recompute for source groups


# **v1AiAnomaliesSourceIdGet**
> \TimelightAi\Model\AnomaliesResponseDto v1AiAnomaliesSourceIdGet($source_id)

Auto detect-anomalies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1AiAnomaliesSourceIdGet($source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->v1AiAnomaliesSourceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\AnomaliesResponseDto**](../Model/AnomaliesResponseDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AiRecomputeDayModelsSourceIdYearPost**
> \TimelightAi\Model\RecomputeDayModelsResponseDto v1AiRecomputeDayModelsSourceIdYearPost($year, $source_id)

Recomputes all day modesl

Erases and re-computes all day models for a source and year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 8.14; // float | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1AiRecomputeDayModelsSourceIdYearPost($year, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->v1AiRecomputeDayModelsSourceIdYearPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **float**|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\RecomputeDayModelsResponseDto**](../Model/RecomputeDayModelsResponseDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AiRecomputeDaysProjectionSourceIdYearPost**
> \TimelightAi\Model\RecomputeDaysProjectionResponseDto v1AiRecomputeDaysProjectionSourceIdYearPost($year, $source_id)

Computes all days projection for a source and save them

This computes the X/Y projection of all days in the source for the given year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 8.14; // float | 
$source_id = 8.14; // float | 

try {
    $result = $apiInstance->v1AiRecomputeDaysProjectionSourceIdYearPost($year, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->v1AiRecomputeDaysProjectionSourceIdYearPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **float**|  |
 **source_id** | **float**|  |

### Return type

[**\TimelightAi\Model\RecomputeDaysProjectionResponseDto**](../Model/RecomputeDaysProjectionResponseDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AiRecomputeModelsSourceIdYearPost**
> \TimelightAi\Model\RecomputeModelsResponseDto v1AiRecomputeModelsSourceIdYearPost($year, $source_id, $model_count)

Triggers a model recompute

This operations erases both non-handled alerts and user previsions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 8.14; // float | 
$source_id = 8.14; // float | 
$model_count = 8.14; // float | 

try {
    $result = $apiInstance->v1AiRecomputeModelsSourceIdYearPost($year, $source_id, $model_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->v1AiRecomputeModelsSourceIdYearPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **float**|  |
 **source_id** | **float**|  |
 **model_count** | **float**|  | [optional]

### Return type

[**\TimelightAi\Model\RecomputeModelsResponseDto**](../Model/RecomputeModelsResponseDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AiRecomputeSourceModelsModelCountPost**
> \TimelightAi\Model\RecomputeSourceModelsResponseDto v1AiRecomputeSourceModelsModelCountPost($model_count)

Triggers a model recompute for source groups

This operations erases the group configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_count = 8.14; // float | 

try {
    $result = $apiInstance->v1AiRecomputeSourceModelsModelCountPost($model_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->v1AiRecomputeSourceModelsModelCountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_count** | **float**|  |

### Return type

[**\TimelightAi\Model\RecomputeSourceModelsResponseDto**](../Model/RecomputeSourceModelsResponseDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

