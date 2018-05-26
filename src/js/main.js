export default class Main {
  init () {
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register(`${window._template_urls.templateUrl}/dist/fixscope.php`,
        {scope: '/'}).then(registration => {
          console.log('SW registered: ', registration)
        }).catch(registrationError => {
          console.log('SW registration failed: ', registrationError)
        })
      })
    }
  }
}
