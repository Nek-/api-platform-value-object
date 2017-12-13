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
