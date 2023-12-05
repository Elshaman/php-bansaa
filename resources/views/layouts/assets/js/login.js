let btnSubmit = document.getElementById('submitBtn');


btnSubmit.addEventListener('click', event => {
    let username = document.getElementById('userInput').value;
    let password = document.getElementById('passwordInput').value;

    if(username.length == 0 || password.length == 0){
        Swal.fire({
            icon: 'error',
            text: 'No deje campos vacíos',
            confirmButtonText: 'Intentar de nuevo',
            confirmButtonColor: '#00324D'
        });
    }

    // Hacer la petición a la base de datos!
    //* Si la petición fué correcta, va este.
    if(username === 'admin' && password === 'admin'){
        let timerInterval;
        Swal.fire({
            title: 'Bienvenido!',
            html: 'Redireccionando...',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
         
            if (result.dismiss === Swal.DismissReason.timer) {
                location.reload();
            }
        })
    }

    //*Si la petición fue incorrecta
    if(username === 'error' && password === 'error'){
        Swal.fire({
            icon: 'error',
            text: 'Usuario y/o Contraseña incorrecta',
            confirmButtonText: 'Intentar de nuevo',
            confirmButtonColor: '#00324D'
        });
    }
})