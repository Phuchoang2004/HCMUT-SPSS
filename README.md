# HCMUT Software Engineering Project (HCMUT-SPSS)

A web-based smart printing service for HCMUT, supporting both student and admin (SPSO) roles. This project is part of the Software Engineering curriculum at HCMUT.

## Features

### Student
- Print documents
- View print history
- Buy additional print pages
- Manage account

### SPSO/Admin
- Manage printers (add, configure, view status)
- View and export reports
- View print history
- Configure printer settings

## Tech Stack
- PHP (session and file-based storage, no database required)
- HTML, CSS, JavaScript
- Docker (for easy deployment)

## Project Structure
- `HCMUT_SPSO_MAIN/` - Main application source code
- `Diagram/` - UML, architecture, use-case, class, component, and activity diagrams
- `Requirement and Report/` - SRS and other documentation
- `DOCKER_INSTRUCTIONS.md` - Detailed Docker setup and usage instructions

## Setup & Usage

### Prerequisites
- Docker Desktop for Windows
- Git

### Quick Start
1. Clone this repository.
2. Open a terminal in the project root directory.
3. Build and start the application:
   ```
   docker-compose up -d --build
   ```
4. Access the app at [http://localhost:8080](http://localhost:8080)

### Testing Login
- Run the test script:
  ```
  .\test_login.ps1
  ```
- Default users:
  - **Admin:** `admin` / `password`
  - **Student:** `student` / `password`
  - **Student 2:** `baolong` / `password`

### Stopping the Application
- To stop:
  ```
  docker-compose down
  ```
- To stop and remove all containers, networks, and volumes:
  ```
  docker-compose down -v
  ```

## How It Works
- No database required. User and print data are managed in PHP sessions and text files.
- All configuration and logs are stored within the Docker container.

## Documentation & Diagrams
- See the `Diagram/` folder for:
  - Use-case diagrams
  - Class diagrams
  - Component diagrams
  - Activity diagrams
  - Layered architecture diagrams
- See `Requirement and Report/` for the SRS and other documents.

## Authors
- HCMUT Software Engineering Project Team

---
For more details, see `DOCKER_INSTRUCTIONS.md` and the documentation folders.
