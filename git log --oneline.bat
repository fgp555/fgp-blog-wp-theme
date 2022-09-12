@Echo off

:home
cls
echo ========== git status ==========
@git status
echo ========== git log --oneline ==========
@git log --oneline

pause