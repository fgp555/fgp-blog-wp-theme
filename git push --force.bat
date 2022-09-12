@Echo off

:home
cls
echo ========== git status ==========
@git status
echo ========== git add . ==========
@git add .
@git commit --amend -m "01 version 2022.9.12"
@git push --force
echo ========== git log --oneline ==========
@git log --oneline
echo ========== git status ==========
@git status

pause