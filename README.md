#SAAS
## Shit as a Service

Inspired by [FOAAS](http://foaas.com)

##API

**Base URL**: `the.shittie.st/api`

**Response**: Depending on the `Accept` header value passed the api will return either `text/plain` or `application/json`

* When response is JSON encoded the following format will be followed

```json
JSON encoded
{
  "message": "the message"
}
```
* When `text/plain` it will just return the message

### /

message: 'shit'

### /shit/:count

message: 'shit' :count number of times

### /shit/:name

message: ':name is shit'

### /shit/:name/fuck

message: ':name is fucking shit'

### /shittiest/:name

message: ':name is the shittiest person'

### /fuck

message: 'fucking shit'

### /you

message: 'you are shit'

### /this

message: 'this is shit'

### /everything

message: 'everything is shit'

### /goddamn

message: 'god damn piece of shit'

### /goddamn/:expletive

message: 'god damn piece of :expletive shit'

