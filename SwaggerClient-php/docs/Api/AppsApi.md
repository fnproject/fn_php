# Swagger\Client\AppsApi

All URIs are relative to *https://127.0.0.1:8080/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsAppDelete**](AppsApi.md#appsAppDelete) | **DELETE** /apps/{app} | Delete an app.
[**appsAppGet**](AppsApi.md#appsAppGet) | **GET** /apps/{app} | Get information for a app.
[**appsAppPatch**](AppsApi.md#appsAppPatch) | **PATCH** /apps/{app} | Updates an app.
[**appsGet**](AppsApi.md#appsGet) | **GET** /apps | Get all app names.
[**appsPost**](AppsApi.md#appsPost) | **POST** /apps | Post new app


# **appsAppDelete**
> appsAppDelete($app)

Delete an app.

Delete an app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$app = "app_example"; // string | Name of the app.

try {
    $api_instance->appsAppDelete($app);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsAppDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| Name of the app. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppGet**
> \Swagger\Client\Model\AppWrapper appsAppGet($app)

Get information for a app.

This gives more details about a app, such as statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$app = "app_example"; // string | name of the app.

try {
    $result = $api_instance->appsAppGet($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsAppGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| name of the app. |

### Return type

[**\Swagger\Client\Model\AppWrapper**](../Model/AppWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppPatch**
> \Swagger\Client\Model\AppWrapper appsAppPatch($app, $body)

Updates an app.

You can set app level settings here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$app = "app_example"; // string | name of the app.
$body = new \Swagger\Client\Model\AppWrapper(); // \Swagger\Client\Model\AppWrapper | App to post.

try {
    $result = $api_instance->appsAppPatch($app, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsAppPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| name of the app. |
 **body** | [**\Swagger\Client\Model\AppWrapper**](../Model/AppWrapper.md)| App to post. |

### Return type

[**\Swagger\Client\Model\AppWrapper**](../Model/AppWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsGet**
> \Swagger\Client\Model\AppsWrapper appsGet()

Get all app names.

Get a list of all the apps in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();

try {
    $result = $api_instance->appsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AppsWrapper**](../Model/AppsWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsPost**
> \Swagger\Client\Model\AppWrapper appsPost($body)

Post new app

Insert a new app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$body = new \Swagger\Client\Model\AppWrapper(); // \Swagger\Client\Model\AppWrapper | App to post.

try {
    $result = $api_instance->appsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AppWrapper**](../Model/AppWrapper.md)| App to post. |

### Return type

[**\Swagger\Client\Model\AppWrapper**](../Model/AppWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

