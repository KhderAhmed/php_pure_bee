


<?php
 require_once 'dash/nav.php';
 include("config.php");
$stmt=$conn->prepare('select * from client');
$stmt->execute();
$clients = $stmt->fetchAll();
?>

<!-- 
        <h2 class="text-success">show registeren & show  clients</h2>

        <?php
        include("config.php");
        $stmt=$conn->prepare('select * from users');
        $stmt->execute();
        $users = $stmt->fetchAll();
        ?>


        <table border=1>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>username</th>
                <th>email</th>

            </tr>
            <?php foreach($users as $users){ ?>
            <tr>
                <td><?= $users['id_user']?></td>
                <td><?= $users['name']?></td>
                <td><?= $users['username']?></td>
                <td><?= $users['email']?></td>
                <?php  } ?> -->






                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Users</div>
                    </div>


                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                         
      
                            <tr>
                                <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">type_product</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">address</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">phone</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">delete</th>
                            </tr>
                            </thead>
                            <?php foreach($clients as $client){ ?>

        
    
                            <tbody>
                            <tr>
                                <td class="py-3"><?= $client['id']?></td>
                                <td class="align-middle py-3">
                                
                                           
                                      
                                        <?= $client['name']?>
                                    
                                </td>
                                <td class="py-3"><?= $client['type_produect']?></td>
                                <td class="py-3"><?= $client['address']?></td>
                                <td class="py-3">
                                    <span class="badge badge-pill badge-success"><?= $client['phone']?></span>
                                 
                                </td>
                                <td class="py-3">   <a href="delete.php?id=<?= $client['id']?>">DELETE</a></td>
                                <?php  } ?>
                   
                            </tbody>
                        </table>
                        <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                            <div class="d-flex mb-2 mb-md-0">Showing 1 to 8 of 24 Entries</div>

                            <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination"><ul class="pagination justify-content-end font-weight-semi-bold mb-0">				<li class="page-item">				<a id="datatablePaginationPrev" class="page-link" href="#!" aria-label="Previous"><i class="gd-angle-left icon-text icon-text-xs d-inline-block"></i></a>				</li><li class="page-item d-none d-md-block"><a id="datatablePaginationPage0" class="page-link active" href="#!" data-dt-page-to="0">1</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination1" class="page-link" href="#!" data-dt-page-to="1">2</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination2" class="page-link" href="#!" data-dt-page-to="2">3</a></li><li class="page-item">				<a id="datatablePaginationNext" class="page-link" href="#!" aria-label="Next"><i class="gd-angle-right icon-text icon-text-xs d-inline-block"></i></a>				</li>				</ul></nav>
                        </div>
                    </div>
                    <!-- End Users -->
                </div>
            </div>


        </div>
        </div>

<?php  require_once 'dash/foot.php';  ?>