# JWT Bearer Authorisation Test

## Purpose

The purpose of this package is to test a JWT passed using the bearer authorisation header.

## Installation

1. Checkout this repository;
2. Install its dependency using `composer install --prefer-dist`
3. You may run this using the inbuilt PHP serer `php -S localhost:8000`
4. Obtain the `public key` for the JWT you will test and replace the file `oauth_public.key`

Use a different port if port 8000 is already in use.

## Performing the Test

Using a validly signed JWT, simply send an empty request to `index.php` with the Authorization header appropriately set.

## Example

```
curl --request GET \
  --url http://localhost:8000/index.php \
  --header 'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjcwZWZhNTExZWRiOWI3YTVkMDVjMGJmNjg2OThlNWYxNGUxOTI0YjY5ZDBkZDU3ZWQ4ZTZkNjg5ZmIyOWZmMjFkM2Y3OGRlYTY3MmIxNzE1In0.eyJhdWQiOiIyIiwianRpIjoiNzBlZmE1MTFlZGI5YjdhNWQwNWMwYmY2ODY5OGU1ZjE0ZTE5MjRiNjlkMGRkNTdlZDhlNmQ2ODlmYjI5ZmYyMWQzZjc4ZGVhNjcyYjE3MTUiLCJpYXQiOjE0ODU2MjY4MDAsIm5iZiI6MTQ4NTYyNjgwMCwiZXhwIjoxNDg2OTIyODAwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.e1abD-A-jKX-RNQtKV1ad1ZKqkbomOPt_fyQFJXgy31rZCbI_F40D5oGGgCdGz2DsiOZMznZzq9i9CKHL24v7uI8NXimci5TWzCsDv2bhTiv9eWzUBISjpSpsZxNca9deQGyODu6lO2OyQlnR_T9UE3TUE9ywSVEIE768ZI7p0jPmeWXzERtSYO732cob0-WFU-1X1XQWoRs3RrgDOcGr5X4rHTGr0adXd1gZQHyBdcdZDPfCkYXP-EktptpVmyOxC-beIUSxwv4bFoN1EzCkEUYXeLcvWee3bo0BLtBk5Ca14EdZhun3az4KT3eea6MQL0L3QNkaXsRGJKWr5ne5_H9TCItmcj-iTMB5sUVfBZeKG19fX4FX7Egsb9it_DaT1_IiHTgBrLgEgNoL3qMmZVGWRNwVYT4V773qo_GQQSDSxvzQhzEUJTjE93XxFPMSFCpJoH3qCPzgBYZi72jxwVHqqSVUpj1EZA7FLbWrTQ1rKMQg7m-KvUSbf21PFOPoMVXGbR2f4EZIItltY3_cZh6sgozKrJ6b7QoVYBef81KEWZA_Qkc8Iq7OLWZd1SaL-R1h1NBYt7DGs4LV0bt4s_-wBBP2Vaxdp-gF4j_EivUrvScv7q4nZId5kqs2TUaHQ4FwQf1k1W-HXCX0s8iM0dexdXc58Yrix4joHvxy7M' \
  --header 'cache-control: no-cache' \
  --header 'postman-token: 219393dd-4f76-4070-bc7f-548c8a8adfd1'
```
