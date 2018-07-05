# Welcome to API-Test!

This is just a simple app for private purpose.


# Clone

Git clone https://github.com/akbarkn/api-test.git

## Install Dependencies

Cd to project base directory, then run ```composer install```

## Run Unit Test Alone

At the project base directory, run ```php artisan test:unit```


## Run Integration Test Alone

At the project base directory, run ```php artisan test:integration```


## Run Both Unit And Integration Test

At the project base directory, run ```php artisan test:all```

## Run The App

At the project base directory, run ```php artisan serve```

## Create POST Request To App

```
curl \
-H "Content-Type: application/json" \
-H "Accept: application/json" \
-X POST \
-d '{"numbers":[1,2,6,10,8]}' \
http://localhost:8000/api/v1/test-result
```