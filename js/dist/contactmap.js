

// Leaflet
var mymap = L.map('mapid').setView([52.235462735307294, 0.154262015014908], 15);
var mymap2 = L.map('mapid2').setView([52.576037413411186, 1.1366218466544036], 15);
var mymap3 = L.map('mapid3').setView([52.55581865448684, 1.7129035269914628], 15);
mymap.scrollWheelZoom.disable();
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox/streets-v11',
  tileSize: 512,
  zoomOffset: -1,
  accessToken: 'pk.eyJ1Ijoia2F5dm9udCIsImEiOiJja3RsOWgxaWswNzF4MnhvM3ZpbWJnaWh5In0.rUyAYbXJeXgkUyElCz0CsA'
}).addTo(mymap);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox/streets-v11',
  tileSize: 512,
  zoomOffset: -1,
  accessToken: 'pk.eyJ1Ijoia2F5dm9udCIsImEiOiJja3RsOWgxaWswNzF4MnhvM3ZpbWJnaWh5In0.rUyAYbXJeXgkUyElCz0CsA'
}).addTo(mymap2);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox/streets-v11',
  tileSize: 512,
  zoomOffset: -1,
  accessToken: 'pk.eyJ1Ijoia2F5dm9udCIsImEiOiJja3RsOWgxaWswNzF4MnhvM3ZpbWJnaWh5In0.rUyAYbXJeXgkUyElCz0CsA'
}).addTo(mymap3);
var marker = L.marker([52.235462735307294, 0.154262015014908]).addTo(mymap);
var marker2 = L.marker([52.576037413411186, 1.1366218466544036]).addTo(mymap2);
var marker3 = L.marker([52.55581865448684, 1.7129035269914628]).addTo(mymap3);