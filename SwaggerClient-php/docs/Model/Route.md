# Route

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | URL path that will be matched to this route | [optional] 
**image** | **string** | Name of Docker image to use in this route. You should include the image tag, which should be a version number, to be more accurate. Can be overridden on a per route basis with route.image. | [optional] 
**headers** | [**map[string,string[]]**](array.md) | Map of http headers that will be sent with the response | [optional] 
**memory** | **int** | Max usable memory for this route (MiB). | [optional] 
**type** | **string** | Route type | [optional] 
**format** | **string** | Payload format sent into function. | [optional] 
**config** | **map[string,string]** | Route configuration - overrides application configuration | [optional] 
**timeout** | **int** | Timeout for executions of this route. Value in Seconds | [optional] [default to 30]
**idle_timeout** | **int** | Hot functions idle timeout before termination. Value in Seconds | [optional] [default to 30]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


