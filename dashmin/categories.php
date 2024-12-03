<?php
include "components/header.php";
?>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row bg-light rounded mx-0">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Category</button>
        </div>
        <div class="col-md-6 my-3 mx-3">
            <h3>ADD CATEGORY</h3>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>jhon@email.com</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>mark@email.com</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>jacob@email.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Blank End -->

<!-- add category Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ADD CATEGORY</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input type="text" name="catName" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category Image</label>
                        <input type="file" name="catImage" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="addCategory" class="btn btn-primary">Add Category</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
include "components/footer.php";
?>