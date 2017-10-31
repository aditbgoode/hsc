<div class="container" style="margin-top:5vh;">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div id="loginbox" class="mainbox text-center">                    
            <div class="panel-heading" style="padding:10px;">
                <a href="<?php base_url();?>ind"><img src="assets/img/home.png" alt="" class="img-responsive" style="height:300px;"></a>
            </div>     
            <div class="panel panel-info">
                <div style="padding-top:30px" class="panel-body" >
                    <?php 
                        $attributes = array('class' => "form-signin");
                        echo form_open('login/process',$attributes); 
                    ?>
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="email" id="login" placeholder="Email" required autofocus>
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </div> 
                    <?php 
                        if(! is_null($msg)) echo $msg;
                        form_close();
                    ?>
                </div>                     
            </div>  
        </div>
    </div>
</div>