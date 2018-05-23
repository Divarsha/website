<!DOCTYPE html>
<html>
<head>
<title>Register With Us</title>      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
</head>
    
<body>
    
    <div class="container" id="form">
            
            <span>Name : </span><input type="text" placeholder="Enter full name" id="name"><br><br>
            <span>Email : </span><input type="text" placeholder="Enter valid email address" id="email"><br><br>
            <span>Contact : </span><input type="number" placeholder="Enter valid phone number" id="contact"><br><br>
            <span>Comments : </span><textarea rows="5" cols="50" placeholder="Anything you want to say" id="comments"></textarea><br><br>
            <button class="submit" id="submit">Register</button>
            
            <p id="output"></p>
    </div>

    
    <!--
      <div class="col-lg-offset-2 col-lg-8" id="panel">
        <h2>Get In Touch</h2>

        <form>

            <div class="group">
                <input type="text" required id="name">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Name</label>
            </div>

            <div class="group">
                <input type="text" required id="email">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
            </div>

            <div class="group">
                <input type="text" required id="contact">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Mobile No</label>
            </div>

            <div class="group">
                <input type="text" required id="comments">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Message</label>
            </div>
			<div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>City</label>
            </div>
            <div class="group">
                <center> <button type="submit" class="btn btn-warning" id="submit">Send <span class="glyphicon glyphicon-send"></span></button></center>
            </div>
        </form>

    </div>
    -->
</body>    
<style>
    #form{
        text-align: center;
        padding:20px;
        margin:40px;
        font-size:20px;

    }
    
    /*

    h2 {
    text-align: center;
    margin-bottom: 50px;
    color: #fff;
}


.group {
    position: relative;
    margin-bottom: 35px;
}

input {
    font-size: 18px;
    padding: 5px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
}

    input:focus {
        outline: none;
    }


label {
    color: #fff;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}

input:focus ~ label, input:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: #fff;
}

.bar {
    position: relative;
    display: block;
    width: 100%;
}

    .bar:before, .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #fff;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }




input:focus ~ .bar:before, input:focus ~ .bar:after {
    width: 50%;
}


.highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}


input:focus ~ .highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
}



#panel {
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    background: red; 
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); 
    border-radius: 4px;
    top: 30px;
	
}


.fa {
    padding: 20px;
    font-size: 30px;
    width: 40px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
}


.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
    background: #3B5998;
    color: white;
}
*/
</style>    
    <script>
        $(document).ready(function(){
                         $("#submit").click(function(){
            console.log("clicked");
            var name = $("#name").val();
            var email = $("#email").val();
            var contact = $("#contact").val();
            var comments = $("#comments").val();
                             
           var data = {name : name,email:email,contact:contact,comments:comments};
                             
            $.ajax({
               method: "POST",
                url:"contact.php",
                data:data,
                success : function(data){
                    $("#output").html(data);
                }
            });               
        });
     });
    </script>
</html>