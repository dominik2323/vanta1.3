function loadImage(url, callback) {
  var image = new Image();
  image.onload = function() {
    callback(null, image);
  };
  image.onerror = function() {
    callback(new Error('Could not load image at ' + url));
  };
  image.src = url;
}

function loadImages(urls, callback) {
  var returned = false;
  var count = 0;
  var result = new Array(urls.length);
  urls.forEach(function(url, index) {
    loadImage(url, function(error, item) {
      if (returned) return;
      if (error) {
        returned = true;
        return callback(error);
      }
      result[index] = item;
      count++;
      if (count === urls.length) {
        return callback(null, result);
      }
    });
  });
}
var dir = '../img/landingpage/';
var imageUrls = 
[dir+'server.jpg', dir+'generator.jpg', dir+'kombajn.jpg', dir+'vyhledavac.jpg', dir+'lavicka.jpg', dir+'traktor.jpg', dir+'electrolux.jpg', dir+'pila.jpg', dir+'tramvaj.jpg', dir+'pece.jpg', dir+'auto.jpg' dir+'server_col.jpg', dir+'generator_col.jpg', dir+'kombajn_col.jpg', dir+'vyhledavac_col.jpg', dir+'lavicka_col.jpg', dir+'traktor_col.jpg', dir+'electrolux_col.jpg', dir+'pila_col.jpg', dir+'tramvaj_col.jpg', dir+'pece_col.jpg', dir+'auto_col.jpg'];
loadImages(imageUrls, function(err, images) {
  if (err) throw err;
  console.log('All images loaded', images);
});