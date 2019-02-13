
                <?php
                echo'<div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                <nav>
                    <ul class="pagination">
                        <li class="page-item ';
                        if($page==1){
                            echo'active';
                        }
                        
                        echo'"><a class="page-link" href="blog.php">01</a></li>
                        <li class="page-item ';
                        if($page==2){
                            echo'active';
                        }
                        
                        echo'                        
                        "><a class="page-link" href="blog2.php">02</a></li>
                        <li class="page-item ';
                        if($page==3){
                            echo'active';
                        }
                        
                        echo'"><a class="page-link" href="blog3.php">03</a></li>
                    </ul>
                </nav>
            </div>';
                ?>