# Timelight API Client

A PHP library for easy use of the [Timelight](https://timelight.tech) AI API.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Documentation

Generic documentation and tutorials of the API can be found at [api.timelight.tech](https://api.demo.timelight.tech/).

Full client reference can be found in the [docs](./docs) folder

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

Run `composer require timelight-ai/php-api-client`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/php-api-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AIApi* | [**v1AiAnomaliesSourceIdGet**](docs/Api/AIApi.md#v1aianomaliessourceidget) | **GET** /v1/ai/anomalies/{sourceId} | Auto detect-anomalies
*AIApi* | [**v1AiRecomputeDayModelsSourceIdYearPost**](docs/Api/AIApi.md#v1airecomputedaymodelssourceidyearpost) | **POST** /v1/ai/recompute-day-models/{sourceId}/{year} | Recomputes all day modesl
*AIApi* | [**v1AiRecomputeDaysProjectionSourceIdYearPost**](docs/Api/AIApi.md#v1airecomputedaysprojectionsourceidyearpost) | **POST** /v1/ai/recompute-days-projection/{sourceId}/{year} | Computes all days projection for a source and save them
*AIApi* | [**v1AiRecomputeModelsSourceIdYearPost**](docs/Api/AIApi.md#v1airecomputemodelssourceidyearpost) | **POST** /v1/ai/recompute-models/{sourceId}/{year} | Triggers a model recompute
*AIApi* | [**v1AiRecomputeSourceModelsModelCountPost**](docs/Api/AIApi.md#v1airecomputesourcemodelsmodelcountpost) | **POST** /v1/ai/recompute-source-models/{modelCount} | Triggers a model recompute for source groups
*AlertApi* | [**v1AlertAlertIdCommentPatch**](docs/Api/AlertApi.md#v1alertalertidcommentpatch) | **PATCH** /v1/alert/{alertId}/comment | Add a comment to an alert
*AlertApi* | [**v1AlertAlertIdFavoritePatch**](docs/Api/AlertApi.md#v1alertalertidfavoritepatch) | **PATCH** /v1/alert/{alertId}/favorite | Set alert favorite for the current user
*AlertApi* | [**v1AlertListGet**](docs/Api/AlertApi.md#v1alertlistget) | **GET** /v1/alert/list | List alerts data of the selected year, all alerts if no year is provided
*AlertApi* | [**v1AlertRefListGet**](docs/Api/AlertApi.md#v1alertreflistget) | **GET** /v1/alert/ref/list | List alerts data of the selected year, all alerts if no year is provided
*DayApi* | [**v1DayBulkPatch**](docs/Api/DayApi.md#v1daybulkpatch) | **PATCH** /v1/day/bulk | Update day entities
*DayApi* | [**v1DayListSourceIdYearGet**](docs/Api/DayApi.md#v1daylistsourceidyearget) | **GET** /v1/day/list/{sourceId}/{year} | List day data of the reference year
*DayContextApi* | [**v1DayContextBulkPost**](docs/Api/DayContextApi.md#v1daycontextbulkpost) | **POST** /v1/day-context/bulk | Create many DayContext
*DayContextApi* | [**v1DayContextGet**](docs/Api/DayContextApi.md#v1daycontextget) | **GET** /v1/day-context | Retrieve many DayContext
*DayContextApi* | [**v1DayContextIdDelete**](docs/Api/DayContextApi.md#v1daycontextiddelete) | **DELETE** /v1/day-context/{id} | Delete one DayContext
*DayContextApi* | [**v1DayContextIdGet**](docs/Api/DayContextApi.md#v1daycontextidget) | **GET** /v1/day-context/{id} | Retrieve one DayContext
*DayContextApi* | [**v1DayContextIdPatch**](docs/Api/DayContextApi.md#v1daycontextidpatch) | **PATCH** /v1/day-context/{id} | Update one DayContext
*DayContextApi* | [**v1DayContextIdPut**](docs/Api/DayContextApi.md#v1daycontextidput) | **PUT** /v1/day-context/{id} | Replace one DayContext
*DayContextApi* | [**v1DayContextImportMeteoCsvSourceIdPost**](docs/Api/DayContextApi.md#v1daycontextimportmeteocsvsourceidpost) | **POST** /v1/day-context/import-meteo-csv/{sourceId} | Imports a meteo csv file for the source id
*DayContextApi* | [**v1DayContextPost**](docs/Api/DayContextApi.md#v1daycontextpost) | **POST** /v1/day-context | Create one DayContext
*DayTrendApi* | [**v1DayTrendBulkPost**](docs/Api/DayTrendApi.md#v1daytrendbulkpost) | **POST** /v1/day-trend/bulk | Create many DayTrend
*DayTrendApi* | [**v1DayTrendGet**](docs/Api/DayTrendApi.md#v1daytrendget) | **GET** /v1/day-trend | Retrieve many DayTrend
*DayTrendApi* | [**v1DayTrendIdDelete**](docs/Api/DayTrendApi.md#v1daytrendiddelete) | **DELETE** /v1/day-trend/{id} | Delete one DayTrend
*DayTrendApi* | [**v1DayTrendIdGet**](docs/Api/DayTrendApi.md#v1daytrendidget) | **GET** /v1/day-trend/{id} | Retrieve one DayTrend
*DayTrendApi* | [**v1DayTrendIdPatch**](docs/Api/DayTrendApi.md#v1daytrendidpatch) | **PATCH** /v1/day-trend/{id} | Update one DayTrend
*DayTrendApi* | [**v1DayTrendIdPut**](docs/Api/DayTrendApi.md#v1daytrendidput) | **PUT** /v1/day-trend/{id} | Replace one DayTrend
*DayTrendApi* | [**v1DayTrendPost**](docs/Api/DayTrendApi.md#v1daytrendpost) | **POST** /v1/day-trend | Create one DayTrend
*DayTrendApi* | [**v1DayTrendReplaceAllInSourceSourceIdPost**](docs/Api/DayTrendApi.md#v1daytrendreplaceallinsourcesourceidpost) | **POST** /v1/day-trend/replace-all-in-source/{sourceId} | Imports many trends and replace existing. Recomputes alerts
*ImportApi* | [**v1ImportCreateSourcePost**](docs/Api/ImportApi.md#v1importcreatesourcepost) | **POST** /v1/import/create-source | First source creation
*ImportApi* | [**v1ImportDaysPost**](docs/Api/ImportApi.md#v1importdayspost) | **POST** /v1/import/days | Add new data to a source
*ImportApi* | [**v1ImportReprocessDaysSourceIdYearPost**](docs/Api/ImportApi.md#v1importreprocessdayssourceidyearpost) | **POST** /v1/import/reprocess-days/{sourceId}/{year} | Reprocess days from database
*ImportApi* | [**v1ImportSourceIdDaysPost**](docs/Api/ImportApi.md#v1importsourceiddayspost) | **POST** /v1/import/{sourceId}/days | Add new data to a source
*ModelApi* | [**v1ModelBulkPatch**](docs/Api/ModelApi.md#v1modelbulkpatch) | **PATCH** /v1/model/bulk | Model bulk update
*ModelApi* | [**v1ModelListSourceIdGet**](docs/Api/ModelApi.md#v1modellistsourceidget) | **GET** /v1/model/list/{sourceId} | List models data of this source
*PrevisionApi* | [**v1PrevisionGroupApplyPrevisionPost**](docs/Api/PrevisionApi.md#v1previsiongroupapplyprevisionpost) | **POST** /v1/prevision/group-apply-prevision | Apply a source prevision to the whole group
*PrevisionApi* | [**v1PrevisionListSourceIdYearGet**](docs/Api/PrevisionApi.md#v1previsionlistsourceidyearget) | **GET** /v1/prevision/list/{sourceId}/{year} | Fetch data previsions for a given year
*PrevisionApi* | [**v1PrevisionSaveDefaultPrevisionsSourceIdYearPost**](docs/Api/PrevisionApi.md#v1previsionsavedefaultprevisionssourceidyearpost) | **POST** /v1/prevision/save-default-previsions/{sourceId}/{year} | Generate default previsions for the source and save them
*PrevisionApi* | [**v1PrevisionSavePost**](docs/Api/PrevisionApi.md#v1previsionsavepost) | **POST** /v1/prevision/save | Save many previsions at once
*PrevisionApi* | [**v1PrevisionUpdatePatch**](docs/Api/PrevisionApi.md#v1previsionupdatepatch) | **PATCH** /v1/prevision/update | Update a specific prevision
*SourceApi* | [**v1SourceListGet**](docs/Api/SourceApi.md#v1sourcelistget) | **GET** /v1/source/list | All user sources
*SourceApi* | [**v1SourceSourceIdDelete**](docs/Api/SourceApi.md#v1sourcesourceiddelete) | **DELETE** /v1/source/{sourceId} | Delete a source and all linked data
*SourceApi* | [**v1SourceSourceIdGroupPatch**](docs/Api/SourceApi.md#v1sourcesourceidgrouppatch) | **PATCH** /v1/source/{sourceId}/group | Update a source group
*SourceApi* | [**v1SourceSourceIdPatch**](docs/Api/SourceApi.md#v1sourcesourceidpatch) | **PATCH** /v1/source/{sourceId} | Update a source
*SourceGroupApi* | [**v1SourceGroupCreatePost**](docs/Api/SourceGroupApi.md#v1sourcegroupcreatepost) | **POST** /v1/source-group/create | Create a new source groups
*SourceGroupApi* | [**v1SourceGroupGroupIdPatch**](docs/Api/SourceGroupApi.md#v1sourcegroupgroupidpatch) | **PATCH** /v1/source-group/{groupId} | Updates a group configuration
*SourceGroupApi* | [**v1SourceGroupListGet**](docs/Api/SourceGroupApi.md#v1sourcegrouplistget) | **GET** /v1/source-group/list | All source groups
*UserApi* | [**v1UserLoginPost**](docs/Api/UserApi.md#v1userloginpost) | **POST** /v1/user/login | Log the user in
*UserApi* | [**v1UserMeGet**](docs/Api/UserApi.md#v1usermeget) | **GET** /v1/user/me | Retrieve current user information
*UserApi* | [**v1UserRegisterDemoPost**](docs/Api/UserApi.md#v1userregisterdemopost) | **POST** /v1/user/register-demo | 
*ViewHelperApi* | [**v1ViewHelperAlertsGet**](docs/Api/ViewHelperApi.md#v1viewhelperalertsget) | **GET** /v1/view-helper/alerts | Get the alert view data
*ViewHelperApi* | [**v1ViewHelperAlertsRefGet**](docs/Api/ViewHelperApi.md#v1viewhelperalertsrefget) | **GET** /v1/view-helper/alerts-ref | Get the alert referential view data
*ViewHelperApi* | [**v1ViewHelperDaysNearDateSourceIdDayDateGet**](docs/Api/ViewHelperApi.md#v1viewhelperdaysneardatesourceiddaydateget) | **GET** /v1/view-helper/days-near-date/{sourceId}/{dayDate} | Get the alert modal view data


## Documentation For Models

 - [AlertCommentDto](docs/Model/AlertCommentDto.md)
 - [AlertDto](docs/Model/AlertDto.md)
 - [AlertFavoriteDto](docs/Model/AlertFavoriteDto.md)
 - [AlertListDto](docs/Model/AlertListDto.md)
 - [AlertRefDto](docs/Model/AlertRefDto.md)
 - [AlertRefListDto](docs/Model/AlertRefListDto.md)
 - [AlertRefResultDto](docs/Model/AlertRefResultDto.md)
 - [AnomaliesResponseDto](docs/Model/AnomaliesResponseDto.md)
 - [CreateSourceDayDto](docs/Model/CreateSourceDayDto.md)
 - [CreateSourceDto](docs/Model/CreateSourceDto.md)
 - [DayContext](docs/Model/DayContext.md)
 - [DayListDto](docs/Model/DayListDto.md)
 - [DayModelDto](docs/Model/DayModelDto.md)
 - [DayPatchDto](docs/Model/DayPatchDto.md)
 - [DayTrend](docs/Model/DayTrend.md)
 - [DayTrendInput](docs/Model/DayTrendInput.md)
 - [DayTrendInputListDto](docs/Model/DayTrendInputListDto.md)
 - [DayTrendListDto](docs/Model/DayTrendListDto.md)
 - [DaysNearDateResultDto](docs/Model/DaysNearDateResultDto.md)
 - [DaysPatchDto](docs/Model/DaysPatchDto.md)
 - [GeneratedDayContextBulkDto](docs/Model/GeneratedDayContextBulkDto.md)
 - [GeneratedDayTrendBulkDto](docs/Model/GeneratedDayTrendBulkDto.md)
 - [ImportDayDto](docs/Model/ImportDayDto.md)
 - [ImportDaysDto](docs/Model/ImportDaysDto.md)
 - [LoginDto](docs/Model/LoginDto.md)
 - [LoginResponseDto](docs/Model/LoginResponseDto.md)
 - [ModelDto](docs/Model/ModelDto.md)
 - [ModelListDto](docs/Model/ModelListDto.md)
 - [ModelPatchDto](docs/Model/ModelPatchDto.md)
 - [ModelsPatchDto](docs/Model/ModelsPatchDto.md)
 - [PrevisionApplyGroupDto](docs/Model/PrevisionApplyGroupDto.md)
 - [PrevisionApplyGroupResponseDto](docs/Model/PrevisionApplyGroupResponseDto.md)
 - [PrevisionBulkSaveDto](docs/Model/PrevisionBulkSaveDto.md)
 - [PrevisionBulkSaveResultDto](docs/Model/PrevisionBulkSaveResultDto.md)
 - [PrevisionDto](docs/Model/PrevisionDto.md)
 - [PrevisionListDto](docs/Model/PrevisionListDto.md)
 - [PrevisionPatchDto](docs/Model/PrevisionPatchDto.md)
 - [PrevisionSaveDto](docs/Model/PrevisionSaveDto.md)
 - [PrevisionUpdateResultDto](docs/Model/PrevisionUpdateResultDto.md)
 - [RecomputeDayModelsResponseDto](docs/Model/RecomputeDayModelsResponseDto.md)
 - [RecomputeDaysProjectionResponseDto](docs/Model/RecomputeDaysProjectionResponseDto.md)
 - [RecomputeModelsResponseDto](docs/Model/RecomputeModelsResponseDto.md)
 - [RecomputeSourceModelsResponseDto](docs/Model/RecomputeSourceModelsResponseDto.md)
 - [RequestDemoDto](docs/Model/RequestDemoDto.md)
 - [SourceDto](docs/Model/SourceDto.md)
 - [SourceGroupCreateDto](docs/Model/SourceGroupCreateDto.md)
 - [SourceGroupDto](docs/Model/SourceGroupDto.md)
 - [SourceGroupListDto](docs/Model/SourceGroupListDto.md)
 - [SourceGroupPatchDto](docs/Model/SourceGroupPatchDto.md)
 - [SourceListDto](docs/Model/SourceListDto.md)
 - [SourcePatchDto](docs/Model/SourcePatchDto.md)
 - [SourcePatchGroupDto](docs/Model/SourcePatchGroupDto.md)
 - [UserDto](docs/Model/UserDto.md)


## Documentation For Authorization


## bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




