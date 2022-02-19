
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
    body
    {
    background-color: #000080;
    
   
    background: url("front\ pgec.jpeg")no-repeat center     ;
    /* background-size: cover; */
    /* background-position: top; */
    /* background-repeat: no-repeat; */
    padding: 5% 20%;
    text-align: center;
    }
    main {
  padding: 1em;
}
.tbl
{
    background-color: rgba(200,200,250,0.8);
    border-radius: 1em;
    padding: 5% 10%;
    text-align: left;
}
p
{
    font-size: 1.5em;
}
</style>
<body>
    <main>
    <h1 class="bol" >
       <marquee> <b style="color: rgb(128, 48, 48);display: inline-block;background-color:yellow ; border: 2px solid rgb(129, 37, 37)";>INTERNSHIP INFORMATIONS</b></marquee>
    </h1>
    <div class="tbl">
<!--         
    			<h2 style="font-weight: bold;">NAME -</h2>
    			
    			 -->
    		
    		<?php
    		/*
            include 'connection.php';
            $select="SELECT * FROM scholarship";
            $query=mysqli_query($con,$select);
            
            while($res=mysqli_fetch_array($query)){
                */
	        
            	?>
            <!-- <ul>
    			<li><p><?php echo $res['Name']?><p></li>
                </ul> -->
    			
    			
    			
    		
    		<?php
            /*
            }
            */
            ?>
            
            <!-- <h2 style="font-weight: bold;">Link -</h2> -->
                
                
            
            <?php
            include 'connection.php';
            $select="SELECT * FROM internship";
            $query=mysqli_query($con,$select);
            
            while($res=mysqli_fetch_array($query)){
            
                ?>
            <ul>
                <li><p><?php echo $res['link']?><p></li>
                </ul>
            
                <?php
            }
            ?>
    	</div>

</main>
</body>
</html>