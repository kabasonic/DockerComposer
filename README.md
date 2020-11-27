# DockerComposer
#### Projekt składa się z trzech kontenerów (PHP, MySQL oraz apache)
###### Żeby uruchomić projekt,  wpisz następujące polecenia:
###### W katalogu uruchamiamy następujące polecenia: 
###### docker-compose build docker-compose up
#### Jeżeli w przeglądarce występuje błąd, wpisz następujące polecenia:
* W polu adresu przeglądarki wpisać about:config
* Wyszukać frazę: network.security.ports.banned.override
* Jeżeli fraza istnieje, to po przecinku dodaj nowy numer portu: 6666.
* Jeżeli fraza nie istnieje, to naciśnij plus oraz podaj numer portu.
#### Dostęp do danych poprzez użycie polecenia curl w systemie linux: 
###### curl localhost:6666
