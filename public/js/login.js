document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.querySelector('.login-form');
    loginForm.classList.add('login-form-hidden');

    setTimeout(() => {
        loginForm.classList.replace('login-form-hidden', 'login-form-visible');
    }, 100);
});
