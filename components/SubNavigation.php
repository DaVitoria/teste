<?php
    $active_d = '';
    $active_w = '';
    $active_t = '';
    if(isset($_GET['tab']) && $_GET['tab'] !=''){
        $tab = mysqli_escape_string($con,$_GET['tab']);
        if($tab == 'd'){
            $active_d = 'active';
        }else if($tab == 'w'){
            $active_w = 'active';
        }else if($tab == 't'){
            $active_t = 'active';
        }
    }

?>
<!-- -----------Transaction Functionality------------ -->
    <div class="container" id="transaction">
        <div class="row text-center">
                <h2>Transação</h2>
                <p>Escolha Tab e Prosiga a Transação</p>
            </div>
        <div class="row">
            <div class="col-xl-12 mt-2">
                <ul class="nav nav-tabs d-flex  justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-info text-uppercase <?php echo $active_d; ?>" aria-current="page" href="<?php echo SITE__PATH; ?>/sub_pages/Deposite.php?type=n&tab=d">Depósito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info text-uppercase <?php echo $active_w; ?>" href="<?php echo SITE__PATH; ?>/sub_pages/Withdrwal.php?type=n&tab=w">Cancelar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info text-uppercase <?php echo $active_t; ?>" href="<?php echo SITE__PATH; ?>/sub_pages/Transfer.php?type=n&tab=t">Transferir</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- --------X---Transaction Functionality---X--------- -->
