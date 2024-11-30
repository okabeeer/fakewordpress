  document.getElementById('logo').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const requiredWidth = 150; // Largeur requise
    const requiredHeight = 150; // Hauteur requise

    if (file) {
      const img = new Image();
      img.src = URL.createObjectURL(file);

      img.onload = function () {
        if (img.width !== requiredWidth || img.height !== requiredHeight) {
          document.getElementById('error-message').style.display = 'block';
          event.target.value = ''; // Réinitialise le champ
        } else {
          document.getElementById('error-message').style.display = 'none';
        }
      };
    }
  });

