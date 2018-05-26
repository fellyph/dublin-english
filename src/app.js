import './sass/main.scss'
import './js/checkConnection.js'
import Main from './js/main.js'
import ShareButton from './js/shareButton.js'


const mainApp = new Main()
const shareButtons = document.querySelectorAll('.btn--share')

shareButtons.forEach((element) => {
  let item = new ShareButton(element, element.dataset.title, element.dataset.text, element.dataset.url)
  item.init()
})

mainApp.init()
