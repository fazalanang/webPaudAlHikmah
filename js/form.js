document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('registrationForm');
  const modal = new bootstrap.Modal(document.getElementById('infoModal'));

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    modal.show();
  });
});
