<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        </div>
        <form action="{{ route('user-post-login') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-search light">
                    <div class="row row-inputs">
                        <div class="container-fluid">
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your email"
                                        autocomplete="on">
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Your password" name="password" autocomplete="on">
                                    <span class="form-control-icon"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                    <div class="col-xs-6">
                                        <a href="{{ route('user-register') }}" style="color: #F0C540"
                                            class="link-secondary text-decoration-none btn_modal">Create new account</a>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <a href="{{ route('forget.password.get') }}" style="color: #F0C540" class="link-secondary text-decoration-none">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bsb-btn-3xl btn-danger" data-dismiss="modal"
                    aria-label="Close">Close</button>
                <button class="btn bsb-btn-3xl btn-success" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>