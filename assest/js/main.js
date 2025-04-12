let Q = jQuery.noConflict();
Q(document).ready(function () {
    Q('.register-form').submit(function (e) {
        e.preventDefault();
        let username = Q('#username').val();
        let password = Q('#password').val();
        let email = Q('#email').val();
        let test = Q('#register-form').data('test');
        Q.ajax({
            url: 'user.php',
            type: 'POST',
            data: {
                action: 'userLogin',
                username: username,
                password: password,
                email: email,
                test: test
            },
            success: function (response) {
                let data = JSON.parse(response);
                if (data.success == 12) {
                    Q.toast({
                        text: data.massage,
                        icon: 'success',
                        showHideTransition: 'slide',
                        allowToastClose: true,
                        hideAfter: 5000,
                        stack: false,
                        position: 'bottom-left',
                        textAlign: 'left',
                        loader: true,
                        loaderBg: '#9EC600',
                    });
                } else {
                    Q.toast({
                        text: data.massage,
                        icon: 'error',
                        showHideTransition: 'slide',
                        allowToastClose: true,
                        hideAfter: 5000,
                        stack: false,
                        position: 'bottom-left',
                        textAlign: 'left',
                        loader: true,
                        loaderBg: '#9EC600',
                    });
                }
            },
            error: function (error) {
                $.toast({
                    text: data.massage,
                    heading: 'Note',
                    icon: 'error',
                    showHideTransition: 'slide',
                    allowToastClose: true,
                    hideAfter: 5000,
                    stack: false,
                    position: 'bottom-left',
                    textAlign: 'left',
                    loader: true,
                    loaderBg: '#9EC600'
                });
            }
        })
    })
})