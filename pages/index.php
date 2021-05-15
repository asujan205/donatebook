
<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
  <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main-header-menu.js"></script>
    
    <link href = "css/jquery-ui.css" rel = "stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">
<style>
	.modal {
  display: none; /* Hidden by default */
  position:fixed ; /* Stay in place */
  z-index: 1; /* Sit on top */
  width: 20%; /* Full width */
  height: 70%; /* Full height */
  overflow:scroll ; /* Enable scroll if needed */
  background-color: ;
  padding-top: 50px;
}
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 0% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%; 
}
.close {
  position: absolute;
  right: 0px;
  top: -10px;
  font-size: 40px;
  font-weight: bold;
  color: #f4511e;
}


        .text1{
		 padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #0fd;
  box-sizing: border-box;
  border-radius:10px;
  width:100%;
	}

     
        
</style>
</head>
</head>
<body onload="indexData()">
	<div class="content">
		<header class="main-header" style="z-index: 1;">
        	<div class="container" style="z-index: 1">
        	
        </div>
    	</header>
    	<div style="width: 100%;height: 70px;z-index: 1;">
    	</div>
    	
		
			
    		<div style="width: 100%;height:85px;background-color: grey;" >
        
    		</div>
    	<div style="position: relative;">
    
    		<div class="body">
        <!-- <?php 
         // include('fetchdata.php');
        ?> -->
			
		</div>	
		</div>
	</div>
	 
    
   

<div id="id02" class="">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  
     <div class="donation">
     
        <h4>Fill up the details:</h4>
            <form action="donate.php" method="POST" enctype="multipart/form-data">
              <p>
              Image </p>
              <input type="file" name="donateimg" id="image" class="image">
              <p>Name</p>
            <input type="text" name="name"  id="name" placeholder="Enter name here"required>
             <p>Address</p>
                      <input type="text" id="address" name="address" placeholder="Enter address here"required>
           <p>Phone No.</p>
            <input type="text" id="phone" name="number" placeholder="Enter your phone no."required>
             <p>Books for donation</p>
            <input type="text" name="book" id="itemname" placeholder="Enter book donated"required>
            <p>Name of author.</p>
            <input type="text" name="auname"  id="items_number" placeholder="Enter author of books"required>
           <input type="submit" value="Donate us"  class="donate" id="alertconfirm"> <br><br><br><br><br>
           <input type="button"  class="ccl" style="color:red ;width: 70%;position: absolute;left: 13%;bottom: 10px;" name="" value="Cancel" onclick="document.getElementById('id02').style.display='none'">
             
             
            </form>
    </div>
  </div>
    <div> 

    <button style="position: fixed;bottom: 3px;left: 2%;padding: 5px;border-radius: 8px;background-color: #1c8adb;color: white;height: 50px;width: 100px;"  onclick="document.getElementById('id02').style.display='block'">Donate</button>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top" style="position: fixed;right: 2%; bottom: 10px;padding: 5px;border-radius: 8px;background-color: #1c8adb;color: white;height: 50px;width: 50px;">Top</button>

<script>

  

 
    window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;

            }
 
              //for toggle menu
        function openNav() {
          document.getElementById("mySidepanel").style.width = "250px";
        }

        function closeNav() {
          document.getElementById("mySidepanel").style.width = "0";
        }

  

</script>
</body>


</html>