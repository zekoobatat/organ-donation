@echo off

if not ""%1"" == ""START"" goto stop

cmd.exe /C start /B /MIN "" "C:\xampp\htdocs\finalproject\z\apache\bin\httpd.exe"

if errorlevel 255 goto finish
if errorlevel 1 goto error
goto finish

:stop
cmd.exe /C start "" /MIN call "C:\xampp\htdocs\finalproject\z\killprocess.bat" "httpd.exe"

if not exist "C:\xampp\htdocs\finalproject\z\apache\logs\httpd.pid" GOTO finish
del "C:\xampp\htdocs\finalproject\z\apache\logs\httpd.pid"
goto finish

:error
echo Error starting Apache

:finish
exit
