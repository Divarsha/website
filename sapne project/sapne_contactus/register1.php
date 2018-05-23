<!-- Last Updated on 13-1-18 by Prithviraj -->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


        <title>Register</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <style>
            .row_style{
                margin-top:10px;
            }
			#banner_image{
    padding-top: 75px;
padding-bottom: 50px;
text-align: center;
 background-color: #101010;
 color: #9d9d9d;
 background: url(img/13.jpeg) no-repeat center center;
 background-size: cover;
}
#banner-content{
    position: relative;
 padding-top: 6%;
 padding-bottom: 6%;
 margin-top: 12%;
 color:#ffffff;
margin-bottom: 12%; background-color: rgba(0, 0, 0, 0.7);
max-width: 660px;
}

		.jumbotron {
   background: rgb(0, 0, 0); /* This is for ie8 and below */
   background: rgba(0, 0, 0, 0.3); }
  
.vl {
    border-left: 6px solid white;
    height: 290px;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 0;
}

        </style>
    </head>
    <body>
   <?php
        include 'header.php';
        ?>
		<div id="banner_image">

        
        <div class="container">
		 <div class="row">
                <div class="col-sm-5 col-md-5" >
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Contact with the Team</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Please fill the following details</p>
                             <div class="container" id="form">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                  
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="name"  required  id="name">
                        </div>
                     
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" placeholder="email" required id="email">
                        </div>
                      
                       <div class="form-group">
                            <textarea rows="5" cols="50"  class="form-control" name="comments" placeholder="query" required id="comments"></textarea>
                        </div>
                    
                        <div class="form-group">
                            <input type="number"  class="form-control" name="contact" placeholder="contact" required id="contact">
                        </div>
                        
                       
                        <button  type="submit" class="btn btn-primary" id="submit" data-toggle="modal" data-target="#myModal">submit</button>
						  <button type=reset class="btn btn-danger" id="reset">reset</button>
						  
						
               
				</div>
                </div>
            </div>
        </div>
		</div>
      

       </div>
	   
	
		<!--
        <div id="banner_image">
    <center>
        
        <div class="container">
		<div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>CONTACT</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">CONTACT FOR ANY QUERY (AVG RESPONSE TIME= 5 MIN</p>
                             <div class="container">
            <div class="row">
                <div class="col-xs-4 ">
                    
                 <form method="POST" action="contactscript.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="name" >
                        </div>
                     
                        <div class="form-group">
                            <input type="text"  class="form-control" name="email" placeholder="email">
                        </div>
                       <div class="form-group">
                            <input type="text"  class="form-control" name="suggest" placeholder="suggest">
                        </div>
                    
                        <div class="form-group">
                            <input type="contact"  class="form-control" name="phone" placeholder="phone">
                        </div>
                        
                       
                        <button type=submit class="btn btn-primary">submit</button>
                       
                    </form>
                </div>
            </div>
     </div>
	</div>
	</div>
	-->


  <div class="col-sm-5 col-sm-offset-2 col-md-5">
 <div class="jumbotron" class="col-xs-5" style="color:#fff;">
  <div class="row">
 
   
    
     <h2 style ="font-family: 'Bree Serif', serif; !important;color:#fff;"><strong>CONTACT US  FOR ANY QUERY:</strong></h2><blockquote class="blockquote-reverse"><em>
Sapne is working towards developing skills and providing special teaching aids in order to make the knowledge accessible to all.
	  This will be done through our Gurukuls, or Education centres, for children where they can learn, play and get a chance of realizing their sapne(dreams)<br>
	 <strong> The ultimate aim is to create a highly aware generation of youth that is not susceptible to social and financial barriers and can fight their own battles with the power of knowledge and skills</strong></blockquote>
    </em></div></div>
  </div></div>
		
		</div>
          
     </div>       
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		 <img src="sapne.png" alt="" height="100" width="260">
		 <br><br>
          <h2 class="modal-title" > <img src="sapnelogo-3.png" alt="" height="42" width="42">SAPNE TEAM</h2>
        </div>
        <div class="modal-body">
          <h4 id="output" style="font-size:20px;"></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-block btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    
        
    

</body>
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
            $("#reset").click(function(){
               $("#name").val(''); 
                $("#email").val(''); 
                $("#contact").val(''); 
                $("#comments").val(''); 
            });
     });
    </script>
</html>