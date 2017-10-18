# Ratings
Access to all Rates Flag <br>
List of Scopes that can be used in Authorization:<br>
rates.read<br>
rates.create<br>
rates.delete<br>
rates.update



##/rates/rate_id/detail
This Endpoint returns the details about a single rate by ID 


```ruby
require 'rubygems' if RUBY_VERSION < '1.9'
require 'rest_client'

headers = {
  :content_type => 'application/json',
  :accept => 'application/json'
}

response = RestClient.get '
http://staging.api.hng.tech/rates/{rate_id}/detail?access_token=
', headers
puts response
```


```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "
http://staging.api.hng.tech/rates/{rate_id}/detail?access_token=
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


```javascript
var request = new XMLHttpRequest();

request.open('GET', '
http://staging.api.hng.tech/rates/flags/all?access_token=
');

request.setRequestHeader('Content-Type', 'application/json');
request.setRequestHeader('Accept', 'application/json');

request.onreadystatechange = function () {
  if (this.readyState === 4) {
    console.log('Status:', this.status);
    console.log('Headers:', this.getAllResponseHeaders());
    console.log('Body:', this.responseText);
  }
};

request.send();

```

```python
from urllib2 import Request, urlopen

headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
request = Request('
http://staging.api.hng.tech/rates/{rate_id}/detail?access_token=
', headers=headers)

response_body = urlopen(request).read()
print response_body
```
> The above command returns a json response structured like this:

```json
successful Generation
200

    Headers
    Content-Type:application/json
[
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

]

```

### HTTP Request

`GET http://staging.api.hng.tech/rates/rate_id/detail?access_token=`

### Query Parameters


Parameter | Default | Description
--------- | ------- | -----------
access_token | Nill | String.
rate_id | Nill | An integer.


##/rates/flags/all
This Endpoint returns all the available Flags


```ruby
require 'rubygems' if RUBY_VERSION < '1.9'
require 'rest_client'

headers = {
  :content_type => 'application/xml',
  :accept => 'application/json'
}

response = RestClient.get '
http://staging.api.hng.tech/rates/flags/all?access_token=
', headers
puts response
```


```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "
http://staging.api.hng.tech/rates/flags/all?access_token=
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



```javascript
var request = new XMLHttpRequest();

request.open('GET', '
http://staging.api.hng.tech/rates/flags/all?access_token=
');

request.setRequestHeader('Content-Type', 'application/json');
request.setRequestHeader('Accept', 'application/json');

request.onreadystatechange = function () {
  if (this.readyState === 4) {
    console.log('Status:', this.status);
    console.log('Headers:', this.getAllResponseHeaders());
    console.log('Body:', this.responseText);
  }
};

request.send();

```

```python
from urllib2 import Request, urlopen

headers = {
  'Content-Type': 'application/xml',
  'Accept': 'application/json'
}
request = Request('
http://staging.api.hng.tech/rates/flags/all?access_token=
', headers=headers)

response_body = urlopen(request).read()
print response_body
```
> The above command returns a json response structured like this:



```json
successful Generation
200

    Headers
    Content-Type:application/json

[
  {
    "status": "success",
    "message": "Available Flags",
    "data": {
      "flag_name": "BreakFast Inclusive",
      "id": 1
    }
  }
]

```

### HTTP Request

`GET http://staging.api.hng.tech/rates/flags/all?access_token=`

### Query Parameters

Parameter | Default | Description
--------- | ------- | -----------
access_token | Nill | string




##/rates/flag/id

This Endpoint returns all the Flags by rate id


```ruby
require 'rubygems' if RUBY_VERSION < '1.9'
require 'rest_client'

headers = {
  :content_type => 'application/json',
  :accept => 'application/json'
}

response = RestClient.get '
http://staging.api.hng.tech/rates/flag/{id}?access_token=
', headers
puts response
```


```php
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "
http://staging.api.hng.tech/rates/flag/{id}?access_token=
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



```javascript
var request = new XMLHttpRequest();

request.open('GET', '
http://staging.api.hng.tech/rates/flag/{id}?access_token=
');

request.setRequestHeader('Content-Type', 'application/json');
request.setRequestHeader('Accept', 'application/json');

request.onreadystatechange = function () {
  if (this.readyState === 4) {
    console.log('Status:', this.status);
    console.log('Headers:', this.getAllResponseHeaders());
    console.log('Body:', this.responseText);
  }
};

request.send();

```

```python
from urllib2 import Request, urlopen

headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
request = Request('
http://staging.api.hng.tech/rates/flag/{id}?access_token=
', headers=headers)

response_body = urlopen(request).read()
print response_body
```
> The above command returns a json response structured like this:



```json
successful Generation
200

    Headers
    Content-Type:application/json

[
  {
    "status": "success",
    "message": "All flags with rate 29981",
    "data": {
      "flag_name": "BreakFast Inclusive",
      "id": 1
    }
  },
]

```

### HTTP Request

`GET http://staging.api.hng.tech/rates/flag/{id}?access_token=`

### Query Parameters

Parameter | Default | Description
--------- | ------- | -----------
access_token | Nill | string
id | Nill| Number




























