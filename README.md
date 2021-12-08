# Build and run :
    docker-compose up --build
    docker-compose down
    docker-compose up -d
    
# Remove
    docker rm -vf $(docker ps -aq);
    docker rmi -f $(docker images -aq);
    docker volume rm $(docker volume ls -q);

# Other :
    docker build -t <image_name>:v1 ./
    docker run -d -p9090:80 <image_name>:v1 

    docker container ls
    docker stop 12a32e8928ef
    docker run -dp 8003:80 php_mysql_main_app
    docker exec -it 3b9de808e37c bash 

