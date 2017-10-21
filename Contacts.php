
<?php
$title="Contact";
require 'Head.php';
?>

    <!-- Banner starts here -->

    <div style="height: 45px;">

    </div>

    <!-- Banner ends here -->


    <!-- Main content starts here -->

    <div class="featured-blocks">
        <div class="row-fluid">
            <div class="featured-heading">
                <h1>Contacts</h1>
                <!--<h5>Phasellus ultrices nulla quis</h5> -->
            </div>
        </div>
        <div class="row-fluid">


            <div class="span6">
                <div class="block">
                    <div class="block-title">
                        <h1>Address</h1>

                    </div>
                    <div class="block-content">
                        <p><b>Sadhana Pre School <br>Hoaragasmulla,<br>Divulapitiya,<br>Sri Lanka</b></p>


                    </div>
                </div>
                <div class="block">
                    <div class="block-title">
                        <h1>Telephone</h1>

                    </div>
                    <div class="block-content">
                        <p><b>Land Line </b></p>
                        <p><b>Mobile    :077-3509323 </b></p>

                    </div>
                </div>
                <div class="block">
                    <div class="block-title">
                        <h1>Digital Media</h1>

                    </div>
                    <div class="block-content">
                        <p><b> Web :       <a href="https://www.sadhanapreschool.com/">www.sadhanapreschool.com</a>  </b></p>
                        <p><b>Email : ajanthawijesinghe65@gmail.com </b></p>
                        <p><b>Facebook : <a href="https://www.facebook.com/groups/672204152902391/">Sadhana Pre School</a> </b></p>

                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="block">
                    <div class="block-title">
                        <h1>Google Map</h1>

                    </div>
                    <div class="block-content">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11195.674983553054!2d80.0084441832507!3d7.210140060780568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3dee221fdad8028!2sSadhana+Pre+School!5e0!3m2!1sen!2slk!4v1507242918406" width="550" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>



            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <h2>Pellen tesque lacinia</h2>

                <p>Phasellus adipiscing porttitor metus, eget commodo mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit ante. Phasellus viverra ligula tortor, ut sodales elit tempus eu. Vestibulum mattis sed purus at laoreet. Proin mattis, ante vel adipiscing porttitor, orci elit venenatis nibh, at molestie tortor dolor sit amet urna.  .</p>
            </div>
            <?php
            require 'dbcon/user.php';
            require 'dbcon/dbcon.php';


            $sql ="SELECT * FROM tb_Photos ";
            $result=mysqli_query($conn,$sql);
            if($result!="Select Course"){
                while ($row = mysqli_fetch_array($result))
                {
                    echo $row['Link'];





                }

            }
            ?>




        </div>
    </div>



    <!-- Featured slider ends here -->


    <!-- Featured content starts here -->



    <!-- Featured ends here -->
    <!-- Featured accordion starts here -->


    <!-- Featured accordion ends here -->

    <!-- Main content ends here -->

<?php
    require 'footer.php';
?>
