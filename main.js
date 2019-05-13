var showButtons = false, player, stages;
functions setup(){
  createCanvas(window.innerWidth, window.innerHeight);
  var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
  if (isMobile) {
    showButtons = false;
  }
}
