class KolleDeviceDetector {
  constructor() {
  }

  static getDevice() {

    var indicator = document.querySelector('.device-indicator');

    if(!indicator) {
      indicator = document.createElement('div');
      indicator.className = 'device-indicator';
      document.body.appendChild(indicator);
    }

    var device_string = window.getComputedStyle( indicator, ':before').getPropertyValue('content');

    return device_string.replace(/"/g,"");
  }

  static isMobile() {

    switch (this.getDevice()) {
      case "mobile":
        return true
        break;
      default:
        return false
     }
  }

  static isDesktop() {

    switch (this.getDevice()) {
      case "big":
      case "tablet":
      case "mobile":
        return true
        break;
      default:
        return false
     }
  }

}