Remove :
    docker rm -vf $(docker ps -aq);
    docker rmi -f $(docker images -aq);
    docker volume rm $(docker volume ls -q);


Build and run :
    docker build -t phpdemo:v1 ./
    docker run -d -p9090:80 phpdemo:v1

    docker-compose up --build
    docker-compose down
    docker-compose up -d
    
Other :
    docker container ls
    docker stop 12a32e8928ef


Khoi tao container ben trong docker theo port setting
    docker run -dp 8003:80 php_mysql_main_app


Vao trong container :
    docker exec -it 3b9de808e37c bash 