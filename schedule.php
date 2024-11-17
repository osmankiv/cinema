<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<header>
    <?php
        $link = mysqli_connect("localhost", "root", "", "cinema_db");
        // $sql = "SELECT * FROM schedule";
    ?>
</header>
<body>
    <div class="schedule-section">
        <h1>Schedule</h1>
        <div class="schedule-dates">
          
                <form action="" method="POST">
                    <!-- <button  class="schedule-item" name="mines"><</button> -->
                    <button  class="schedule-item">scarch</button>
                    <input type="date" value="time" class="schedule-item" name="dschedule">
                    <button  class="schedule-item">scarch</button>
                    <!-- <button class="schedule-item" name="mines">></button> -->
                </form>
        </div>
        <div class="schedule-table">
            <table>
                  <?php
                        if(isset($_POST['dschedule'])){
                            $displad = $_POST['dschedule'] ;
                            $sql = "SELECT * FROM schedule WHERE `day` ='$displad'" ;

                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = $result->fetch_assoc()){
                        
                    ?>
                <tr>
                    <th>SHOW</th>
                    <th>SCHEDULE IN CINEMA</th>
                </tr>
                  
                <tr class="fade-scroll">
                    <td>
                      
                        <h2><?=$row['name']?></h2>
                        <i class="far fa-clock"></i> <?=$row['time']?>m<i class="fas fa-desktop"></i> <?=$row['size']?>
                        <h3>SYNOPSIS</h3>
                        <p><?=$row['story']?>
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item"><?=$row['p_t_1']?> AM</div>
                                <div class="schedule-item"><?=$row['p_t_2']?> AM</div>
                                <div class="schedule-item"><?=$row['p_t_3']?> PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item"><?=$row['v_t_1']?>AM</div>
                                <div class="schedule-item"><?=$row['v_t_2']?>AM</div>
                                <div class="schedule-item"><?=$row['v_t_3']?>PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item"><?=$row['m_t_1']?>AM</div>
                                <div class="schedule-item"><?=$row['m_t_2']?>AM</div>
                                <div class="schedule-item"><?=$row['m_t_3']?>PM</div>
                            </div>
                        </div>
                    </td>
                    
                        
                </tr>
                <?php
                                    }
                                }
                                else{
                                    echo '<h4 class="no-annot">No movies on '.$displad.' </h4>';
                                }
                            }
                        }  
                    
                        
                    ?>
                
            </table>
        </div>


    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>