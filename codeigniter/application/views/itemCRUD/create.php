<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('itemCRUDCreate');?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="title" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>What do you want to Generate?</label></br>
                <input type="checkbox" name="isalpha">
                <label>Albhabet</label><br/>
                <input type="checkbox" name="isnumber">
                <label>Numeric</label><br/><br/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value:</strong>
                <select class="form-control" name="opt">
                    <option selected>Generator Dropdown</option>
                     <option value=1>1</option>
                    <option value=100>100</option>
                    <option value=1000>1000</option>
                    <option value=10000>10000</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>