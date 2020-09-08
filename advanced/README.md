## Advanced Services
---

### Example
Show full config:
```shell
#Run from repo root directory
docker-compose -f docker-compose.yml -f advanced/es.yml config
```

#### Another way via enviroment variables
Set `COMPOSE_FILE` variable like:
```shell
export COMPOSE_FILE="docker-compose.yml:advanced/es.yml"
```
And run the command without specifying files:
```shell
docker-compose config
```
