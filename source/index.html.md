---
title: Hotels.ng API Docs

language_tabs: # must be one of https://git.io/vQNgJ
  - shell
  - ruby
  - php
  - javascript

includes:
  - search
  - bookings
  - images
  - facilities
  - reviews
  - locations
  - rooms
  - ratings
  - reports
  - users

toc_footers:
  - <a href='#'>Sign Up for a Developer Key</a>
  - <a href='https://github.com/tripit/slate'>Documentation Powered by Slate</a>

includes:
  - errors

search: true
---

# Introduction

Welcome to the Hotels.ng API! You can use our API to integrate within your applications.

# Authentication

> To authorize, use this code:

```ruby
require 'kittn'

api = Kittn::APIClient.authorize!('meowmeowmeow')
```

```python
import kittn

api = kittn.authorize('meowmeowmeow')
```

```shell
# With shell, you can just pass the correct header with each request
curl "api_endpoint_here"
  -H "Authorization: meowmeowmeow"
```

```javascript
const kittn = require('kittn');

let api = kittn.authorize('meowmeowmeow');
```

> Make sure to replace `meowmeowmeow` with your API key.

Kittn uses API keys to allow access to the API. You can register a new Kittn API key at our [developer portal](http://example.com/developers).

Kittn expects for the API key to be included in all API requests to the server in a header that looks like the following:

`Authorization: meowmeowmeow`

<aside class="notice">
You must replace <code>meowmeowmeow</code> with your personal API key.
</aside>

# Search

Search for Hotels with parameters 
Scope to be used in Authorization 
Query For a List
For a List of parameter values, *see below*
Property_type : 
*	`'Villa'`, 
*	`'Apartment'`,
*	`'Guest House'`,
*	`'Hotel'`, 
*	`'Luxury Hotel'`, 
*	`'Guest House'`

## /search
	
	This enpoint allows you to search For Hotels

>###	 HTTP Request

>	GET `http://staging.api.hng.tech/search?access_token=&with_images=&with_rates=&filters=&search_type=&property_type=`

```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://staging.api.hng.tech/search?access_token=&with_images=&with_rates=&filters=&search_type=&property_type=");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "[
  {
    \"state\": \"id ullamco in\"
  },
  {
    \"country\": \"elit aliquip\",
    \"city\": \"minim commodo\",
    \"state\": \"exercitation pariatur non cupidatat\"
  }
]");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

?>```


### Query Parameters

Parameter |  Type | Description | Required |
--------- | ------- | ----------- | -----------
access_token | Number | Local id assigned to that booking | True
with_images | Boolean | Generated access token from Oauth2 developer credentials | False
with_rates | Boolean | Generated access token from Oauth2 developer credentials | False
filters | String | Generated access token from Oauth2 developer credentials | False
search_type | String | Generated access token from Oauth2 developer credentials | False
property_type | String | Generated access token from Oauth2 developer credentials | False

 
## /search/nearby

## /search/location/count/bulk


# Kittens

## Get All Kittens

```ruby
require 'kittn'

api = Kittn::APIClient.authorize!('meowmeowmeow')
api.kittens.get
```

```python
import kittn

api = kittn.authorize('meowmeowmeow')
api.kittens.get()
```

```shell
curl "http://example.com/api/kittens"
  -H "Authorization: meowmeowmeow"
```

```javascript
const kittn = require('kittn');

let api = kittn.authorize('meowmeowmeow');
let kittens = api.kittens.get();
```

> The above command returns JSON structured like this:

```json
[
  {
    "id": 1,
    "name": "Fluffums",
    "breed": "calico",
    "fluffiness": 6,
    "cuteness": 7
  },
  {
    "id": 2,
    "name": "Max",
    "breed": "unknown",
    "fluffiness": 5,
    "cuteness": 10
  }
]
```

This endpoint retrieves all kittens.

### HTTP Request

`GET http://example.com/api/kittens`

### Query Parameters

Parameter | Default | Description
--------- | ------- | -----------
include_cats | false | If set to true, the result will also include cats.
available | true | If set to false, the result will include kittens that have already been adopted.

<aside class="success">
Remember — a happy kitten is an authenticated kitten!
</aside>

## Get a Specific Kitten

```ruby
require 'kittn'

api = Kittn::APIClient.authorize!('meowmeowmeow')
api.kittens.get(2)
```

```python
import kittn

api = kittn.authorize('meowmeowmeow')
api.kittens.get(2)
```

```shell
curl "http://example.com/api/kittens/2"
  -H "Authorization: meowmeowmeow"
```

```javascript
const kittn = require('kittn');

let api = kittn.authorize('meowmeowmeow');
let max = api.kittens.get(2);
```

> The above command returns JSON structured like this:

```json
{
  "id": 2,
  "name": "Max",
  "breed": "unknown",
  "fluffiness": 5,
  "cuteness": 10
}
```

This endpoint retrieves a specific kitten.

<aside class="warning">Inside HTML code blocks like this one, you can't use Markdown, so use <code>&lt;code&gt;</code> blocks to denote code.</aside>

### HTTP Request

`GET http://example.com/kittens/<ID>`

### URL Parameters

Parameter | Description
--------- | -----------
ID | The ID of the kitten to retrieve

## Delete a Specific Kitten

```ruby
require 'kittn'

api = Kittn::APIClient.authorize!('meowmeowmeow')
api.kittens.delete(2)
```

```python
import kittn

api = kittn.authorize('meowmeowmeow')
api.kittens.delete(2)
```

```shell
curl "http://example.com/api/kittens/2"
  -X DELETE
  -H "Authorization: meowmeowmeow"
```

```javascript
const kittn = require('kittn');

let api = kittn.authorize('meowmeowmeow');
let max = api.kittens.delete(2);
```

> The above command returns JSON structured like this:

```json
{
  "id": 2,
  "deleted" : ":("
}
```

This endpoint retrieves a specific kitten.

### HTTP Request

`DELETE http://example.com/kittens/<ID>`

### URL Parameters

Parameter | Description
--------- | -----------
ID | The ID of the kitten to delete

