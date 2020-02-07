set curpath=%~dp0
cd ..
xcopy *.* Y:\inetpub\wwwroot\CredMan /exclude:%curpath%\Exclusion_List.txt /e /i /s 