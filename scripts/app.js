(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()



document.addEventListener('DOMContentLoaded', function () {
  const closeBtn = document.querySelector('.btn-close');
  if (closeBtn) {
    closeBtn.addEventListener('click', function () {
      const modal = document.querySelector('#modalSignin');
      const modalInstance = bootstrap.Modal.getInstance(modal);
      modalInstance.hide();
    });
  }
});

