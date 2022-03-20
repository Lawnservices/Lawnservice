  var a = window.sr = ScrollReveal();

  sr.reveal('.text-primary', {
      duration: 3000,
      origin: 'top',
      distance: '100px',
  });

  sr.reveal('.headline', {
      duration: 3000,
      origin: 'right',
      distance: '260px',

  });

  sr.reveal('#avajo', {
      duration: 3000,
      origin: 'bottom',
      distance: '200px',

  });
  sr.reveal('.btn', {
      duration: 3000,
      origin: 'right',
      distance: '200px',
  });



  function out(obj) {
      obj.innerHTML = " we will create green places to enjoy with your family"
      var a = document.getElementById("verde").style.color = "#fff";
  }

  function over(obj) {
      obj.innerHTML = "WE HAVE THE BEST PRICES IN THE MARKET MAKE A FREE ESTIMATE"
      var a = document.getElementById("verde").style.color = "green";
  }
  (function() {
      setInterval(function() {
          var letras = document.getElementById("laguna"),
              colores = ["white", "green"];
          letras.style.color = colores[Math.floor(Math.random() * colores.length)];

      }, 1000);
  }())