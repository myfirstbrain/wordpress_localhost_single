# sposób na bezpieczne uruchomienia wordpressa
 
uruchamiamy:
docker compose build
docker compose up

konfiguracja tworzy na localhoscie pojedynczy kontener ze stroną wordpressa,
i generują sie certyfikaty, aby przeglądarka widziała strone jako zaufaną
dodajemy  w menu ustawienia przeglądarki certyfikat urzędu bezpieczeństwa, który pojawia sie po uruchomieniu kontenerów: html/rootCA.pem , 
czyli w przeglądarce => ustawienia/prywatność i bezpieczeństwo/zarządzaj certyfikatami/ urzędy certyfikacji/wystawcy/importuj: html/rootCA.pem
i jest "nazwa org-mkcert development CA"
,restartujemy przegladarke


pod adresem https://localhost
jest bezpieczna strona   

