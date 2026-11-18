@echo off
echo ===================================================
echo   SYSTEQ India - Push to GitHub Repository
echo   Target: rajkumarbangal020-jpg/systeq-india-website
echo ===================================================
echo.
git push -u origin main --force
echo.
echo ===================================================
if %ERRORLEVEL% EQU 0 (
    echo [SUCCESS] Uploaded to GitHub successfully!
    echo Next: Go to https://github.com/rajkumarbangal020-jpg/systeq-india-website/settings/pages
    echo Set 'Source' to 'GitHub Actions' to view your live site!
) else (
    echo [ERROR] Push failed. Please check your GitHub credentials.
)
echo ===================================================
pause
