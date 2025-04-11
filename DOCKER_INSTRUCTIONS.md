# Docker Setup for HCMUT-SPSS Login Application

## Prerequisites
- Docker Desktop for Windows installed
- Git repository cloned to your local machine

## Building and Running the Application

1. Open a PowerShell terminal in the project root directory

2. Build and start the Docker containers:
   ```
   docker-compose up -d --build
   ```

3. The application will be available at:
   ```
   http://localhost:8080
   ```

## Testing the Login Functionality

1. Ensure that the Docker containers are running

2. Run the test script to verify login functionality:
   ```
   .\test_login.ps1
   ```

3. Test users available:
   - **Admin**: username: `admin`, password: `password`
   - **Student**: username: `student`, password: `password` 
   - **Student 2**: username: `baolong`, password: `password`

## Troubleshooting

- If you encounter permission issues, ensure Docker Desktop has proper permissions
- Check Docker logs for any errors:
  ```
  docker-compose logs
  ```

## Stopping the Application

To stop the containers:
```
docker-compose down
```

To stop and remove all containers, networks, and volumes:
```
docker-compose down -v
``` 