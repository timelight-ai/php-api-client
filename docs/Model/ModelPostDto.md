# ModelPostDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**color** | **string** | The color in hex format. Ex: &#39;#FFFFFF&#39; | 
**name** | **string** | The model name, between 1 and 100 characters | 
**anomaly** | **bool** | True if the model is an anomaly and should be ignored by the ML engine | 
**top_tolerance** | **float[]** | An array of 144, 1440 or 86400 values. Each value represents a time window of 10 minutes, 1 minute or 1 second | 
**activity** | **float[]** | An array of 144, 1440 or 86400 values. Each value represents a time window of 10 minutes, 1 minute or 1 second | 
**bottom_tolerance** | **float[]** | An array of 144, 1440 or 86400 values. Each value represents a time window of 10 minutes, 1 minute or 1 second | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


