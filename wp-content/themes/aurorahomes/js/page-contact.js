import { Loader } from '@googlemaps/js-api-loader';

let googleMapLoader = new Loader({
  apiKey: 'AIzaSyC2ESQaUfMU1zOeZdCbRwzLtEyK2bSg1Eg',
  version: 'weekly'
}).load().then(() => {
  let coordinates = {lat: -36.792960, lng: 174.772180};
  let map = new google.maps.Map(document.getElementById('map'), {
    center: coordinates,
    zoom: 14,
    disableDefaultUI: true
  });
});
