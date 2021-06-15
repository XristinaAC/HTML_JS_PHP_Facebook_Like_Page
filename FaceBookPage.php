<html>
    <meta charset ="UTF-8"/> 
    <head>
        <title>Facebook Page</title>
    </head>
    <style>
        * {box-sizing: border-box;}

        body
        {
            font-family: Arial;
            padding:20px;
            background: #f1f1f1;
        }

        p
        {
            margin: 40px;
        }

        #profile_picture
        {
           border-radius: 50px;
           vertical-align: middle;
        }

        #Profil
        {
            height: 300px;
            width: 25%;
            float:left;
        }

        #Epafes
        {
            width: 25%;
            float:right;
        }

        #Shares
        {
            width: 50%;
            align-content: center;
            float: left;
        }

        .Boxes
        {
            
            background-color: white;
            float: left;
            margin: 40px;
            margin: 20px;
            align-content: center;
        }

       #thoughts
       {
            border-radius: 100px;
            -moz-border-radius : 10px;
            -webkit-border-radius : 10px;
            width: 300px;
            height: 50px;
       }
    </style>

    <script>
        function deleteShare(id)
        {
            document.getElementById(id).style.display = "none";
        }

        function MoreOptions()
        {
            document.getElementById("More").style.display = "none";
            document.getElementById("ExtraOptions").style.display = "";
        }

        function yourThoughts()
        {
            alert(document.getElementById("thoughts").value);
        }
    </script>
    <body>
        <?php 
            include 'content.php'; 
            $username = $_GET["username"];
            $password = $_GET["password"];

            $check = false;
            $person = 0;

            for($i=0; $i<count($content); $i++)
            {
                if($content[$i]["username"] == $username && $content[$i]["password"] == $password )
                {
                    $person = $i;
                    $check = true;
                    continue;
                }

            }

            if($check == false)
            {
                ?>  <p style="font-style: italic;">Your password or username is wrong</p> 
                    <a href = "LogInPage.html">Back to login page.</a>
                <?php
            }
            else
            {
         ?>
        <div id="Facebook">
            <div id="Profil" >
                <h3 id="name"><img id="profile_picture" width="50px" height="50px" src = "<?php echo $content[$person]["image"]?>" /> <?php echo $content[$person]["name"]?></h3>
    
                <div id="Menu">
                    <p>Φίλοι</p>
                    <p>Πρόσφατα</p>
                    <p>Αγαπημένα</p>
                    <p>Ομάδες</p>
                    <p>Marketplace</p>
                    <p id ="More" onclick="MoreOptions()">Δείτε περισσότερα</p>
                    <div id="ExtraOptions" style="display: none;">
                        <p>Messenger</p>
                        <p>Καιρός</p>
                        <p>Παιχνίδια</p>
                    </div>
                    
                </div>
            </div>
            
            <div id="Shares">
                <div class="boxes" style="height: 80px;">
                    <h4 id="name"><img id="profile_picture" width="40px" height="40px" src = "<?php echo $content[$person]["image"]?>" /> <?php echo $content[$person]["name"]?> 
                            <input id="thoughts" type="text" value="Τι σκέφτεστε;"/>
                            <input type="submit" value="Κοινοποίηση" onclick="yourThoughts()"/>
                       </h4>
                </div>

                <?php
                    foreach($content[$person]["articles"] as $article)
                    {
                    ?>
                        <div id="<?php echo $article["id"]?>" class="boxes" style="height: 500px; width:600px;">
                        <img id="close" width="50px" height="40px" src = "images/close.jpg" style="float:right; margin: 10px;" onclick="deleteShare('<?php echo $article['id']?>')" />
                   
                            <h4 id="name"><img id="profile_picture" width="40px" height="40px" src = "<?php echo $article["postedBy"]["image"]?>" /> <?php echo $article["postedBy"]["name"]?> </h4>
                            <?php 
                                 echo $article["content"]?>
                            </div>
                        <?php
                    }
                    ?>
            </div>

            <div id="Epafes" >
                <h2>Επαφές</h2>
                 <?php
                    foreach($content[$person]["contacts"] as $contact)
                    {
                        ?>
                            <h4 id="name"><img id="profile_picture" width="40px" height="40px" src = "<?php echo $contact["image"]?>" /> <?php echo $contact["name"]?> </h4>
                        <?php
                    }
                 ?>
            </div>
        </div>

        <?php

            }
        ?>

        
    </body>
</html>