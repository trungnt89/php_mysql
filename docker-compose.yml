version: '3.8'

services:
    main_app:
        build: 
            context: .
            dockerfile: Dockerfile
        ports:
        - 8001:80
        volumes:
        - ./src:/var/www/html/
    db:
        image: mysql
        command: --default-authentication-plugin=mysql_native_password
        restart: always
        environment:
            MYSQL_ROOT_PASSWORD: example
        volumes: 
            - sqlData:/var/lib/mysql
    
    adminer:
        image: adminer
        restart: always
        ports:
            - 8002:8080
volumes: 
    sqlData: