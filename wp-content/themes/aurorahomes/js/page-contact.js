import { Loader } from '@googlemaps/js-api-loader';

let googleMapLoader = new Loader({
  apiKey: 'AIzaSyCJwOrJjN-sht5ht6tyPUqGBNgFQRXK4P4',
  version: 'weekly'
}).load().then(() => {
  let coordinates = {lat: -36.792960, lng: 174.772180};
  let map = new google.maps.Map(document.getElementById('map'), {
    center: coordinates,
    zoom: 14,
    disableDefaultUI: true
  });
});
