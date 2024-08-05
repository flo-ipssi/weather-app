# Weather App

Cette application fournit les prévisions météorologiques quotidiennes pour une ville donnée en utilisant une API Symfony pour interroger l'API OpenWeatherMap et une interface utilisateur React construite avec Vite.

## Prérequis

- PHP 8
- Composer
- Node.js
- npm ou yarn

## Installation

### Backend (Symfony)

1. Clonez le dépôt :

   ```bash
   git clone https://github.com/flo-ipssi/weather-app
   cd back

2. Installez les dépendances 

   ```bash
   composer install

3. Configurez les variables d'environnement dans .env :

   ```bash
   OPENWEATHERMAP_API_KEY=your_api_key_here

4. Démarrez le serveur Symfony :

   ```bash
   symfony server:start


### Front (React)

1. Allez dans le dossier front :

   ```bash
   cd front

2. Installez les dépendances 

   ```bash
   npm install

3. Démarrez le serveur de développement Vite 

   ```bash
   npm run dev

