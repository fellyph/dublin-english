export default class Main {
  init () {
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        console.log(window._template_urls)
        navigator.serviceWorker.register(`${window._template_urls.templateUrl}/dist/sw.js`).then(registration => {
          console.log('SW registered: ', registration)
        }).catch(registrationError => {
          console.log('SW registration failed: ', registrationError)
        })
      })
    }
  }
}