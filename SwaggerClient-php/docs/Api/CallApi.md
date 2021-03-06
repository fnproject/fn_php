# Swagger\Client\CallApi

All URIs are relative to *https://127.0.0.1:8080/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsAppCallsCallGet**](CallApi.md#appsAppCallsCallGet) | **GET** /apps/{app}/calls/{call} | Get call information
[**appsAppCallsCallLogDelete**](CallApi.md#appsAppCallsCallLogDelete) | **DELETE** /apps/{app}/calls/{call}/log | Delete call log entry
[**appsAppCallsCallLogGet**](CallApi.md#appsAppCallsCallLogGet) | **GET** /apps/{app}/calls/{call}/log | Get call logs
[**appsAppCallsGet**](CallApi.md#appsAppCallsGet) | **GET** /apps/{app}/calls | Get app-bound calls.


# **appsAppCallsCallGet**
> \Swagger\Client\Model\CallWrapper appsAppCallsCallGet($app, $call)

Get call information

Get call information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallApi();
$app = "app_example"; // string | app name
$call = "call_example"; // string | Call ID.

try {
    $result = $api_instance->appsAppCallsCallGet($app, $call);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->appsAppCallsCallGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| app name |
 **call** | **string**| Call ID. |

### Return type

[**\Swagger\Client\Model\CallWrapper**](../Model/CallWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppCallsCallLogDelete**
> appsAppCallsCallLogDelete($call, $app)

Delete call log entry

Delete call log entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallApi();
$call = "call_example"; // string | Call ID.
$app = "app_example"; // string | App name.

try {
    $api_instance->appsAppCallsCallLogDelete($call, $app);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->appsAppCallsCallLogDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call** | **string**| Call ID. |
 **app** | **string**| App name. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppCallsCallLogGet**
> \Swagger\Client\Model\LogWrapper appsAppCallsCallLogGet($app, $call)

Get call logs

Get call logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallApi();
$app = "app_example"; // string | App Name
$call = "call_example"; // string | Call ID.

try {
    $result = $api_instance->appsAppCallsCallLogGet($app, $call);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->appsAppCallsCallLogGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| App Name |
 **call** | **string**| Call ID. |

### Return type

[**\Swagger\Client\Model\LogWrapper**](../Model/LogWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppCallsGet**
> \Swagger\Client\Model\CallsWrapper appsAppCallsGet($app, $path, $cursor, $per_page, $from_time, $to_time)

Get app-bound calls.

Get app-bound calls can filter to route-bound calls, results returned in created_at, descending order (newest first).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallApi();
$app = "app_example"; // string | App name.
$path = "path_example"; // string | Route path to match, exact.
$cursor = "cursor_example"; // string | Cursor from previous response.next_cursor to begin results after, if any.
$per_page = 56; // int | Number of results to return, defaults to 30. Max of 100.
$from_time = 56; // int | Unix timestamp in seconds, of call.created_at to begin the results at, default 0.
$to_time = 56; // int | Unix timestamp in seconds, of call.created_at to end the results at, defaults to latest.

try {
    $result = $api_instance->appsAppCallsGet($app, $path, $cursor, $per_page, $from_time, $to_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->appsAppCallsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| App name. |
 **path** | **string**| Route path to match, exact. | [optional]
 **cursor** | **string**| Cursor from previous response.next_cursor to begin results after, if any. | [optional]
 **per_page** | **int**| Number of results to return, defaults to 30. Max of 100. | [optional]
 **from_time** | **int**| Unix timestamp in seconds, of call.created_at to begin the results at, default 0. | [optional]
 **to_time** | **int**| Unix timestamp in seconds, of call.created_at to end the results at, defaults to latest. | [optional]

### Return type

[**\Swagger\Client\Model\CallsWrapper**](../Model/CallsWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

