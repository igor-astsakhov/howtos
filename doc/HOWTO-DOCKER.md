
- [HOME](../../../)

##How to Docker
```
docker swarm init --advertise-addr <MANAGER-IP>
docker swarm join --token <TOKEN> <MANAGER-IP>:2377
docker node ls
docker service create --name my-web --replicas 3 --publish published=8080,target=80 nginx

Common Management CommandsList services: docker service lsCheck service status: docker service ps <service-name>Scale a service: docker service scale <service-name>=5Remove a service: docker service rm <service-name>Deploy using Compose: Use docker stack deploy -c docker-compose.yml <stack-name> to deploy multi-container apps defined in a Compose file.
```
