/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    console.log("Dropdown toggled");   
    const dropdown = document.getElementById("myDropdown");
    dropdown.classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropdown')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

document.getElementById('service').addEventListener('change', function() {
  const service = this.value;
  const locationDropdown = document.getElementById('location');
  
  // Clear the location dropdown
  locationDropdown.innerHTML = '';

  // Menampilkan lokasi berdasarkan jasa yang dipilih
  if (service === 'web_design') {
    locationDropdown.innerHTML = `
      <option value="jakarta">Jakarta</option>
      <option value="surabaya">Surabaya</option>
      <option value="bali">Bali</option>
    `;
  } else if (service === 'digital_marketing') {
    locationDropdown.innerHTML = `
      <option value="bandung">Bandung</option>
      <option value="jakarta">Jakarta</option>
      <option value="yogyakarta">Yogyakarta</option>
    `;
  } else if (service === 'graphic_design') {
    locationDropdown.innerHTML = `
      <option value="jakarta">Jakarta</option>
      <option value="surabaya">Surabaya</option>
    `;
  } else {
    locationDropdown.innerHTML = `
      <option value="jakarta">Jakarta</option>
      <option value="bali">Bali</option>
    `;
  }
});

gsap.to('.element', { duration: 1, x: 100, ease: 'power2.inOut' });
