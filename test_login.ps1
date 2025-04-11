# PowerShell 
Write-Host "Testing login functionality..."

# admin login
Write-Host "Testing admin login..."
$adminResponse = Invoke-WebRequest -Uri "http://localhost:8080/pages/login.php" -Method POST -Body @{username="admin"; password="password"} -MaximumRedirection 0 -ErrorAction SilentlyContinue
if ($adminResponse.Headers.Location -eq "./pages/SPSO/home.php") {
    Write-Host "Admin login test: SUCCESS" -ForegroundColor Green
} else {
    Write-Host "Admin login test: FAILED" -ForegroundColor Red
}

# student login
Write-Host "Testing student login..."
$studentResponse = Invoke-WebRequest -Uri "http://localhost:8080/pages/login.php" -Method POST -Body @{username="student"; password="password"} -MaximumRedirection 0 -ErrorAction SilentlyContinue
if ($studentResponse.Headers.Location -eq "./pages/Student/home.php") {
    Write-Host "Student login test: SUCCESS" -ForegroundColor Green
} else {
    Write-Host "Student login test: FAILED" -ForegroundColor Red
}

# Test invalid login
Write-Host "Testing invalid login..."
$invalidResponse = Invoke-WebRequest -Uri "http://localhost:8080/pages/login.php" -Method POST -Body @{username="invalid"; password="invalid"}
if ($invalidResponse.Content -match "Đăng nhập") {
    Write-Host "Invalid login test: SUCCESS" -ForegroundColor Green
} else {
    Write-Host "Invalid login test: FAILED" -ForegroundColor Red
}

Write-Host "Testing completed!" 