            <div class="col-lg-4">
                

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Bus Search</h4>
                    <form action="search.php" method="post">

                        
                            <input name="source" type="text" class="form-control" placeholder="Source">
                            <input name="destination" type="text" class="form-control" placeholder="Destination" style="margin-top: 10px;">


                            <input type="date" style="margin-top: 10px;" min=<?php echo date('Y-m-d');?> max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 29 days'));?> name="date" class="form-control" id="date" placeholder="dd/mm/yyyy" >
                            
                            <button class="btn btn-primary" name="submit" style="margin-right: 130px; margin-top: 10px;">Search</button>
                        
                    </form>
                    <!-- /.input-group -->
             
</div>

                <!-- Login -->
                <?php

                    if (!isset($_SESSION['user'])) {
                        ?>
                           
                            
                        
                <?php } ?>

                



                <!-- Blog Categories Well -->
                <div class="well">


                    <?php 

                        $query = "SELECT *  FROM  categories";
                        $select_categories_sidebar = mysqli_query($connection,$query);

                     ?>




       
                                
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>


                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

            </div>