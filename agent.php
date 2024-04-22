<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");							
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/agent.css">
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <div class="agent">
            <div class="agentmain">
                    <div class="agentupper">
                        Agents
                    </div>
                    <div class="agentlineone"></div>
                    <div class="agentlinetwo"></div>
                    <div class="agentlover">
                    <?php 
							$query=mysqli_query($con,"SELECT * FROM user WHERE utype='agent'");
								while($row=mysqli_fetch_array($query))
								{
                            ?>
                        <div class="agentloverin">
                            <div class="agentloverinimg"><img src="admin/user/<?php echo $row['6'];?>" alt="Agent"></div>
                            <div class="agentloverintext1"><?php echo $row['1'];?></div>
                            <div class="agentloverintext2">Real Estate - Agent</div>
                        </div>
                        <?php } ?>
                        <!-- <div class="agentloverin">
                            <div class="agentloverinimg"><img src="Images/agent.png" alt="Agent"></div>
                            <div class="agentloverintext1">Agent Two</div>
                            <div class="agentloverintext2">Real Estate - Agent</div>
                        </div>
                        <div class="agentloverin">
                            <div class="agentloverinimg"><img src="Images/agent.png" alt="Agent"></div>
                            <div class="agentloverintext1">Agent Three</div>
                            <div class="agentloverintext2">Real Estate - Agent</div>
                        </div>
                        <div class="agentloverin">
                            <div class="agentloverinimg"><img src="Images/agent.png" alt="Agent"></div>
                            <div class="agentloverintext1">Agent Four</div>
                            <div class="agentloverintext2">Real Estate - Agent</div>
                        </div> -->
                    </div>
            </div>
        </div>
    </section>
    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>
</html>