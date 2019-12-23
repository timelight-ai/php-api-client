# TimelightAi\OnboardingApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OnboardingAnalyzeCsvPost**](OnboardingApi.md#v1OnboardingAnalyzeCsvPost) | **POST** /v1/onboarding/analyze-csv | Analyze a csv input
[**v1OnboardingValidateCsvPost**](OnboardingApi.md#v1OnboardingValidateCsvPost) | **POST** /v1/onboarding/validate-csv | Checks that our onboarding csv file is valid


# **v1OnboardingAnalyzeCsvPost**
> v1OnboardingAnalyzeCsvPost()

Analyze a csv input

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TimelightAi\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->v1OnboardingAnalyzeCsvPost();
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->v1OnboardingAnalyzeCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OnboardingValidateCsvPost**
> v1OnboardingValidateCsvPost()

Checks that our onboarding csv file is valid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TimelightAi\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->v1OnboardingValidateCsvPost();
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->v1OnboardingValidateCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

