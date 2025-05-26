<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary panel-table">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3 style="font-weight:bold; color:#00a651;">User Registration</h3>   
                </div>
            </div>
            <div class="panel-body">
                <div class="panel-design">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_user_modal">
                        Create Account
                    </button>
                </div>    
                <table id="userTable" class="table table-responsive no-margin">
                    <thead>
                        <tr>
                            <th>UserAuth</th>
                            <th>Full name</th>
                            <th>Branch</th>
                            <th class="text-center">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $client = (new ControllerAdmin)->ControllerdisplayUserAcount();
                        foreach($client as $key => $value): ?>
                        <tr>
                            <td><?php echo $value['userAuth'];?></td>
                            <td><?php echo $value['Firstname']." ".$value['Lastname'];?></td>
                            <td class="text-center"><?php echo $value['Branch'];?></td>
                            <td id="td-buttons"><a type="button" class="btn btn-success">Update</a><a type="button" class="btn btn-danger deleteButton">Delete</a></td>
                        </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- MODAL -->
<div class="modal fade" id="create_user_modal">
    <div class="modal-dialog modal-create-user ">
        <form id="signUpPost" method="POST" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="font-size:1.5em; color: #00a651;">Create User</h4>
            </div>
            <div class="modal-body">
                <!-- <form action="" method="POST"> -->
                <div id="form-createUser">
                    <input type="text" placeholder="First name" id="first-name" required>
                    <input type="text" placeholder="Last name" id="last-name" required>
                    <input type="text" placeholder="Username" id="username" required>
                    <input type="Password" placeholder="Password" id="password" required>
                     <input type="Password" placeholder="Confirm Password" id="conf-password" required>
                    <select name="" id="branch" required>
                        <option value="">--Select Branch--</option>
                        <option value="Narra">Narra</option>
                        <option value="Kabankalan">Kabankalan</option>
                        <option value="Bago">Bago</option>
                        <option value="Sagay">Sagay</option>
                    </select>
                </div>
                <!-- </form> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
        </form>
    </div>
</div>
<style>
    .panel-design {
        border-bottom:1px solid #00a651;
        border-top:1px solid #00a651;
        padding:15px 0px;
        margin-bottom:15px;
        display:flex;
        justify-content:flex-end;
    }
    #form-createUser input, #form-createUser select {
        padding:10px;
        display:block;
        margin:10px 10px 10px 0px;
        width:300px;
        border-radius:5px;
        outline:none;
        border:1px solid #00a651;
        color: #00a651;
    }.modal-create-user {
        display: table;
        width: auto;
        /* max-width: 100%; */
        /* max-width: 90vw;  */
    }#td-buttons a{
        margin:0px 5px;
    }
</style>
