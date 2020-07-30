$(function(){
    $('#login-bs').submit(function(e){
        $('#loginloader').show()
        e.preventDefault();
        username_value = $('#username').val()
        password_value = $('#password').val()
        $.ajax({
            type: 'POST', url: 'php/authenticate.php', data: {
                username: username_value, password: password_value
            }, success: function(data){
                if(data==''){
                    location="music-list.php"
                }
                else{
                    $('#login-error').html(data)
                    $('#login-error').show()
                    $('#loginloader').hide()
                }
            }

        })
    })
})


$(function(){
    $('logout-bs').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'php/logout.php'
        },
        )
        
    }
}