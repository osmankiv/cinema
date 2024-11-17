 <?php
  $link = mysqli_connect("localhost", "root", "", "cinema_db");
                        if(isset($_POST['submit'])){
                            $insert_query = "INSERT INTO 
                            movieTable (  movieImg,
                                            movieTitle,
                                            movieGenre,
                                            movieDuration,
                                            movieRelDate,
                                            movieDirector,
                                            movieActors)
                            VALUES (        'img/".$_FILES["movieImg"]["name"]."',
                                            '".$_POST["movieTitle"]."',
                                            '".$_POST["movieGenre"]."',
                                            '".$_POST["movieDuration"]."',
                                            '".$_POST["movieRelDate"]."',
                                            '".$_POST["movieDirector"]."',
                                            '".$_POST["movieActors"]."')";
                            mysqli_query($link,$insert_query);}
                            $itme_dir = "../";
                            $name=$_FILES["movieImg"]["name"];
                            $temp=$_FILES["movieImg"]["tmp_name"];
                            $file_dir = dirname(__FILE__).$itme_dir.$name;
                            if(move_uploaded_file($temp,$file_dir)){
                             echo"done uplod";
                             header("location:../admin/admin.php");
                            }
                        ?>