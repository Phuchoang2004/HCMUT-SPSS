#!/bin/bash

# Test script for login functionality
echo "Testing login functionality..."

# admin login
echo "Testing admin login..."
curl -s -X POST -d "username=admin&password=password" http://localhost:8080/pages/login.php | grep -q "Location: ./pages/SPSO/home.php" && echo "Admin login test: SUCCESS" || echo "Admin login test: FAILED"

# student login
echo "Testing student login..."
curl -s -X POST -d "username=student&password=password" http://localhost:8080/pages/login.php | grep -q "Location: ./pages/Student/home.php" && echo "Student login test: SUCCESS" || echo "Student login test: FAILED"

# Test invalid login
echo "Testing invalid login..."
curl -s -X POST -d "username=invalid&password=invalid" http://localhost:8080/pages/login.php | grep -q "Đăng nhập" && echo "Invalid login test: SUCCESS" || echo "Invalid login test: FAILED"

echo "Testing completed!" 