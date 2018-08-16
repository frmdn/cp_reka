<script>
        $( document ).ready(function() {

        if (localStorage.getItem("email") === null) {
        console.log( "ready!" );
        } else {
        window.location.href = "index.html";
        }

        });
        </script> 