<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="contact">
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <h1>Contact Me : </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
          <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
        </div>
        <div class="alert alert-danger alert-dismissible fade show d-none my-error-alert" role="alert">
          <strong>Error!</strong> Mohon periksa input anda.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <form class="needs-validation" name="contact-me" autocomplete="off" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="nama" required>
            <div class="invalid-feedback">Nama lengkap tidak boleh kosong.</div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Silakan masukkan email yang valid.</div>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3" name="pesan" required></textarea>
            <div class="invalid-feedback">Pesan tidak boleh kosong.</div>
          </div>
          <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
          <button class="btn btn-primary btn-loading d-none" type="button" disabled>
            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
            <span role="status">Loading...</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwF31MJCyJ8WfKi9JdWEbL6GrIpLivOBLZhUvg8o7E05mPLb_q87We81DzleQmAotcv/exec';
  const form = document.forms['contact-me'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');
  const errorAlert = document.querySelector('.my-error-alert');

  // Bootstrap validation
  (() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
          displayErrorAlert();
        } else {
          errorAlert.classList.add('d-none');
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();

  function displayErrorAlert() {
    let errorMessage = "Form tidak valid: ";
    const fields = form.querySelectorAll('.form-control');

    fields.forEach(field => {
      if (!field.checkValidity()) {
        errorMessage += `- ${field.previousElementSibling.textContent} tidak boleh kosong. `;
      }
    });

    errorAlert.textContent = errorMessage;
    errorAlert.classList.remove('d-none');
    setTimeout(() => {
      errorAlert.classList.add('d-none');
    }, 8000); // Hide error alert after 8 seconds
  }

  form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
      return; // Stop if form is invalid
    }

    e.preventDefault();
    btnLoading.classList.remove('d-none');
    btnKirim.classList.add('d-none');

    fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
      })
      .then(response => {
        btnLoading.classList.add('d-none');
        btnKirim.classList.remove('d-none');
        myAlert.classList.remove('d-none');

        // Reset form and validation state
        form.reset();
        form.classList.remove('was-validated');
        errorAlert.classList.add('d-none');

        setTimeout(() => {
          myAlert.classList.add('d-none');
        }, 8000); // Hide success alert after 8 seconds

        console.log('Success!', response);
      })
      .catch(error => {
        console.error('Error!', error.message);
        btnLoading.classList.add('d-none');
        btnKirim.classList.remove('d-none');
        errorAlert.textContent = "Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.";
        errorAlert.classList.remove('d-none');
        setTimeout(() => {
          errorAlert.classList.add('d-none');
        }, 8000); // Hide error alert after 8 seconds
      });
  });
</script>

<?= $this->endSection(); ?>