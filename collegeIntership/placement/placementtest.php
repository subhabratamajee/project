<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
    body
    {
    background-color: #000080;
    background-image: url("front pgec.jpeg");
    background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
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
       <MArquee> <b style="color: rgb(128, 48, 48);display: inline-block;background-color:yellow ; border: 2px solid rgb(128, 37, 37)";>PLACEMENT INFORMATIONS</b></MArquee>
    </h1>
    <div class="tbl">
          <?php
            include 'connection2.php';
            $select="SELECT * FROM placementtable";
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