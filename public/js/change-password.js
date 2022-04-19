    var form = document.getElementById('changePassword')
    form.addEventListener('submit', function(ev) {
        ev.preventDefault();
        csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var formData = new FormData(form)
            console.log(formData)
            var url = document.getElementById('change_password_url').value
            document.getElementById('old_password').innerHTML=''
            document.getElementById('password').innerHTML=''
            document.getElementById('new_password').innerHTML=''

            fetch(url,{
                method: 'POST',
                headers: {'X-CSRF-TOKEN':csrf },
                body: formData
            }).then(async response => {
                    if (!response.ok) {   
                        const validation = await response.json();
                
                        for (const key in validation.errors) {
                            if (validation.errors.hasOwnProperty.call(validation.errors, key)) {
                                document.getElementById(key+'').innerHTML=''
                                const element = validation.errors[key][0];
                                document.getElementById(key+'').innerHTML=element

                            }
                        }
                    }else{
                        document.getElementById('success').innerHTML=(await response.json()).success
                    }
            })

    }, false)
