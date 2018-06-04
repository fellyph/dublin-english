export default class MapsFallback {
  constructor () {
    this.location = { latitude: 53.3488143, longitude: -6.2630998 }
  }

  init () {
    if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
      let mapsLink = document.querySelectorAll('[href^="geo:"]')
      mapsLink.forEach(element => {
        element.setAttribute('href',
        `https://maps.apple.com/?q=${this.location.latitude},${this.location.longitude}`)
      })
    }
  }
}
