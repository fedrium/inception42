dockup:
	sudo docker compose -f ./srcs/docker-compose.yml build
	sudo docker compose -f ./srcs/docker-compose.yml up

dockdown: 
	sudo docker compose -f ./srcs/docker-compose.yml down

dockrm:	
	sudo docker system prune -a && sudo docker image prune -a && sudo docker volume prune -a