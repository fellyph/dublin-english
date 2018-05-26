export default class ShareButton {
  constructor (element, title, text, url) {
    this.element = element
    this.title = title
    this.text = text
    this.url = url
  }

  init () {
    this.element.addEventListener('click', (event) => {
      if (navigator.share) {
        navigator.share({
          title: this.title,
          text: this.text,
          url: this.url
        })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error))
      } else {
        window.location = `whatsapp://send?text=${this.title} - ${this.url}`
      }
    })
  }
}
