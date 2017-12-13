ApiPlatform with ValueObject
============================

Run the project with docker
---------------------------

```bash
docker build . -t test:api-platform-value-object

# Run the docker
docker run -it -v `pwd`:/project -d -p 8000:8000 test:api-platform-value-object

# Open a terminal inside the docker
docker ps
docker exec -it {docker_id} bash
```

In the docker : 

```bash
composer install
```


Issue
-----

The following call generates an unexpected error.

- 400 is the good result code
- "Cannot create an instance of App\\Entity\\Address from serialized data because its constructor requires parameter \"line1\" to be present." is not an acceptable error to return to the user of the API

```
curl -X POST "http://localhost:8000/api/users" -H "accept: application/ld+json" -H "Content-Type: application/ld+json" -d "{ \"name\": \"string\", \"address\": \"string\"}"
```
