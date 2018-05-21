// https://developer.mozilla.org/en-US/docs/Web/API/NavigatorOnLine/onLine

// check if the browser is online
function goOnline () {
  document.body.classList.remove('offline')
  document.body.classList.add('online')
}

function goOffline () {
  document.body.classList.add('offline')
  document.body.classList.remove('online')
}

// listen to check when the status change
window.addEventListener('offline', _ => goOffline())
window.addEventListener('online', _ => goOnline())
