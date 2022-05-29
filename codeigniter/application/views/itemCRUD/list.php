<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Mennr Projects</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>Name</th>
          <th>Is Number</th>
          <th>Is Alphabet</th>
          <th>Number of times</th>
          <th>Generated Value</th>

          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->title; ?></td>
          <td><?php echo $item->isnumber; ?></td>
          <td><?php echo $item->isalpha; ?></td>
          <td><?php echo $item->opt; ?></td>
          <td><?php echo $item->description; ?></td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$item->id);?>">
          <a class="btn btn-info" href="<?php echo base_url('itemCRUD/'.$item->id) ?>"> show</a>
         <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$item->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>