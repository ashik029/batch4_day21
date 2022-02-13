<?php include "pages/includes/header.php";?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-capitalize">Prime Number Check</h3>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">First number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="first_number">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Last number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="last_number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" readonly class="form-control" value="<?php echo isset($result)?$result : ''?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="primebtn" class="btn-outline-success btn-block" value="show result">
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php include 'pages/includes/footer.php';?>
