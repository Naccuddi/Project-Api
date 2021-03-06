# Ratings
Access to all Rates Flag <br>
List of Scopes that can be used in Authorization:<br>
rates.read


The Ratings API returns the rates of at which rooms go for, rate flags, rate Ids, multiple flag rates and it also gives the admin some certain priviledges. This API has only the read scope peculiar to the normal user.



##Get details about a single rate<br>by Id

> Example request:

```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "
https://api.hotels.ng/rates/{rate_id}/detail?access_token=
");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);?>
```
>Example response:

```json

  {
    "status": "success",
    "message": "Rate",
    "data": {
      "id": 1,
      "property_id": 98319,
      "room_id": 10,
      "rate_name": null,
      "rate_tag_id": 1,
      "rack_price": 55000,
      "buying_price": 49500,
      "buying_price_usd\"": null,
      "selling_price": 55000,
      "selling_price_usd\"": null,
      "priority": 1,
      "start_date": {},
      "end_date": {},
      "active_start": {},
      "active_end": {},
      "active_mon": 1,
      "active_tue": 1,
      "active_wed": 1,
      "active_thu": 1,
      "active_fri": 1,
      "active_sat": 1,
      "active_sun": 1
    }
  }


```
This Endpoint returns the details about a single rate by ID 
### HTTP Request

`https://api.hotels.ng/rates/rate_id/detail?access_token= `

### Query Parameters


Parameter | Default | Description
--------- | ------- | -----------
access_token | Nill | String.
rate_id | Nill | An integer.

###Response Body

Attribute | Type | Description
--------- | ------- | -----------
        id| integer | Customer user-supplied webhook identifier.
property_id | integer | Id of the property supplied
room_id| integer| Id of a particular room
  rate_tag_id| integer | Id of the tag rate
 rack_price| integer | Price of the rack
buying_price | integer | Buying price
Selling_price | integer | Selling price


##Get all available flags

> Example request:

```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "
https://api.hotels.ng/rates/flags/all?access_token=
");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);?>
```
> Example response:

```json

  {
    "status": "success",
    "message": "Available Flags",
    "data": {
      "flag_name": "BreakFast Inclusive",
      "id": 1
    }
  }


```

This Endpoint returns all the available Flags

### HTTP Request

`https://api.hotels.ng/rates/flags/all?access_token= `

### Query Parameters

Parameter | type | Description
--------- | ------- | -----------
access_token | string | your access token

###Response Body

Attribute | Type | Description
--------- | ------- | -----------
  flag_name| string | Name of the flag rate



##Get flags by rate Id

> Example request:

```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "
https://api.hotels.ng/rates/flag/{id}?access_token=
");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);?>
```
> Example response:

```json


  {
    "status": "success",
    "message": "All flags with rate 29981",
    "data": {
      "flag_name": "BreakFast Inclusive",
      "id": 1
    }
  },


```
This Endpoint returns all the Flags by rate id
### HTTP Request

`https://api.hotels.ng/rates/flag/id?access_token= `

### Query Parameters

Parameter | Type | Description
--------- | ------- | -----------
access_token | string | Generated access token from Oauth2 developer credentials
id | Number| id to return all flag ratings

###Response Body

Attribute | Type | Description
--------- | ------- | -----------
  flag_name| string | Name of the flag rate
         id| integer| Id of the flag


##Fetch multiple flag rates by Id

> Example request:

```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "
https://api.hotels.ng/rates/flags/multiple/fetch?rate_ids=&access_token=
");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);?>
```
> Example response:



```json

  {
    "status": "success",
    "message": "Rate",
    "data": {
      "id": 1,
      "property_id": 98319,
      "room_id": 10,
      "rate_name": null,
      "rate_tag_id": 1,
      "rack_price": 55000,
      "buying_price": 49500,
      "buying_price_usd\"": null,
      "selling_price": 55000,
      "selling_price_usd\"": null,
      "priority": 1,
      "start_date": {},
      "end_date": {},
      "active_start": {},
      "active_end": {},
      "active_mon": 1,
      "active_tue": 1,
      "active_wed": 1,
      "active_thu": 1,
      "active_fri": 1,
      "active_sat": 1,
      "active_sun": 1
    }
  }


```
This Endpoint returns multiple rate flags by their id

### HTTP Request

`https://api.hotels.ng/rates/flags/multiple/fetch?rate_ids=&access_token=`

### Query Parameters

Parameter | Default | Description
--------- | ------- | -----------
access_token | Nill | string
rate_ids | Nill| string

###Response Body

Attribute | Type | Description
--------- | ------- | -----------
        id| integer | Customer user-supplied webhook identifier.
property_id | integer | Id of the property supplied
room_id| integer| Id of a particular room
  rate_tag_id| integer | Id of the tag rate
 rack_price| integer | Price of the rack
buying_price | integer | Buying price
Selling_price | integer | Selling price
priority| integer|priority of the rate flag



