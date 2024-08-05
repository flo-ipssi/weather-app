export interface Temperature {
  temp: number;
  feels_like: number;
  temp_min: number;
  temp_max: number;
  pressure: number;
  humidity: number;
}

export interface Weather {
  main: string;
  description: string;
}

export interface WeatherData {
  date: string;
  main: Temperature;
  weather: Weather;
  humidity: number;
  wind_speed: number;
}
