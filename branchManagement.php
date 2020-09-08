<?php
include('includes/header.php'); 
?>





<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Branch Management
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add New Branch 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Branchname </th>
            <th>Address </th>
            <th>Contact</th>
            <th>Branch Manager </th>
            <th>Number of employee </th>
            <th>Edit </th>
            <th>Send Iteams </th>
          </tr>
        </thead>
        <tbody>
     
          <tr>
            <td> 1 </td>
            <td> Kathmandu</td>
            <td> Koteshowor</td>
            <td> 011123456 </td>
            <td> Dipesh Badal</td>
            <td> 42</td>
            <td>

                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="message_id" value="">
                  <button type="submit" name="Message_btn" class="btn btn-danger"> Send Items</button>
                </form>
            </td>
          </tr>
           <tr>
            <td> 2 </td>
            <td> Kathmandu</td>
            <td> Baneshowr</td>
            <td> 011123475 </td>
            <td> Sailesh Subedi</td>
            <td> 52</td>
            <td>

                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="message_id" value="">
                  <button type="submit" name="Message_btn" class="btn btn-danger"> Send Items</button>
                </form>
            </td>
          </tr>
          <tr>
            <td> 3 </td>
            <td> Chitwan</td>
            <td> Rampur</td>
            <td> 095123456 </td>
            <td> Diwas Poudel</td>
            <td> 44</td>
            <td>

                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="message_id" value="">
                  <button type="submit" name="Message_btn" class="btn btn-danger"> Send Items</button>
                </form>
            </td>
          </tr>
          <tr>
            <td> 4 </td>
            <td> Hetauda</td>
            <td> Makwanpur gadi</td>
            <td> 075123456 </td>
            <td> Dipesh Rijal</td>
            <td> 82</td>
            <td>

                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="message_id" value="">
                  <button type="submit" name="Message_btn" class="btn btn-danger"> Send Items</button>
                </form>
            </td>
          </tr>
          <tr>
            <td> 5 </td>
            <td> Banepa</td>
            <td> Chardobato</td>
            <td> 01123456 </td>
            <td> Umesh Sapkota</td>
            <td> 97</td>
            <td>

                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="message_id" value="">
                  <button type="submit" name="Message_btn" class="btn btn-danger"> Send Items</button>
                </form>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
//include('includes/footer.php');
?>