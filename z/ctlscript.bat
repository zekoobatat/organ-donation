@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\xampp\htdocs\finalproject\z\hypersonic\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\ingres\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\ingres\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\mysql\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\mysql\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\postgresql\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\postgresql\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\apache\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\apache\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\openoffice\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\openoffice\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\apache-tomcat\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\resin\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\resin\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\jetty\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\jetty\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\subversion\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\xampp\htdocs\finalproject\z\lucene\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\lucene\scripts\ctl.bat START)
if exist C:\xampp\htdocs\finalproject\z\third_application\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\xampp\htdocs\finalproject\z\third_application\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\third_application\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\lucene\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\xampp\htdocs\finalproject\z\subversion\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\subversion\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\jetty\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\jetty\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\hypersonic\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\resin\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\resin\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\xampp\htdocs\finalproject\z\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\openoffice\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\openoffice\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\apache\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\apache\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\ingres\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\ingres\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\mysql\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\mysql\scripts\ctl.bat STOP)
if exist C:\xampp\htdocs\finalproject\z\postgresql\scripts\ctl.bat (start /MIN /B C:\xampp\htdocs\finalproject\z\postgresql\scripts\ctl.bat STOP)

:end

