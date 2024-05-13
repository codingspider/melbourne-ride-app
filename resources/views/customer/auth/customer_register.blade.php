<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        </div>
        <form action="{{ route('user-register-post') }}" method="POST">
            @csrf 
            <div class="modal-body">
                <div class="form-search light">
                    <div class="row row-inputs">
                        <div class="container-fluid">
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="formSearchUpLocation2">First Name</label>
                                    <input type="text" class="form-control" name="first_name"
                                        placeholder="Your First Name">
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="formSearchOffLocation2">Last Name</label>
                                    <input type="text" class="form-control" name="last_name"
                                        placeholder="Your Last Name">
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="formSearchOffLocation2">Email Address</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email">
                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="formSearchOffLocation2">Mobile Phone</label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="Your Phone">
                                    <span class="form-control-icon"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="formSearchOffLocation2">Password</label>
                                    <input type="password" name="password" class="form-control" id="formSearchOffLocation2"
                                        placeholder="Your password">
                                    <span class="form-control-icon"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="formSearchOffLocation2">Confirm Password</label>
                                    <input type="password" name="confirm-password" class="form-control" id="formSearchOffLocation2"
                                        placeholder="Confirm password">
                                    <span class="form-control-icon"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                <a href="{{ route('user-login') }}" style="color: #F0C540" class="link-secondary text-decoration-none btn_modal">I already have an account Login Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn bsb-btn-3xl btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                <button class="btn bsb-btn-3xl btn-success" type="submit">Create Account</button>
            </div>
        </form>
    </div>
</div>