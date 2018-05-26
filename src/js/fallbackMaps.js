export default class MapsFallback {
  constructor () {
    this.location = { latitude: 53.3488143, longitude: -6.2630998 }
  }

  init () {
    if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
      let mapsLink = document.querySelectorAll('[href^="geo:"]')
      mapsLink.forEach(element => {
        element.attributes('href',
        `https://maps.apple.com/?q=${this.location.latitude},${this.location.longitude}`)
      })
    }
  }
}
/*
getMapLink(location : PlaceLocation) {
  let query = "";
  if (location.latitude) {
    query = location.latitude + "," + location.longitude;
  } else {
    query = `${location.address}, ${location.city}`;
  }
  if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
    return `https://maps.apple.com/?q=${query}`;
  } else {
    return `https://maps.google.com/?q=${query}`;      
  }
  // Universal Link
  // <a href="https://maps.google.com/?q=Eiffel+Tower">
  // <a href="https://maps.apple.com/?q=34.44,56.44">
}*/