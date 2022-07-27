<?php
$fetch_rates = $con->query("SELECT * FROM `rates` WHERE `id`='{$_GET['id']}'");

$data = mysqli_fetch_array($fetch_rates);
?>


<a href="?rates=true" class="btn btn-outline-primary m-3 float-end">Back</a>


<div class="container-fluid py-4 mt-6">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit <?= $data['rate'] ?> </h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <form action="php/scripts/urate.php" method="POST" enctype="multipart/form-data">
                    <input value="<?= $data['id'] ?> " type="hidden" name="id" class="form-control">


                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Unit</label>
                                    <input value="<?= $data['unit'] ?> " type="number" name="unit" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Rate </label>
                                    <input value="<?= $data['rate'] ?> " type="number" name="rate" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">

                                    <input type="submit" name="edit_rates" class="btn btn-primary" value="save">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>