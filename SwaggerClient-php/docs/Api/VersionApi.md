# Swagger\Client\VersionApi

All URIs are relative to *https://127.0.0.1:8080/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**versionGet**](VersionApi.md#versionGet) | **GET** /version | Get daemon version.


# **versionGet**
> \Swagger\Client\Model\Version versionGet()

Get daemon version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VersionApi();

try {
    $result = $api_instance->versionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->versionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Version**](../Model/Version.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

