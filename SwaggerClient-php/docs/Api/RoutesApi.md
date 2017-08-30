# Swagger\Client\RoutesApi

All URIs are relative to *https://127.0.0.1:8080/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsAppRoutesGet**](RoutesApi.md#appsAppRoutesGet) | **GET** /apps/{app}/routes | Get route list by app name.
[**appsAppRoutesPost**](RoutesApi.md#appsAppRoutesPost) | **POST** /apps/{app}/routes | Create new Route
[**appsAppRoutesRouteDelete**](RoutesApi.md#appsAppRoutesRouteDelete) | **DELETE** /apps/{app}/routes/{route} | Deletes the route
[**appsAppRoutesRouteGet**](RoutesApi.md#appsAppRoutesRouteGet) | **GET** /apps/{app}/routes/{route} | Gets route by name
[**appsAppRoutesRoutePatch**](RoutesApi.md#appsAppRoutesRoutePatch) | **PATCH** /apps/{app}/routes/{route} | Update a Route


# **appsAppRoutesGet**
> \Swagger\Client\Model\RoutesWrapper appsAppRoutesGet($app)

Get route list by app name.

This will list routes for a particular app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutesApi();
$app = "app_example"; // string | Name of app for this set of routes.

try {
    $result = $api_instance->appsAppRoutesGet($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->appsAppRoutesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| Name of app for this set of routes. |

### Return type

[**\Swagger\Client\Model\RoutesWrapper**](../Model/RoutesWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppRoutesPost**
> \Swagger\Client\Model\RouteWrapper appsAppRoutesPost($app, $body)

Create new Route

Create a new route in an app, if app doesn't exists, it creates the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutesApi();
$app = "app_example"; // string | name of the app.
$body = new \Swagger\Client\Model\RouteWrapper(); // \Swagger\Client\Model\RouteWrapper | One route to post.

try {
    $result = $api_instance->appsAppRoutesPost($app, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->appsAppRoutesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| name of the app. |
 **body** | [**\Swagger\Client\Model\RouteWrapper**](../Model/RouteWrapper.md)| One route to post. |

### Return type

[**\Swagger\Client\Model\RouteWrapper**](../Model/RouteWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppRoutesRouteDelete**
> appsAppRoutesRouteDelete($app, $route)

Deletes the route

Deletes the route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutesApi();
$app = "app_example"; // string | Name of app for this set of routes.
$route = "route_example"; // string | Route name

try {
    $api_instance->appsAppRoutesRouteDelete($app, $route);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->appsAppRoutesRouteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| Name of app for this set of routes. |
 **route** | **string**| Route name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppRoutesRouteGet**
> \Swagger\Client\Model\RouteWrapper appsAppRoutesRouteGet($app, $route)

Gets route by name

Gets a route by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutesApi();
$app = "app_example"; // string | Name of app for this set of routes.
$route = "route_example"; // string | Route name

try {
    $result = $api_instance->appsAppRoutesRouteGet($app, $route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->appsAppRoutesRouteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| Name of app for this set of routes. |
 **route** | **string**| Route name |

### Return type

[**\Swagger\Client\Model\RouteWrapper**](../Model/RouteWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsAppRoutesRoutePatch**
> \Swagger\Client\Model\RouteWrapper appsAppRoutesRoutePatch($app, $route, $body)

Update a Route

Update a route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutesApi();
$app = "app_example"; // string | name of the app.
$route = "route_example"; // string | route path.
$body = new \Swagger\Client\Model\RouteWrapper(); // \Swagger\Client\Model\RouteWrapper | One route to post.

try {
    $result = $api_instance->appsAppRoutesRoutePatch($app, $route, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->appsAppRoutesRoutePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| name of the app. |
 **route** | **string**| route path. |
 **body** | [**\Swagger\Client\Model\RouteWrapper**](../Model/RouteWrapper.md)| One route to post. |

### Return type

[**\Swagger\Client\Model\RouteWrapper**](../Model/RouteWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

