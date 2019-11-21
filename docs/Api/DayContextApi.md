# TimelightAi\DayContextApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1DayContextBulkPost**](DayContextApi.md#v1DayContextBulkPost) | **POST** /v1/day-context/bulk | Create many DayContext
[**v1DayContextGet**](DayContextApi.md#v1DayContextGet) | **GET** /v1/day-context | Retrieve many DayContext
[**v1DayContextIdDelete**](DayContextApi.md#v1DayContextIdDelete) | **DELETE** /v1/day-context/{id} | Delete one DayContext
[**v1DayContextIdGet**](DayContextApi.md#v1DayContextIdGet) | **GET** /v1/day-context/{id} | Retrieve one DayContext
[**v1DayContextIdPatch**](DayContextApi.md#v1DayContextIdPatch) | **PATCH** /v1/day-context/{id} | Update one DayContext
[**v1DayContextIdPut**](DayContextApi.md#v1DayContextIdPut) | **PUT** /v1/day-context/{id} | Replace one DayContext
[**v1DayContextImportMeteoCsvSourceIdPost**](DayContextApi.md#v1DayContextImportMeteoCsvSourceIdPost) | **POST** /v1/day-context/import-meteo-csv/{sourceId} | Imports a meteo csv file for the source id
[**v1DayContextPost**](DayContextApi.md#v1DayContextPost) | **POST** /v1/day-context | Create one DayContext


# **v1DayContextBulkPost**
> \TimelightAi\Model\DayContext[] v1DayContextBulkPost($generated_day_context_bulk_dto)

Create many DayContext

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generated_day_context_bulk_dto = new \TimelightAi\Model\GeneratedDayContextBulkDto(); // \TimelightAi\Model\GeneratedDayContextBulkDto | 

try {
    $result = $apiInstance->v1DayContextBulkPost($generated_day_context_bulk_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generated_day_context_bulk_dto** | [**\TimelightAi\Model\GeneratedDayContextBulkDto**](../Model/GeneratedDayContextBulkDto.md)|  |

### Return type

[**\TimelightAi\Model\DayContext[]**](../Model/DayContext.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DayContextGet**
> \TimelightAi\Model\DayContext[] v1DayContextGet($fields, $filter, $or, $sort, $join, $per_page, $offset, $page, $cache)

Retrieve many DayContext

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | <h4>Selects fields that should be returned in the reponse body.</h4><i>Syntax:</i> <strong>?fields=field1,field2,...</strong> <br/><i>Example:</i> <strong>?fields=email,name</strong>
$filter = "filter_example"; // string | <h4>Adds fields request condition (multiple conditions) to the request.</h4><i>Syntax:</i> <strong>?filter=field||condition||value</strong><br/><i>Examples:</i> <ul><li><strong>?filter=name||eq||batman</strong></li><li><strong>?filter=isVillain||eq||false&filter=city||eq||Arkham</strong> (multiple filters are treated as a combination of AND type of conditions)</li><li><strong>?filter=shots||in||12,26</strong> (some conditions accept multiple values separated by commas)</li><li><strong>?filter=power||isnull</strong> (some conditions don't accept value)</li></ul><br/>Filter Conditions:<ul><li><strong><code>eq</code></strong> (<code>=</code>, equal)</li><li><strong><code>ne</code></strong> (<code>!=</code>, not equal)</li><li><strong><code>gt</code></strong> (<code>&gt;</code>, greater than)</li><li><strong><code>lt</code></strong> (<code>&lt;</code>, lower that)</li><li><strong><code>gte</code></strong> (<code>&gt;=</code>, greater than or equal)</li><li><strong><code>lte</code></strong> (<code>&lt;=</code>, lower than or equal)</li><li><strong><code>starts</code></strong> (<code>LIKE val%</code>, starts with)</li><li><strong><code>ends</code></strong> (<code>LIKE %val</code>, ends with)</li><li><strong><code>cont</code></strong> (<code>LIKE %val%</code>, contains)</li><li><strong><code>excl</code></strong> (<code>NOT LIKE %val%</code>, not contains)</li><li><strong><code>in</code></strong> (<code>IN</code>, in range, <strong><em>accepts multiple values</em></strong>)</li><li><strong><code>notin</code></strong> (<code>NOT IN</code>, not in range, <strong><em>accepts multiple values</em></strong>)</li><li><strong><code>isnull</code></strong> (<code>IS NULL</code>, is NULL, <strong><em>doesn't accept value</em></strong>)</li><li><strong><code>notnull</code></strong> (<code>IS NOT NULL</code>, not NULL, <strong><em>doesn't accept value</em></strong>)</li><li><strong><code>between</code></strong> (<code>BETWEEN</code>, between, <strong><em>accepts two values</em></strong>)</li></ul>
$or = "or_example"; // string | <h4>Adds <code>OR</code> conditions to the request.</h4><i>Syntax:</i> <strong>?or=field||condition||value</strong><br/>It uses the same conditions as the filter parameter<br/><i>Rules and <i>Examples:</i></i><ul><li>If there is only <strong>one</strong> <code>or</code> present (without <code>filter</code>) then it will be interpreted as simple filter:</li><ul><li><strong>?or=name||eq||batman</strong></li></ul></ul><ul><li>If there are <strong>multiple</strong> <code>or</code> present (without <code>filter</code>) then it will be interpreted as a compination of <code>OR</code> conditions, as follows:<br><code>WHERE {or} OR {or} OR ...</code></li><ul><li><strong>?or=name||eq||batman&or=name||eq||joker</strong></li></ul></ul><ul><li>If there are <strong>one</strong> <code>or</code> and <strong>one</strong> <code>filter</code> then it will be interpreted as <code>OR</code> condition, as follows:<br><code>WHERE {filter} OR {or}</code></li><ul><li><strong>?filter=name||eq||batman&or=name||eq||joker</strong></li></ul></ul><ul><li>If present <strong>both</strong> <code>or</code> and <code>filter</code> in any amount (<strong>one</strong> or <strong>miltiple</strong> each) then both interpreted as a combitation of <code>AND</code> conditions and compared with each other by <code>OR</code> condition, as follows:<br><code>WHERE ({filter} AND {filter} AND ...) OR ({or} AND {or} AND ...)</code></li><ul><li><strong>?filter=type||eq||hero&filter=status||eq||alive&or=type||eq||villain&or=status||eq||dead</strong></li></ul></ul>
$sort = "sort_example"; // string | <h4>Adds sort by field (by multiple fields) and order to query result.</h4><i>Syntax:</i> <strong>?sort=field,ASC|DESC</strong><br/><i>Examples:</i></i><ul><li><strong>?sort=name,ASC</strong></li><li><strong>?sort=name,ASC&sort=id,DESC</strong></li></ul>
$join = "join_example"; // string | <h4>Receive joined relational objects in GET result (with all or selected fields).</h4><i>Syntax:</i><ul><li><strong>?join=relation</strong></li><li><strong>?join=relation||field1,field2,...</strong></li><li><strong>?join=relation1||field11,field12,...&join=relation1.nested||field21,field22,...&join=...</strong></li></ul><br/><i>Examples:</i></i><ul><li><strong>?join=profile</strong></li><li><strong>?join=profile||firstName,email</strong></li><li><strong>?join=profile||firstName,email&join=notifications||content&join=tasks</strong></li><li><strong>?join=relation1&join=relation1.nested&join=relation1.nested.deepnested</strong></li></ul><strong><i>Notice:</i></strong> <code>id</code> field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above.
$per_page = 8.14; // float | <h4>Receive <code>N</code> amount of entities.</h4><i>Syntax:</i> <strong>?per_page=number</strong><br/><i>Example:</i> <strong>?per_page=10</strong>
$offset = 8.14; // float | <h4>Offset <code>N</code> amount of entities.</h4><i>Syntax:</i> <strong>?offset=number</strong><br/><i>Example:</i> <strong>?offset=10</strong>
$page = 8.14; // float | <h4>Receive a portion of <code>limit</code> entities (alternative to <code>offset</code>). Will be applied if <code>limit</code> is set up.</h4><i>Syntax:</i> <strong>?page=number</strong><br/><i>Example:</i> <strong>?page=2</strong>
$cache = 8.14; // float | <h4>Reset cache (if was enabled) and receive entities from the DB.</h4><i>Usage:</i> <strong>?cache=0</strong>

try {
    $result = $apiInstance->v1DayContextGet($fields, $filter, $or, $sort, $join, $per_page, $offset, $page, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| &lt;h4&gt;Selects fields that should be returned in the reponse body.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;field1,field2,...&lt;/strong&gt; &lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;email,name&lt;/strong&gt; | [optional]
 **filter** | **string**| &lt;h4&gt;Adds fields request condition (multiple conditions) to the request.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?filter&#x3D;field||condition||value&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt; &lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter&#x3D;name||eq||batman&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter&#x3D;isVillain||eq||false&amp;filter&#x3D;city||eq||Arkham&lt;/strong&gt; (multiple filters are treated as a combination of AND type of conditions)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter&#x3D;shots||in||12,26&lt;/strong&gt; (some conditions accept multiple values separated by commas)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter&#x3D;power||isnull&lt;/strong&gt; (some conditions don&#39;t accept value)&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;Filter Conditions:&lt;ul&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;eq&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&#x3D;&lt;/code&gt;, equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;ne&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;!&#x3D;&lt;/code&gt;, not equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;gt&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;gt;&lt;/code&gt;, greater than)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;lt&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;lt;&lt;/code&gt;, lower that)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;gte&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;gt;&#x3D;&lt;/code&gt;, greater than or equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;lte&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;lt;&#x3D;&lt;/code&gt;, lower than or equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;starts&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE val%&lt;/code&gt;, starts with)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;ends&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE %val&lt;/code&gt;, ends with)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;cont&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE %val%&lt;/code&gt;, contains)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;excl&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;NOT LIKE %val%&lt;/code&gt;, not contains)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;in&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IN&lt;/code&gt;, in range, &lt;strong&gt;&lt;em&gt;accepts multiple values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;notin&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;NOT IN&lt;/code&gt;, not in range, &lt;strong&gt;&lt;em&gt;accepts multiple values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;isnull&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IS NULL&lt;/code&gt;, is NULL, &lt;strong&gt;&lt;em&gt;doesn&#39;t accept value&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;notnull&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IS NOT NULL&lt;/code&gt;, not NULL, &lt;strong&gt;&lt;em&gt;doesn&#39;t accept value&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;between&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;BETWEEN&lt;/code&gt;, between, &lt;strong&gt;&lt;em&gt;accepts two values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;/ul&gt; | [optional]
 **or** | **string**| &lt;h4&gt;Adds &lt;code&gt;OR&lt;/code&gt; conditions to the request.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?or&#x3D;field||condition||value&lt;/strong&gt;&lt;br/&gt;It uses the same conditions as the filter parameter&lt;br/&gt;&lt;i&gt;Rules and &lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;If there is only &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; present (without &lt;code&gt;filter&lt;/code&gt;) then it will be interpreted as simple filter:&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?or&#x3D;name||eq||batman&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If there are &lt;strong&gt;multiple&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; present (without &lt;code&gt;filter&lt;/code&gt;) then it will be interpreted as a compination of &lt;code&gt;OR&lt;/code&gt; conditions, as follows:&lt;br&gt;&lt;code&gt;WHERE {or} OR {or} OR ...&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?or&#x3D;name||eq||batman&amp;or&#x3D;name||eq||joker&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If there are &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; and &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;filter&lt;/code&gt; then it will be interpreted as &lt;code&gt;OR&lt;/code&gt; condition, as follows:&lt;br&gt;&lt;code&gt;WHERE {filter} OR {or}&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter&#x3D;name||eq||batman&amp;or&#x3D;name||eq||joker&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If present &lt;strong&gt;both&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; and &lt;code&gt;filter&lt;/code&gt; in any amount (&lt;strong&gt;one&lt;/strong&gt; or &lt;strong&gt;miltiple&lt;/strong&gt; each) then both interpreted as a combitation of &lt;code&gt;AND&lt;/code&gt; conditions and compared with each other by &lt;code&gt;OR&lt;/code&gt; condition, as follows:&lt;br&gt;&lt;code&gt;WHERE ({filter} AND {filter} AND ...) OR ({or} AND {or} AND ...)&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter&#x3D;type||eq||hero&amp;filter&#x3D;status||eq||alive&amp;or&#x3D;type||eq||villain&amp;or&#x3D;status||eq||dead&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt; | [optional]
 **sort** | **string**| &lt;h4&gt;Adds sort by field (by multiple fields) and order to query result.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?sort&#x3D;field,ASC|DESC&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?sort&#x3D;name,ASC&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?sort&#x3D;name,ASC&amp;sort&#x3D;id,DESC&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
 **join** | **string**| &lt;h4&gt;Receive joined relational objects in GET result (with all or selected fields).&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation||field1,field2,...&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation1||field11,field12,...&amp;join&#x3D;relation1.nested||field21,field22,...&amp;join&#x3D;...&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;profile&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;profile||firstName,email&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;profile||firstName,email&amp;join&#x3D;notifications||content&amp;join&#x3D;tasks&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation1&amp;join&#x3D;relation1.nested&amp;join&#x3D;relation1.nested.deepnested&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;strong&gt;&lt;i&gt;Notice:&lt;/i&gt;&lt;/strong&gt; &lt;code&gt;id&lt;/code&gt; field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above. | [optional]
 **per_page** | **float**| &lt;h4&gt;Receive &lt;code&gt;N&lt;/code&gt; amount of entities.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?per_page&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?per_page&#x3D;10&lt;/strong&gt; | [optional]
 **offset** | **float**| &lt;h4&gt;Offset &lt;code&gt;N&lt;/code&gt; amount of entities.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?offset&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?offset&#x3D;10&lt;/strong&gt; | [optional]
 **page** | **float**| &lt;h4&gt;Receive a portion of &lt;code&gt;limit&lt;/code&gt; entities (alternative to &lt;code&gt;offset&lt;/code&gt;). Will be applied if &lt;code&gt;limit&lt;/code&gt; is set up.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?page&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?page&#x3D;2&lt;/strong&gt; | [optional]
 **cache** | **float**| &lt;h4&gt;Reset cache (if was enabled) and receive entities from the DB.&lt;/h4&gt;&lt;i&gt;Usage:&lt;/i&gt; &lt;strong&gt;?cache&#x3D;0&lt;/strong&gt; | [optional]

### Return type

[**\TimelightAi\Model\DayContext[]**](../Model/DayContext.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DayContextIdDelete**
> \TimelightAi\Model\DayContext v1DayContextIdDelete($id)

Delete one DayContext

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | 

try {
    $result = $apiInstance->v1DayContextIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**|  |

### Return type

[**\TimelightAi\Model\DayContext**](../Model/DayContext.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DayContextIdGet**
> \TimelightAi\Model\DayContext v1DayContextIdGet($id, $fields, $join, $cache)

Retrieve one DayContext

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | 
$fields = "fields_example"; // string | <h4>Selects fields that should be returned in the reponse body.</h4><i>Syntax:</i> <strong>?fields=field1,field2,...</strong> <br/><i>Example:</i> <strong>?fields=email,name</strong>
$join = "join_example"; // string | <h4>Receive joined relational objects in GET result (with all or selected fields).</h4><i>Syntax:</i><ul><li><strong>?join=relation</strong></li><li><strong>?join=relation||field1,field2,...</strong></li><li><strong>?join=relation1||field11,field12,...&join=relation1.nested||field21,field22,...&join=...</strong></li></ul><br/><i>Examples:</i></i><ul><li><strong>?join=profile</strong></li><li><strong>?join=profile||firstName,email</strong></li><li><strong>?join=profile||firstName,email&join=notifications||content&join=tasks</strong></li><li><strong>?join=relation1&join=relation1.nested&join=relation1.nested.deepnested</strong></li></ul><strong><i>Notice:</i></strong> <code>id</code> field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above.
$cache = 8.14; // float | <h4>Reset cache (if was enabled) and receive entities from the DB.</h4><i>Usage:</i> <strong>?cache=0</strong>

try {
    $result = $apiInstance->v1DayContextIdGet($id, $fields, $join, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**|  |
 **fields** | **string**| &lt;h4&gt;Selects fields that should be returned in the reponse body.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;field1,field2,...&lt;/strong&gt; &lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;email,name&lt;/strong&gt; | [optional]
 **join** | **string**| &lt;h4&gt;Receive joined relational objects in GET result (with all or selected fields).&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation||field1,field2,...&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation1||field11,field12,...&amp;join&#x3D;relation1.nested||field21,field22,...&amp;join&#x3D;...&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;profile&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;profile||firstName,email&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;profile||firstName,email&amp;join&#x3D;notifications||content&amp;join&#x3D;tasks&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join&#x3D;relation1&amp;join&#x3D;relation1.nested&amp;join&#x3D;relation1.nested.deepnested&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;strong&gt;&lt;i&gt;Notice:&lt;/i&gt;&lt;/strong&gt; &lt;code&gt;id&lt;/code&gt; field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above. | [optional]
 **cache** | **float**| &lt;h4&gt;Reset cache (if was enabled) and receive entities from the DB.&lt;/h4&gt;&lt;i&gt;Usage:&lt;/i&gt; &lt;strong&gt;?cache&#x3D;0&lt;/strong&gt; | [optional]

### Return type

[**\TimelightAi\Model\DayContext**](../Model/DayContext.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DayContextIdPatch**
> \TimelightAi\Model\DayContext v1DayContextIdPatch($day_context, $id)

Update one DayContext

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$day_context = new \TimelightAi\Model\DayContext(); // \TimelightAi\Model\DayContext | 
$id = 8.14; // float | 

try {
    $result = $apiInstance->v1DayContextIdPatch($day_context, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **day_context** | [**\TimelightAi\Model\DayContext**](../Model/DayContext.md)|  |
 **id** | **float**|  |

### Return type

[**\TimelightAi\Model\DayContext**](../Model/DayContext.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DayContextIdPut**
> \TimelightAi\Model\DayContext v1DayContextIdPut($day_context, $id)

Replace one DayContext

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$day_context = new \TimelightAi\Model\DayContext(); // \TimelightAi\Model\DayContext | 
$id = 8.14; // float | 

try {
    $result = $apiInstance->v1DayContextIdPut($day_context, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **day_context** | [**\TimelightAi\Model\DayContext**](../Model/DayContext.md)|  |
 **id** | **float**|  |

### Return type

[**\TimelightAi\Model\DayContext**](../Model/DayContext.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DayContextImportMeteoCsvSourceIdPost**
> v1DayContextImportMeteoCsvSourceIdPost($source_id)

Imports a meteo csv file for the source id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = 8.14; // float | 

try {
    $apiInstance->v1DayContextImportMeteoCsvSourceIdPost($source_id);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextImportMeteoCsvSourceIdPost: ', $e->getMessage(), PHP_EOL;
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

# **v1DayContextPost**
> \TimelightAi\Model\DayContext v1DayContextPost($day_context)

Create one DayContext

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TimelightAi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new TimelightAi\Api\DayContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$day_context = new \TimelightAi\Model\DayContext(); // \TimelightAi\Model\DayContext | 

try {
    $result = $apiInstance->v1DayContextPost($day_context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DayContextApi->v1DayContextPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **day_context** | [**\TimelightAi\Model\DayContext**](../Model/DayContext.md)|  |

### Return type

[**\TimelightAi\Model\DayContext**](../Model/DayContext.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

