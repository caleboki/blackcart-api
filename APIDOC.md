# API Documentation

This project mocks data requests to external APIs.

## Description 

The following endpoints are available:

- App URL: ```http://localhost```
- List Platforms (GET): ```http://localhost/api/stores```
- View Platform (GET): ```http://localhost/api/stores/{store}```
- View Platform Products (GET): ```http://localhost/api/stores/{store}/products```
- Create new Platform (POST): ```http://localhost/api/stores```
- Delete Platform (Delete): ```http://localhost/api/stores/{stores}```

## Authentication

This API does not require authentication

## Example usage

```
curl http://localhost/api/stores
```

## Example response

```
[
    {
        "id": 2,
        "platform": "shopify"
    },
    {
        "id": 3,
        "platform": "woocommerce"
    }
]
```
