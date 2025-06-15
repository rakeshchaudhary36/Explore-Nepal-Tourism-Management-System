<?php
include('security.php');
//include('delete1.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="display.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!--<h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>-->
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM book_form";
                $query_run = mysqli_query($connection, $query);
              
            ?>
            <h1>BOOKING DETAILS:</h1>
            <h1 class="log"><a href="adminpage.html"><button class="logout">go back!</button></a></h1>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                       <tr>
                            <!--<td> ID </td>
                            <td> Name</td>
                            <td> Email </td>
                            <td> Phone No. </td>
                            <td> Address</td>
                            <td> Location</td>
                            <td> Guests </td>
                            <td> Package</td>
                            <td> Price</td>
                            <td> Arrival</td>
                            <td>Leaving</td>
                           <td> Update</td>
                            <td> Cancel</td>-->
                            
                            <th>ID</th>
                            <th> Name </th>
                            <th>Email </th>
                            <th>Phone No.</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>Guests</th>
                            <th>Package</th>
                            <th>Price(Rs)</th>
                            <th>Arrival</th>
                            <th>Leaving</th>
                            <!-- <th>Operation</th> -->
                            <th>Update</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phone']; ?></td>
                                <td><?php  echo $row['address']; ?></td>
                                <td><?php  echo $row['location']; ?></td>
                                <td><?php  echo $row['guests']; ?></td>
                                <td><?php  echo $row['package']; ?></td>
                                <td><?php  echo $row['price']; ?></td>
                                <td><?php  echo $row['arrivals']; ?></td>
                                <td><?php  echo $row['leaving']; ?></td>
                                <td>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> UPDATE</button>
                                    </form>
                                </td>
                                <td>
                                     <form action="delete1.php" method="post">
                                        <input type="hidden" name="cancel_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete" class="btn btn-danger"> CANCEL</button>
                                    </form> 
                                    



                                </td>
                            </tr>
                           
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
                
                                
            </div>
        </div>
    </div>

</div>
